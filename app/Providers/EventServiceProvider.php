<?php

namespace App\Providers;

use App\Events\City\CityCreatedEvent;
use App\Events\Hotel\HotelCreatedEvent;
use App\Events\UserRegistered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        UserRegistered::class => [
        ],

        CityCreatedEvent::class => [
        ],

        HotelCreatedEvent::class => [
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }

}
