<?php

namespace App\Events\Hotel;

use App\Events\AbstractBaseEvent;

class HotelCreatedEvent extends AbstractBaseEvent
{
    public function __construct(public int $id)
    {
    }
}
