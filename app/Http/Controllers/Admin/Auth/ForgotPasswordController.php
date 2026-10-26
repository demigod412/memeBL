<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Actions\Fortify\PasswordValidationRules;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\NewNotification;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    use PasswordValidationRules;
    public function forgotPassword()
    {
        return view('auth.admin-forgot-password', []);
    }

    public function sendPasswordRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email'
        ]);

        // Random, single-use code valid for 30 minutes; only its hash is stored
        $token = strtoupper(Str::random(10));

        $admin = Admin::where('email', $request->email)->first();
        $admin->password_token = now()->addMinutes(30)->timestamp . '|' . Hash::make($token);
        $admin->save();

        $message = "This is a password reset request from your account. Use $token to reset your password. please ignore if you did not make this request.";
        $subject = "Reset Password Request";
        Mail::to($request->email)->send(new NewNotification($message, $subject, "$admin->firstName $admin->lastName"));
        return redirect()->route('resetview', $admin->email)
            ->with('success', 'We just sent you an email containing a token to reset your password');
    }

    public function resetPassword($email)
    {
        $user = Admin::where('email', $email)->first();
        if (!$user) {
            return redirect('/');
        }
        return view('auth.admin-reset-pass', [
            'email' => $email,
        ]);
    }

    // Validate token
    public function validateResetPasswordToken(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'token' => 'required|string|max:50',
            'password' => $this->passwordRules(),
        ]);

        $user = Admin::where('email', $request->email)->first();
        [$expires, $hash] = array_pad(explode('|', (string) optional($user)->password_token, 2), 2, '');

        if (!$user || !$hash || (int) $expires < now()->timestamp || !Hash::check(strtoupper(trim($request->token)), $hash)) {
            return redirect()->back()
                ->with('message', 'Invalid or expired token. Request a new one.');
        }

        Admin::where('email', $request->email)->update([
            'password' => Hash::make($request->password),
            'password_token' => NULL,
        ]);

        return redirect()->route('adminloginform')->with('success', 'Password Reset successful, login now');
    }
}
