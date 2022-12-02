<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

abstract class AbstractBaseEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Sub classes can override this.
     *
     * @return string
     */
    protected function getPrivateChannelName(): string
    {
        return "channel-name";
    }

    public function broadcastOn(): Channel|PrivateChannel|array
    {
        return new PrivateChannel($this->getPrivateChannelName());
    }
}
