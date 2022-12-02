<?php

namespace App\Traits;

use App\Services\Notification\Mail\Concretes\MailSenderService;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

trait EmailVerifiable
{
    /**
     * Determine if the user has verified their email address.
     *
     * @return bool
     */
    public function hasVerifiedEmail()
    {
        return !is_null($this->email_verified_at);
    }

    /**
     * Mark the given user's email as verified.
     *
     * @return bool
     */
    public function markEmailAsVerified()
    {
        return $this->forceFill([
            'email_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification(): void
    {
        // TODO Get mail HTML content from view.
        $content = 'verification url: ' . $this->verificationUrl();

        MailSenderService::push(
            $this,
            $this->getEmailForVerification(),
            __('general.notification.subject.email.verification'),
            $content
        );
    }

    /**
     * Get the email address that should be used for verification.
     *
     * @return string
     */
    public function getEmailForVerification()
    {
        return $this->email;
    }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param mixed $notifiable
     *
     * @return string
     */
    protected function verificationUrl(): string
    {
        $frontendUrl = config('app.frontend_url');
        return $frontendUrl
            . route(
                'verification.verify',
                [
                    'id'   => $this->getKey(),
                    'hash' => sha1($this->getEmailForVerification()),
                ],
                false
            );
    }
}
