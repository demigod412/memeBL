#!/usr/bin/env bash
# =============================================================================
#  memeBL (Laravel 8) one-shot deployer
#  Target : AWS Lightsail, Ubuntu 22.04 / 24.04
#  Stack  : Nginx + PHP-FPM + MySQL + Composer + Certbot (Let's Encrypt)
#  DNS    : Cloudflare (orange-cloud proxy supported)
#
#  Usage  : sudo bash deploy-memebl.sh
#  Re-run : safe. Saved answers are reused, the DB is never re-imported if it
#           already has tables, and .env is preserved across git updates.
# =============================================================================
set -Eeuo pipefail
trap 'echo -e "\n\e[31m[ERROR]\e[0m Failed at line $LINENO. See /var/log/memebl-deploy.log" >&2' ERR

export DEBIAN_FRONTEND=noninteractive
export NEEDRESTART_MODE=a
export COMPOSER_ALLOW_SUPERUSER=1

LOG=/var/log/memebl-deploy.log
STATE=/root/.memebl-deploy.conf
exec > >(tee -a "$LOG") 2>&1

c_g=$'\e[32m'; c_y=$'\e[33m'; c_r=$'\e[31m'; c_b=$'\e[36m'; c_0=$'\e[0m'
info() { echo "${c_g}[+]${c_0} $*"; }
warn() { echo "${c_y}[!]${c_0} $*"; }
die()  { echo "${c_r}[x]${c_0} $*" >&2; exit 1; }
step() { echo; echo "${c_b}=== $* ===${c_0}"; }

[[ $EUID -eq 0 ]] || die "Run as root:  sudo bash $0"
. /etc/os-release
[[ "${ID:-}" == "ubuntu" ]] || die "This script supports Ubuntu only."

# ----------------------------------------------------------------------------
# Defaults (overridden by saved state from a previous run)
# ----------------------------------------------------------------------------
DOMAIN=""; WITH_WWW="y"; ADMIN_EMAIL=""; CERT_METHOD="1"
REPO_URL="https://github.com/demigod412/memeBL.git"; BRANCH="master"
APP_DIR="/var/www/memebl"
DB_NAME="memebl"; DB_USER="memebl"; DB_PASS=""
NEW_APP_KEY="y"; IMPORT_SQL="y"; TZ_NAME="UTC"
# shellcheck disable=SC1090
[[ -f "$STATE" ]] && . "$STATE"

ask() { # ask VAR "Prompt" [default]
  local __var="$1" __prompt="$2" __def="${3-}" __in
  if [[ -n "$__def" ]]; then read -r -p "$__prompt [$__def]: " __in || true; __in="${__in:-$__def}"
  else read -r -p "$__prompt: " __in || true; fi
  printf -v "$__var" '%s' "$__in"
}
yn() { # yn VAR "Prompt" default(y/n)
  local __v="$1" __p="$2" __d="$3" __in
  while true; do
    read -r -p "$__p [$( [[ $__d == y ]] && echo Y/n || echo y/N )]: " __in || true
    __in="${__in:-$__d}"; __in="${__in,,}"
    case "$__in" in y|yes) printf -v "$__v" y; return;; n|no) printf -v "$__v" n; return;; esac
  done
}

# ----------------------------------------------------------------------------
step "Configuration"
# ----------------------------------------------------------------------------
echo "Make sure these are done BEFORE continuing:"
echo "  1) Lightsail > Networking: open TCP 80 and 443 (22 is open by default)"
echo "  2) Lightsail static IP attached to this instance"
echo "  3) Cloudflare DNS: A record  <domain> -> your static IP  (and www if wanted)"
echo

while true; do
  ask DOMAIN "Domain name (e.g. example.com, no https://, no www)" "$DOMAIN"
  DOMAIN="${DOMAIN,,}"; DOMAIN="${DOMAIN#http://}"; DOMAIN="${DOMAIN#https://}"; DOMAIN="${DOMAIN%%/*}"
  [[ "$DOMAIN" =~ ^([a-z0-9]([a-z0-9-]{0,61}[a-z0-9])?\.)+[a-z]{2,}$ ]] && break
  warn "That doesn't look like a valid domain."
done
DOMAIN="${DOMAIN#www.}"

yn WITH_WWW "Also serve www.$DOMAIN" "$WITH_WWW"

