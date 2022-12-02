<?php

namespace App\Rules;

use GuzzleHttp\Client;
use Illuminate\Contracts\Validation\Rule;

class BelongsToAuthenticatedUser implements Rule
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
        $userId = auth()->user()->id;

        logInfo('>> USER ID', $userId);
        logInfo('>> ATTR', $attribute);

        return false;
        //return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('error.validations.belongs_to_authenticated_user.data_not_belongs_to_you');
    }
}
