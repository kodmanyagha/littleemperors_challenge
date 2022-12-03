<?php

namespace App\Http\Resources\Api;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

/**
 * @property $id
 * @property $name
 * @property $city
 */
class HotelResource extends JsonResource
{
    /**
     *
     * @param Request $request
     *
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        $city = isset($this->city) ? $this->city->name : null;

        return [
            'id'   => @$this->id,
            'name' => @$this->name,
            'city' => $city,
        ];
    }
}