while true; do
  ask ADMIN_EMAIL "Domain admin email (used for the SSL certificate / expiry notices)" "$ADMIN_EMAIL"
  [[ "$ADMIN_EMAIL" =~ ^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$ ]] && break
  warn "Please enter a valid email address."
done

echo
echo "SSL validation method:"
echo "  1) HTTP-01  - no extra setup (works with Cloudflare proxy in most cases)"
echo "  2) DNS-01   - uses a Cloudflare API token (most reliable behind Cloudflare)"
ask CERT_METHOD "Choose 1 or 2" "$CERT_METHOD"
[[ "$CERT_METHOD" == "1" || "$CERT_METHOD" == "2" ]] || die "Invalid choice."

CF_TOKEN=""
if [[ "$CERT_METHOD" == "2" ]]; then
  echo "Create a token at Cloudflare > My Profile > API Tokens > 'Edit zone DNS' (Zone:DNS:Edit for this zone)."
  read -r -s -p "Cloudflare API token (input hidden): " CF_TOKEN; echo
  [[ -n "$CF_TOKEN" ]] || die "Token required for DNS-01."
fi

ask REPO_URL "Git repo URL" "$REPO_URL"
ask BRANCH   "Branch" "$BRANCH"
ask APP_DIR  "Install directory" "$APP_DIR"
ask DB_NAME  "MySQL database name" "$DB_NAME"
ask DB_USER  "MySQL username" "$DB_USER"
[[ "$DB_NAME" =~ ^[A-Za-z0-9_]+$ && "$DB_USER" =~ ^[A-Za-z0-9_]+$ ]] || die "DB name/user: letters, digits, underscore only."
ask TZ_NAME  "App timezone (e.g. UTC, Africa/Lagos)" "$TZ_NAME"
yn NEW_APP_KEY "Generate a NEW APP_KEY? (recommended - the key in the repo's .env is public)" "$NEW_APP_KEY"
yn IMPORT_SQL  "Import memeauto_billinew_backup.sql from the repo if the database is empty? (n = run migrations instead)" "$IMPORT_SQL"

[[ -n "$DB_PASS" ]] || DB_PASS="$(openssl rand -base64 48 | tr -dc 'A-Za-z0-9' | cut -c1-28)"

SERVER_NAMES="$DOMAIN"; CERT_DOMAINS=(-d "$DOMAIN")
if [[ "$WITH_WWW" == y ]]; then SERVER_NAMES="$DOMAIN www.$DOMAIN"; CERT_DOMAINS+=(-d "www.$DOMAIN"); fi

echo
echo "---------------- Summary ----------------"
echo " Domain      : $SERVER_NAMES"
echo " SSL email   : $ADMIN_EMAIL   (method: $([[ $CERT_METHOD == 1 ]] && echo HTTP-01 || echo DNS-01/Cloudflare))"
echo " Repo        : $REPO_URL ($BRANCH)"
echo " Install dir : $APP_DIR"
echo " Database    : $DB_NAME / $DB_USER"
echo " New APP_KEY : $NEW_APP_KEY   Import SQL: $IMPORT_SQL"
echo "-----------------------------------------"
yn GO "Proceed?" y
[[ "$GO" == y ]] || die "Aborted."

# Save answers (never the Cloudflare token)
umask 077
{
  for v in DOMAIN WITH_WWW ADMIN_EMAIL CERT_METHOD REPO_URL BRANCH APP_DIR DB_NAME DB_USER DB_PASS NEW_APP_KEY IMPORT_SQL TZ_NAME; do
    printf '%s=%q\n' "$v" "${!v}"
  done
} > "$STATE"
chmod 600 "$STATE"
umask 022

# ----------------------------------------------------------------------------
step "Swap (small Lightsail plans need it for Composer/MySQL)"
# ----------------------------------------------------------------------------
MEM_MB=$(awk '/MemTotal/ {print int($2/1024)}' /proc/meminfo)
if [[ $MEM_MB -lt 2000 ]] && ! swapon --show | grep -q .; then
  info "RAM ${MEM_MB}MB, creating 2G swapfile"
  fallocate -l 2G /swapfile && chmod 600 /swapfile && mkswap /swapfile >/dev/null && swapon /swapfile
  grep -q '^/swapfile' /etc/fstab || echo '/swapfile none swap sw 0 0' >> /etc/fstab
