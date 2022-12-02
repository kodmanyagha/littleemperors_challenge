<?php

namespace App\Events\City;

use App\Events\AbstractBaseEvent;

class CityUpdatedEvent extends AbstractBaseEvent
{
    public function __construct(public int $id)
    {
    }
}
