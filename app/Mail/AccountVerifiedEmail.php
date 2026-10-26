<?php

namespace App\Mail;

use App\Models\Settings;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AccountVerifiedEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        $settings = Settings::find(1);

        return $this->view('emails.account-verified')
            ->subject("Your $settings->site_name account is verified")
            ->with([
                'user' => $this->user,
                'settings' => $settings,
            ]);
    }
}
