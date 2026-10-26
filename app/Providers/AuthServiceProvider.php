<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Settings;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Branded verification email (same look as the welcome email)
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            $settings = Settings::find(1);

            return (new MailMessage)
                ->subject("Verify your email for $settings->site_name")
                ->view('emails.verify-email', [
                    'user' => $notifiable,
                    'url' => $url,
                    'settings' => $settings,
                ]);
        });
    }
}
