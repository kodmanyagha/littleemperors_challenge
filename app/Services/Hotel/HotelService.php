<?php

namespace App\Services\Hotel;

use App\Events\Hotel\HoteDeletedEvent;
use App\Events\Hotel\HotelCreatedEvent;
use App\Events\Hotel\HotelUpdatedEvent;
use App\Models\City;
use App\Models\Hotel;
use App\Repositories\HotelRepository;
use App\Services\City\CityService;
use App\Services\CrudServiceTrait;
use App\Services\Hotel\Enums\DelimiterEnum;
use App\Services\Hotel\Enums\InsertModeEnum;
use Exception;
use Generator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Throwable;

class HotelService
{
    use CrudServiceTrait;

    protected $model = Hotel::class;
    protected $createdEventClass = HotelCreatedEvent::class;
    protected $updatedEventClass = HotelUpdatedEvent::class;
    protected $deletedEventClass = HoteDeletedEvent::class;

    private HotelRepository $hotelRepository;

    public function __construct(?HotelRepository $hotelRepository = null)
    {
        if (is_null($hotelRepository)) {
            $this->hotelRepository = new HotelRepository();
        } else {
            $this->hotelRepository = $hotelRepository;
        }
    }

    /**
     * @throws Exception
     * @throws Throwable
     */
    public function readCsvLazy(string $path, DelimiterEnum $delimiter): Generator
    {
        $currentRow = 0;
        if (($handle = fopen($path, "r")) !== false) {
            while (($data = fgetcsv($handle, 0, $delimiter->value)) !== false) {
                if ($currentRow > 0) {
                    yield [
                        'name'        => $data[0],
                        'image'       => $data[1],
                        'city'        => $data[2],
                        'address'     => $data[3],
                        'description' => $data[4],
                        'stars'       => $data[5],
                        'latitude'    => $data[6],
                        'longitude'   => $data[7],
                    ];
                }

                $currentRow++;
            }

            fclose($handle);
        }
    }

    /**
     * @throws Exception
     */
    public function importCsvBulkMode(string $path, DelimiterEnum $delimiter, bool $override): int
    {
        $csvGenerator = $this->readCsvLazy($path, $delimiter);

        $buffer = [];
        foreach ($csvGenerator as $row) {
            /** @var City $city */
            $city = City::query()->firstOrCreate(
                ['name' => trim($row['city'])],
                ['name' => trim($row['city'])]
            );

            $buffer[] = [
                'city_id'     => $city->id,
                'name'        => $row['name'],
                'image'       => $row['image'],
                'address'     => $row['address'],
                'description' => $row['description'],
                'stars'       => $row['stars'],
                'latitude'    => $row['latitude'],
                'longitude'   => $row['longitude'],
            ];

            if (count($buffer) >= 100) {
                $this->hotelRepository->insert($buffer);
                $buffer = [];
            }
        }

        if (count($buffer) > 0) {
            $this->hotelRepository->insert($buffer);
        }

        return (int)DB::getPdo()->lastInsertId();
    }

    /**
     * @throws Throwable
     */
    public function importCsvLoadMode(string $path, DelimiterEnum $delimiter, bool $override): int
    {
        $csvGenerator = $this->readCsvLazy($path, $delimiter);

        return -1;
    }

    /**
     * @throws Throwable
     */
    public function importCsvFile(string $path, DelimiterEnum $delimiter, InsertModeEnum $mode, bool $override): int
    {
        if ($mode == InsertModeEnum::BULK) {
            return $this->importCsvBulkMode($path, $delimiter, $override);
        } elseif ($mode === InsertModeEnum::LOAD) {
            return $this->importCsvLoadMode($path, $delimiter, $override);
        }

        return -1;
    }

    public function create(array|City $data): Model|City
    {
        $data = makeArray($data);

        /** @var CityService $cityService */
        $cityService = app(CityService::class);

        $city = $cityService->createIfNotExist([
            'name' => $data['city'],
        ]);

        unset($data['city']);
        $data['city_id'] = $city->id;

        $model = (new $this->model())->create($data);

        if (property_exists($this, 'createdEventClass')) {
            event(new $this->createdEventClass($model->id));
        }

        return $model;
    }
}
