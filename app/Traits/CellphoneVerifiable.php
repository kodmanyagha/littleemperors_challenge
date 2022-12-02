<?php

namespace App\Traits;

trait CellphoneVerifiable
{
    /**
     * Determine if the user has verified their email address.
     *
     * @return bool
     */
    public function hasVerifiedCellphone()
    {
        return !is_null($this->cellphone_verified_at);
    }

    /**
     * Mark the given user's email as verified.
     *
     * @return bool
     */
    public function markCellphoneAsVerified()
    {
        return $this->forceFill([
            'cellphone_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendCellphoneVerificationNotification()
    {

    }


    /**
     * Get the email address that should be used for verification.
     *
     * @return string
     */
    public function getCellphoneForVerification()
    {
        return $this->email;
    }

}
