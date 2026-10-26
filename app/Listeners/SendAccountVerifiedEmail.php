<?php

namespace App\Listeners;

use App\Mail\AccountVerifiedEmail;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendAccountVerifiedEmail
{
    public function handle(Verified $event)
    {
        if (!$event->user instanceof User) {
            return;
        }

        try {
            Mail::to($event->user->email)->send(new AccountVerifiedEmail($event->user));
        } catch (\Exception $e) {
            Log::error('Failed to send account verified email to user: ' . $event->user->email . '. Error: ' . $e->getMessage());
        }
    }
}
