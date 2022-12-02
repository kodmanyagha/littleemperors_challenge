<?php

namespace App\Events\Hotel;

use App\Events\AbstractBaseEvent;

class HotelUpdatedEvent extends AbstractBaseEvent
{
    public function __construct(public int $id)
    {
    }
}
