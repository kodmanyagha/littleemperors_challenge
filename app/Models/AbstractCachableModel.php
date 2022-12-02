<?php

namespace App\Models;

use GeneaLabs\LaravelModelCaching\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractCachableModel extends Model
{
    use Cachable;
}
