<?php

namespace App\Providers;

use App\Repositories\HotelRepository;
use Illuminate\Support\ServiceProvider;

class MessagingQueueProvider extends ServiceProvider
{
    /**
     *
     * @return void
     */
    public function boot(): void
    {
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(HotelRepository::class, function () {
            return new HotelRepository();
        });
    }
}
