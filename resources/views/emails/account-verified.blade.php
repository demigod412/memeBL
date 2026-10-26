@extends('emails.layouts.brand')

@section('preheader')
    Your email is verified. Your {{ $settings->site_name }} account is now fully active.
@endsection

@section('content')
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center" style="padding:0 0 20px 0;">
                <div style="width:64px; height:64px; line-height:64px; border-radius:32px; background-color:#2DD98F; color:#0b0f1f; font-size:34px; font-weight:bold; text-align:center;">&#10003;</div>
            </td>
        </tr>
    </table>

    <h1 style="margin:0 0 8px 0; font-size:26px; line-height:34px; color:#0b0f1f; text-align:center;">You're verified, {{ $user->name }}!</h1>
    <p style="margin:0 0 28px 0; font-size:16px; line-height:24px; color:#4b5563; text-align:center;">
        Your email address has been confirmed and your {{ $settings->site_name }} account is now fully active.
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin:0 0 28px 0; background-color:#f6f8fb; border-radius:12px;">
        <tr>
            <td style="padding:20px 22px; font-size:15px; line-height:24px; color:#4b5563;">
                <strong style="color:#0b0f1f;">What you can do now</strong><br>
                &#8226; Fund your account and explore the available plans<br>
                &#8226; Check upcoming workshops &amp; events in your dashboard<br>
                &#8226; Turn on two-factor authentication in Account Settings for extra security
            </td>
        </tr>
    </table>

    @include('emails.partials.button', ['url' => config('app.url') . '/dashboard', 'label' => 'Open my dashboard'])

    <p style="margin:28px 0 0 0; font-size:14px; line-height:21px; color:#6b7280;">
        If you didn't verify this account, please contact us right away at
        <a href="mailto:{{ $settings->contact_email }}" style="color:#059669;">{{ $settings->contact_email }}</a>.
    </p>
    <p style="margin:20px 0 0 0; font-size:15px; line-height:22px; color:#4b5563;">
        Happy trading,<br><strong style="color:#0b0f1f;">The {{ $settings->site_name }} Team</strong>
    </p>
@endsection
