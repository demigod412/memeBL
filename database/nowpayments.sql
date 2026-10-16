-- NOWPayments gateway. Only needed if `php artisan migrate` can't be run;
-- it does the same as database/migrations/2026_10_16_000001_add_nowpayments_gateway.php

ALTER TABLE `settings_conts`
  ADD COLUMN `np_api_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  ADD COLUMN `np_ipn_secret` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  ADD COLUMN `np_sandbox` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no';

CREATE TABLE IF NOT EXISTS `np_transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(20,2) NOT NULL,
  `currency` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_currency` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actually_paid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'waiting',
  `deposit_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `np_transactions_order_id_unique` (`order_id`),
  KEY `np_transactions_invoice_id_index` (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `wdmethods` (`name`, `minimum`, `maximum`, `charges_amount`, `charges_type`, `duration`, `methodtype`, `type`, `status`, `defaultpay`, `created_at`, `updated_at`)
SELECT 'NOWPayments', '10', '1000000', '0', 'percentage', 'Automatic - credited after blockchain confirmation', 'crypto', 'deposit', 'disabled', 'yes', NOW(), NOW()
WHERE NOT EXISTS (SELECT 1 FROM `wdmethods` WHERE `name` = 'NOWPayments');

INSERT INTO `migrations` (`migration`, `batch`)
SELECT '2026_10_16_000001_add_nowpayments_gateway', COALESCE(MAX(`batch`), 0) + 1 FROM `migrations`;
