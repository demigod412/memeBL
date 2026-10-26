@extends('emails.layouts.brand')

@section('preheader')
    Welcome to {{ $settings->site_name }}, {{ $user->name }}! Here's how to get started.
@endsection

@section('content')
    <h1 style="margin:0 0 8px 0; font-size:26px; line-height:34px; color:#0b0f1f;">Welcome aboard, {{ $user->name }} 🐂</h1>
    <p style="margin:0 0 24px 0; font-size:16px; line-height:24px; color:#4b5563;">
        Your {{ $settings->site_name }} account has been created. We're glad to have you with us.
    </p>

    @if ($settings->enable_verification == 'true' && !$user->hasVerifiedEmail())
        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin:0 0 24px 0;">
            <tr>
                <td style="background-color:#ecfdf5; border-left:4px solid #2DD98F; border-radius:8px; padding:16px 18px; font-size:15px; line-height:22px; color:#065f46;">
                    <strong>One last step:</strong> we've sent you a separate email with a link to verify your
                    email address. Please click it to activate your account. Can't find it? Check your spam folder.
                </td>
            </tr>
        </table>
    @endif

    <h2 style="margin:0 0 12px 0; font-size:18px; color:#0b0f1f;">Get started in 3 steps</h2>
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" border="0" style="margin:0 0 28px 0;">
        @php
            $steps = [
                ['Verify your email', 'Confirm your address so we can keep your account secure.'],
                ['Complete your profile', 'Add your details and secure your account in Account Settings.'],
                ['Fund your account', 'Make your first deposit and explore the platform.'],
            ];
        @endphp
        @foreach ($steps as $i => $step)
            <tr>
                <td width="40" valign="top" style="padding:0 0 16px 0;">
                    <div style="width:30px; height:30px; line-height:30px; border-radius:15px; background-color:#0b0f1f; color:#2DD98F; text-align:center; font-weight:bold; font-size:14px;">{{ $i + 1 }}</div>
                </td>
                <td valign="top" style="padding:4px 0 16px 0; font-size:15px; line-height:22px; color:#4b5563;">
                    <strong style="color:#0b0f1f;">{{ $step[0] }}</strong><br>{{ $step[1] }}
                </td>
            </tr>
        @endforeach
    </table>

    @include('emails.partials.button', ['url' => config('app.url') . '/dashboard', 'label' => 'Go to my dashboard'])

    <p style="margin:28px 0 0 0; font-size:14px; line-height:21px; color:#6b7280;">
        Your username: <strong style="color:#0b0f1f;">{{ $user->username }}</strong><br>
        For your security, we will never ask for your password by email or chat.
    </p>
    <p style="margin:20px 0 0 0; font-size:15px; line-height:22px; color:#4b5563;">
        Welcome to the herd,<br><strong style="color:#0b0f1f;">The {{ $settings->site_name }} Team</strong>
    </p>
@endsection
