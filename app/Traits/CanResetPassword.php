<?php

namespace App\Traits;


use App\Services\Notification\Mail\Concretes\MailSenderService;
use Illuminate\Support\Facades\Blade;

trait CanResetPassword
{
    /**
     * Get the e-mail address where password reset links are sent.
     *
     * @return string
     */
    public function getEmailForPasswordReset(): string
    {
        return $this->email;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token): void
    {
        $content = view('auth.emails.password-reset', ['token' => $token]);

        MailSenderService::push($this, $this->getEmailForPasswordReset(), 'Password Reset', $content);
    }

    /**
     * Get the reset URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    protected function resetUrl($token): string
    {
        $baseUrl = config('app.frontend_url');
        return $baseUrl.route('password.reset', [
            'token' => $token,
            'email' => $this->getEmailForPasswordReset(),
        ], false);
    }
}
