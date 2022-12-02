<?php

namespace App\Rules;

use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;

class ReCaptcha implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     *
     * @return bool
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function passes($attribute, $value)
    {
        if (isLocal() || (config('app.env') === 'testing')) {
            return true;
        }

        $client   = new Client();
        $response = $client->post('https://www.google.com/recaptcha/api/siteverify', [
            'form_params' => [
                'secret'   => config('captcha.recaptcha_secret'),
                'response' => $value,
            ],
        ]);

        $body = json_decode((string)$response->getBody());
        return (boolean)$body->success;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('error.validations.recaptcha.please_confirm');
    }
}
