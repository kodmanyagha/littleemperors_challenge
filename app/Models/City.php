<?php

namespace App\Models;

/**
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 */
class City extends AbstractCachableModel
{
    protected $fillable = [
        'name',
    ];

}