else
  info "Swap not needed / already present"
fi

# ----------------------------------------------------------------------------
step "Installing packages"
# ----------------------------------------------------------------------------
# The app's composer.lock needs PHP >= 8.2 (doctrine/dbal 4.x). Ubuntu 22.04 ships
# PHP 8.1, so we use PHP 8.3 (native on 24.04, from the Ondrej PPA on 22.04).
PHPV="8.3"
apt-get update -qq
apt-get install -y -qq software-properties-common curl git unzip ufw cron ca-certificates openssl gnupg
if ! apt-cache policy "php${PHPV}-cli" 2>/dev/null | grep -q 'Candidate: [0-9]'; then
  info "Adding Ondrej PHP PPA for PHP ${PHPV}"
  add-apt-repository -y ppa:ondrej/php
  apt-get update -qq
fi
apt-get install -y -qq nginx mysql-server certbot python3-certbot-dns-cloudflare \
  "php${PHPV}-cli" "php${PHPV}-fpm" "php${PHPV}-mysql" "php${PHPV}-mbstring" "php${PHPV}-xml" \
  "php${PHPV}-curl" "php${PHPV}-zip" "php${PHPV}-gd" "php${PHPV}-bcmath" "php${PHPV}-intl" \
  "php${PHPV}-soap" "php${PHPV}-gmp"
# Composer: use the official current release (Ubuntu's apt version is too old for PHP 8.3)
if ! /usr/local/bin/composer --version >/dev/null 2>&1; then
  curl -fsSL https://getcomposer.org/download/latest-stable/composer.phar -o /usr/local/bin/composer
  chmod +x /usr/local/bin/composer
