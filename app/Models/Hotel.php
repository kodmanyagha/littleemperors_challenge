<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 */
class Hotel extends Model
{
    protected $fillable = [
        'city_id',
        'name',
        'image',
        'address',
        'description',
        'stars',
        'latitude',
        'longitude',
    ];
}
