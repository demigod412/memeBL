<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <title>{{ $settings->site_name }}</title>
</head>
<body style="margin:0; padding:0; background-color:#0b0f1f; -webkit-text-size-adjust:100%;">
    {{-- Inbox preview line --}}
    <div style="display:none; max-height:0; overflow:hidden; opacity:0;">@yield('preheader')</div>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#0b0f1f;">
        <tr>
            <td align="center" style="padding:32px 16px;">
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="max-width:600px;">

                    {{-- Logo --}}
                    <tr>
                        <td align="center" style="padding:0 0 24px 0;">
                            <a href="{{ config('app.url') }}" style="text-decoration:none;">
                                @if (!empty($settings->logo))
                                    <img src="{{ asset('storage/' . $settings->logo) }}" alt="{{ $settings->site_name }}" height="44" style="display:block; height:44px; width:auto; border:0;">
                                @else
                                    <span style="font-family:Arial, Helvetica, sans-serif; font-size:24px; font-weight:bold; color:#ffffff;">{{ $settings->site_name }}</span>
                                @endif
                            </a>
                        </td>
                    </tr>

                    {{-- Card --}}
                    <tr>
                        <td style="background-color:#ffffff; border-radius:16px; overflow:hidden;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
                                {{-- Accent bar --}}
                                <tr><td style="height:6px; line-height:6px; font-size:0; background-color:#2DD98F;">&nbsp;</td></tr>
                                <tr>
                                    <td style="padding:40px 40px 32px 40px; font-family:Arial, Helvetica, sans-serif; color:#1f2937;">
                                        @yield('content')
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td align="center" style="padding:24px 16px 0 16px; font-family:Arial, Helvetica, sans-serif; font-size:12px; line-height:18px; color:#8b93a7;">
                            You're receiving this email because an account was created on
                            <a href="{{ config('app.url') }}" style="color:#2DD98F; text-decoration:none;">{{ $settings->site_name }}</a>.<br>
                            Need help? Reply to this email or contact
                            <a href="mailto:{{ $settings->contact_email }}" style="color:#2DD98F; text-decoration:none;">{{ $settings->contact_email }}</a>.<br><br>
                            &copy; {{ date('Y') }} {{ $settings->site_name }}. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