fi
# Make 'php' (CLI, cron, composer) use 8.3 even if another version is installed
update-alternatives --set php "/usr/bin/php${PHPV}" >/dev/null 2>&1 || true
# Retire any older FPM that a previous run may have installed
for old in /etc/php/*/fpm; do
  v="$(basename "$(dirname "$old")")"
  [[ "$v" != "$PHPV" ]] && systemctl disable --now "php${v}-fpm" >/dev/null 2>&1 || true
done
info "PHP version: $(php -r 'echo PHP_VERSION;')"
systemctl enable --now mysql nginx "php${PHPV}-fpm" >/dev/null 2>&1

cat > "/etc/php/${PHPV}/fpm/conf.d/99-memebl.ini" <<EOF
upload_max_filesize = 64M
post_max_size = 64M
memory_limit = 512M
max_execution_time = 120
expose_php = Off
date.timezone = ${TZ_NAME}
EOF
systemctl restart "php${PHPV}-fpm"

# ----------------------------------------------------------------------------
step "Firewall (UFW)"
# ----------------------------------------------------------------------------
ufw allow OpenSSH >/dev/null
ufw allow 80/tcp  >/dev/null
ufw allow 443/tcp >/dev/null
ufw --force enable >/dev/null
info "UFW enabled (22, 80, 443)"

# ----------------------------------------------------------------------------
step "Fetching application code"
# ----------------------------------------------------------------------------
mkdir -p "$(dirname "$APP_DIR")"
if [[ -d "$APP_DIR/.git" ]]; then
  info "Existing checkout found, updating"
  [[ -f "$APP_DIR/.env" ]] && cp -p "$APP_DIR/.env" /root/.memebl.env.bak
  git -C "$APP_DIR" fetch --all --quiet
  git -C "$APP_DIR" reset --hard "origin/$BRANCH" --quiet
  [[ -f /root/.memebl.env.bak ]] && cp -p /root/.memebl.env.bak "$APP_DIR/.env"
else
  [[ -e "$APP_DIR" ]] && [[ -n "$(ls -A "$APP_DIR" 2>/dev/null)" ]] && die "$APP_DIR exists and is not empty/not a git checkout."
  git clone --branch "$BRANCH" "$REPO_URL" "$APP_DIR"
fi
cd "$APP_DIR"
[[ -f artisan ]] || die "artisan not found in $APP_DIR - is this a Laravel project?"

# ----------------------------------------------------------------------------
step "Database"
# ----------------------------------------------------------------------------
mysql <<SQL
CREATE DATABASE IF NOT EXISTS \`${DB_NAME}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER IF NOT EXISTS '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASS}';
ALTER USER '${DB_USER}'@'localhost' IDENTIFIED BY '${DB_PASS}';
GRANT ALL PRIVILEGES ON \`${DB_NAME}\`.* TO '${DB_USER}'@'localhost';
FLUSH PRIVILEGES;
SQL
info "Database '${DB_NAME}' and user '${DB_USER}' ready"

# ----------------------------------------------------------------------------
step "Environment file (.env)"
# ----------------------------------------------------------------------------
set_env() { # set_env KEY VALUE  (safe for any characters)
  local f="$APP_DIR/.env"; touch "$f"
  KEY="$1" VAL="$2" awk '
    BEGIN{k=ENVIRON["KEY"]; v=ENVIRON["VAL"]; d=0}
    index($0, k"=")==1 {print k"="v; d=1; next}
    {print}
    END{if(!d) print k"="v}' "$f" > "$f.tmp" && mv "$f.tmp" "$f"
}
if [[ ! -f .env ]]; then
  if   [[ -f .env.example ]]; then cp .env.example .env
  else touch .env; fi
  info "Created .env from template"
fi
set_env APP_ENV production
set_env APP_DEBUG false
set_env APP_URL "https://${DOMAIN}"
set_env DB_CONNECTION mysql
set_env DB_HOST 127.0.0.1
set_env DB_PORT 3306
set_env DB_DATABASE "$DB_NAME"
set_env DB_USERNAME "$DB_USER"
set_env DB_PASSWORD "$DB_PASS"
set_env SESSION_SECURE_COOKIE true
set_env TIMEZONE "$TZ_NAME"
grep -q '^CRON_KEY=' .env || set_env CRON_KEY "$(openssl rand -hex 16)"

# ----------------------------------------------------------------------------
step "Composer dependencies"
# ----------------------------------------------------------------------------
composer install --no-dev --optimize-autoloader --no-interaction --no-progress

if [[ "$NEW_APP_KEY" == y ]] && [[ ! -f /root/.memebl-key-generated ]]; then
  php artisan key:generate --force
  touch /root/.memebl-key-generated
elif ! grep -Eq '^APP_KEY=.+' .env; then
  php artisan key:generate --force
fi

# ----------------------------------------------------------------------------
step "Database schema / data"
# ----------------------------------------------------------------------------
TABLES=$(mysql -N -e "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema='${DB_NAME}'")
if [[ "$TABLES" -eq 0 ]]; then
  if [[ "$IMPORT_SQL" == y && -f memeauto_billinew_backup.sql ]]; then
    info "Importing memeauto_billinew_backup.sql ..."
    mysql "$DB_NAME" < memeauto_billinew_backup.sql
  else
    info "Running migrations"
    php artisan migrate --force
  fi
else
  info "Database already has $TABLES tables - skipping import (running pending migrations only)"
  php artisan migrate --force || warn "Migrations reported an issue; check manually."
fi

# NOTE: config:cache / route:cache are deliberately NOT used - this app calls
# env() directly in routes/web.php and has closure routes, so caching breaks it.
php artisan storage:link 2>/dev/null || true
php artisan optimize:clear || true

# ----------------------------------------------------------------------------
step "Permissions"
# ----------------------------------------------------------------------------
chown -R root:root "$APP_DIR"
chown -R www-data:www-data "$APP_DIR/storage" "$APP_DIR/bootstrap/cache"
[[ -d "$APP_DIR/themes" ]] && chown -R www-data:www-data "$APP_DIR/themes"
find "$APP_DIR/storage" "$APP_DIR/bootstrap/cache" -type d -exec chmod 775 {} \;
find "$APP_DIR/storage" "$APP_DIR/bootstrap/cache" -type f -exec chmod 664 {} \;
chown root:www-data "$APP_DIR/.env"; chmod 640 "$APP_DIR/.env"
[[ -f "$APP_DIR/memeauto_billinew_backup.sql" ]] && chmod 600 "$APP_DIR/memeauto_billinew_backup.sql"

# ----------------------------------------------------------------------------
step "Scheduler (Laravel cron)"
# ----------------------------------------------------------------------------
cat > /etc/cron.d/memebl <<EOF
* * * * * www-data cd ${APP_DIR} && /usr/bin/php artisan schedule:run >> /dev/null 2>&1
EOF
chmod 644 /etc/cron.d/memebl

# ----------------------------------------------------------------------------
step "Cloudflare real-IP + Nginx"
# ----------------------------------------------------------------------------
cat > /usr/local/bin/update-cloudflare-ips <<'EOS'
#!/usr/bin/env bash
set -e
out=/etc/nginx/conf.d/cloudflare-realip.conf
tmp=$(mktemp)
{
  echo "# Auto-generated: restores real visitor IP behind Cloudflare"
  for u in https://www.cloudflare.com/ips-v4 https://www.cloudflare.com/ips-v6; do
    curl -fsS --max-time 15 "$u" | while read -r ip; do [ -n "$ip" ] && echo "set_real_ip_from $ip;"; done
  done
  echo "real_ip_header CF-Connecting-IP;"
  echo "real_ip_recursive on;"
} > "$tmp"
if [ "$(grep -c set_real_ip_from "$tmp")" -gt 5 ]; then mv "$tmp" "$out"; chmod 644 "$out"; nginx -t -q && systemctl reload nginx; else rm -f "$tmp"; echo "Could not fetch Cloudflare IPs; keeping old file" >&2; fi
EOS
chmod +x /usr/local/bin/update-cloudflare-ips
/usr/local/bin/update-cloudflare-ips || warn "Could not fetch Cloudflare IP list (visitor IPs will show Cloudflare's)."
echo '0 4 * * 1 root /usr/local/bin/update-cloudflare-ips >/dev/null 2>&1' > /etc/cron.d/cloudflare-ips

mkdir -p /var/www/letsencrypt

cat > /etc/nginx/snippets/memebl-app.conf <<EOF
root ${APP_DIR}/public;
index index.php;
charset utf-8;
client_max_body_size 64M;

add_header X-Content-Type-Options "nosniff" always;
add_header X-Frame-Options "SAMEORIGIN" always;
add_header Referrer-Policy "strict-origin-when-cross-origin" always;

gzip on;
gzip_types text/css application/javascript application/json image/svg+xml text/plain;

# Legacy asset path used by some views (mirrors the repo's .htaccess rules)
location ^~ /storage/app/public/ {
    alias ${APP_DIR}/storage/app/public/;
    access_log off;
    expires 7d;
    location ~ \.php\$ { return 403; }
}

# Never execute PHP from upload locations
location ~* ^/(storage|uploads|photos)/.*\.php\$ { return 403; }

location / {
    try_files \$uri \$uri/ /index.php?\$query_string;
}

location ~ \.php\$ {
    include snippets/fastcgi-php.conf;
    fastcgi_pass unix:/run/php/php${PHPV}-fpm.sock;
    fastcgi_read_timeout 120;
}

# Block dotfiles (except ACME) and sensitive extensions
location ~ /\.(?!well-known) { deny all; }
location ~* \.(sql|log|swp|bak|env|lock)\$ { deny all; }
EOF

write_http_only_vhost() {
cat > /etc/nginx/sites-available/memebl <<EOF
server {
    listen 80;
    listen [::]:80;
    server_name ${SERVER_NAMES};

    location ^~ /.well-known/acme-challenge/ { root /var/www/letsencrypt; default_type text/plain; }
    include snippets/memebl-app.conf;
}
EOF
}

write_ssl_vhost() {
cat > /etc/nginx/sites-available/memebl <<EOF
server {
    listen 80;
    listen [::]:80;
    server_name ${SERVER_NAMES};

    location ^~ /.well-known/acme-challenge/ { root /var/www/letsencrypt; default_type text/plain; }
    location / { return 301 https://${DOMAIN}\$request_uri; }
}

$( [[ "$WITH_WWW" == y ]] && cat <<EOW
server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name www.${DOMAIN};
    ssl_certificate     /etc/letsencrypt/live/${DOMAIN}/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/${DOMAIN}/privkey.pem;
    return 301 https://${DOMAIN}\$request_uri;
}
EOW
)

server {
    listen 443 ssl http2;
    listen [::]:443 ssl http2;
    server_name ${DOMAIN};

    ssl_certificate     /etc/letsencrypt/live/${DOMAIN}/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/${DOMAIN}/privkey.pem;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_prefer_server_ciphers off;
    ssl_session_cache shared:SSL:10m;
    ssl_session_timeout 1d;
    add_header Strict-Transport-Security "max-age=31536000" always;

    include snippets/memebl-app.conf;
}
EOF
}

rm -f /etc/nginx/sites-enabled/default
write_http_only_vhost
ln -sf /etc/nginx/sites-available/memebl /etc/nginx/sites-enabled/memebl
nginx -t
systemctl reload nginx
info "Site is live over HTTP; requesting certificate next"

# ----------------------------------------------------------------------------
step "SSL certificate (Let's Encrypt)"
# ----------------------------------------------------------------------------
get_cert_http() {
  certbot certonly --webroot -w /var/www/letsencrypt "${CERT_DOMAINS[@]}" \
    --email "$ADMIN_EMAIL" --agree-tos --no-eff-email --non-interactive --keep-until-expiring
}
get_cert_dns() {
  mkdir -p /root/.secrets/certbot
  umask 077
  echo "dns_cloudflare_api_token = ${CF_TOKEN}" > /root/.secrets/certbot/cloudflare.ini
  chmod 600 /root/.secrets/certbot/cloudflare.ini
  umask 022
  certbot certonly --dns-cloudflare --dns-cloudflare-credentials /root/.secrets/certbot/cloudflare.ini \
    --dns-cloudflare-propagation-seconds 30 "${CERT_DOMAINS[@]}" \
    --email "$ADMIN_EMAIL" --agree-tos --no-eff-email --non-interactive --keep-until-expiring
}

CERT_OK=n
if [[ "$CERT_METHOD" == "1" ]]; then
  if get_cert_http; then CERT_OK=y; else
    warn "HTTP-01 failed. Common causes behind Cloudflare: Always Use HTTPS / Full(strict) set before a cert exists,"
    warn "or the DNS record doesn't point to this server yet."
    yn TRY_DNS "Retry using Cloudflare DNS-01 (needs an API token)?" y
    if [[ "$TRY_DNS" == y ]]; then
      read -r -s -p "Cloudflare API token (input hidden): " CF_TOKEN; echo
      get_cert_dns && CERT_OK=y || true
    fi
  fi
else
  get_cert_dns && CERT_OK=y || true
fi

if [[ "$CERT_OK" != y ]]; then
  warn "Certificate was NOT issued. The site is running on HTTP only."
  warn "Fix the cause, then simply re-run:  sudo bash $0   (your answers are saved)"
  exit 1
fi

mkdir -p /etc/letsencrypt/renewal-hooks/deploy
cat > /etc/letsencrypt/renewal-hooks/deploy/reload-nginx.sh <<'EOF'
#!/bin/sh
systemctl reload nginx
EOF
chmod +x /etc/letsencrypt/renewal-hooks/deploy/reload-nginx.sh

write_ssl_vhost
nginx -t
systemctl reload nginx
systemctl enable --now certbot.timer >/dev/null 2>&1 || true
certbot renew --dry-run --quiet && info "Auto-renewal test passed" || warn "Renewal dry-run failed - check 'certbot renew --dry-run'"

# ----------------------------------------------------------------------------
step "Done"
# ----------------------------------------------------------------------------
cat <<EOF

${c_g}memeBL is deployed:${c_0}  https://${DOMAIN}

Cloudflare settings to check (dash.cloudflare.com > your domain):
  * SSL/TLS > Overview          : set to  "Full (strict)"
  * SSL/TLS > Edge Certificates : "Always Use HTTPS" = On (now safe)
  * DNS                         : A record(s) -> this server's static IP (orange cloud OK)

Credentials (also saved in ${STATE}, root-only):
  DB name : ${DB_NAME}
  DB user : ${DB_USER}
  DB pass : ${DB_PASS}

Useful:
  Log of this run  : ${LOG}
  App logs         : ${APP_DIR}/storage/logs
  Renew test       : certbot renew --dry-run
  Update the app   : sudo bash $0

${c_y}SECURITY - please read:${c_0}
  The repo is public and tracks .env, memeauto_billinew_backup.sql, .env.swp and error_log.
  Treat every secret in that .env (mail password, API keys, BitPay/Pusher/AWS, CRON_KEY,
  APP_KEY) and every account in that SQL dump as compromised: rotate them, make the repo
  private, and purge the files from git history.
EOF
