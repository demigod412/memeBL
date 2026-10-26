@extends('emails.layouts.brand')

@section('preheader')
    Confirm your email address to activate your {{ $settings->site_name }} account.
@endsection

@section('content')
    <h1 style="margin:0 0 8px 0; font-size:26px; line-height:34px; color:#0b0f1f;">Verify your email address</h1>
    <p style="margin:0 0 24px 0; font-size:16px; line-height:24px; color:#4b5563;">
        Hi {{ $user->name }}, please confirm that <strong style="color:#0b0f1f;">{{ $user->email }}</strong>
        is your email address to activate your {{ $settings->site_name }} account.
    </p>

    @include('emails.partials.button', ['url' => $url, 'label' => 'Verify my email'])

    <p style="margin:28px 0 0 0; font-size:14px; line-height:21px; color:#6b7280;">
        This link expires in {{ config('auth.verification.expire', 60) }} minutes. If it has expired, log in and
        request a new one.
    </p>
    <p style="margin:16px 0 0 0; font-size:13px; line-height:20px; color:#6b7280;">
        Button not working? Copy and paste this link into your browser:<br>
        <a href="{{ $url }}" style="color:#059669; word-break:break-all;">{{ $url }}</a>
    </p>
    <p style="margin:16px 0 0 0; font-size:13px; line-height:20px; color:#6b7280;">
        If you didn't create an account, you can safely ignore this email.
    </p>
@endsection
