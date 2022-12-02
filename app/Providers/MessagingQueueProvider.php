<?php

namespace App\Providers;

use App\Services\Support\MessagingQueue\MQServiceCreator;
use App\Services\Support\MessagingQueue\MQServiceInterface;
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
        $this->app->bind(MQServiceInterface::class, function () {
            return MQServiceCreator::create();
        });
    }
}
