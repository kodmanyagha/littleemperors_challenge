<?php

namespace App\Observers;

use App\Models\User;

class CityObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param User $user
     *
     * @return void
     */
    public function created(User $user): void
    {
    }

    /**
     * Handle the User "updated" event.
     *
     * @param User $user
     *
     * @return void
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     *
     * @param User $user
     *
     * @return void
     */
    public function deleted(User $user): void
    {
        // TODO Must you delete related hotels? Think about that.
    }

    /**
     * Handle the User "restored" event.
     *
     * @param User $user
     *
     * @return void
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     *
     * @param User $user
     *
     * @return void
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
