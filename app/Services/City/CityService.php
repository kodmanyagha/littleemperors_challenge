<?php

namespace App\Services\City;

use App\Events\City\CityCreatedEvent;
use App\Events\City\CityDeletedEvent;
use App\Events\City\CityUpdatedEvent;
use App\Models\City;
use App\Services\CrudServiceTrait;
use Exception;
use Illuminate\Database\Eloquent\Model;

class CityService
{
    use CrudServiceTrait;

    protected $model = City::class;
    protected $createdEventClass = CityCreatedEvent::class;
    protected $updatedEventClass = CityUpdatedEvent::class;
    protected $deletedEventClass = CityDeletedEvent::class;

    /**
     * @throws Exception
     */
    public function createIfNotExist(array|City $data): Model|City
    {
        $data = makeArray($data);

        $name = $data['name'];

        if (City::query()->where('name', $name)->exists()) {
            throw new Exception('City exist.');
        }

        return $this->create($data);
    }
}
