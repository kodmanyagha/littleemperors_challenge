<?php

namespace App\Events\City;

use App\Events\AbstractBaseEvent;

class CityCreatedEvent extends AbstractBaseEvent
{
    public function __construct(public int $id)
    {
    }
}
