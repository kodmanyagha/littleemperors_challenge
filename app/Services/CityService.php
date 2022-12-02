<?php

namespace App\Services;

use App\Events\CityCreatedEvent;
use App\Models\City;

class CityService
{
    /**
     * @throws \Exception
     */
    public function createIfNotExist(array|City $data): City
    {
        $data = makeArray($data);

        $name = $data['name'];

        if (City::query()->where('name', $name)->exists()) {
            throw new \Exception('City exist.');
        }

        /** @var City $save */
        $save = City::query()->create($data);

        event(new CityCreatedEvent($save->id));

        return $save;
    }
}
