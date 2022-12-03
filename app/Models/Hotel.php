<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property City $city
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

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
