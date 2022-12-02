<?php

namespace App\Events\Hotel;

use App\Events\AbstractBaseEvent;

class HoteDeletedEvent extends AbstractBaseEvent
{
    public function __construct(public int $id)
    {
    }
}
