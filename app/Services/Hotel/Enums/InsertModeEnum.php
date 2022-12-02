<?php

namespace App\Services\Hotel\Enums;

enum InsertModeEnum: string
{
    case BULK = 'bulk';
    case LOAD = 'load';
}
