<?php

namespace Tests\Unit\Services\Hotel;

use App\Models\Hotel;
use App\Repositories\HotelRepository;
use App\Services\Hotel\Enums\DelimiterEnum;
use App\Services\Hotel\Enums\InsertModeEnum;
use App\Services\Hotel\HotelService;
use Exception;
use Tests\Base\DbInitializedTestCase;

class HotelServiceTest extends DbInitializedTestCase
{
    /**
     * @throws Exception
     */
    public function test_import_call_repository_method()
    {
        $mockHotelRepository = $this->mock(HotelRepository::class);
        $mockHotelRepository->expects('insert')->andReturn(true);

        $this->instance(HotelRepository::class, $mockHotelRepository);

        /** @var HotelService $service */
        $service = $this->app->get(HotelService::class);

        $service->importCsvFile(
            base_path('tests/data/hotels.csv'),
            DelimiterEnum::SEMICOLON,
            InsertModeEnum::BULK,
            false
        );
    }

    /**
     * @throws Exception
     */
    public function test_import_correct()
    {
        /** @var HotelService $service */
        $service = $this->app->get(HotelService::class);

        $service->importCsvFile(
            base_path('tests/data/hotels.csv'),
            DelimiterEnum::SEMICOLON,
            InsertModeEnum::BULK,
            false
        );

        /** @var Hotel $lastHotel */
        $lastHotel = Hotel::query()->orderByDesc('id')->first();
        $this->assertEquals('Ananda', $lastHotel->name);
    }

    public function test_throw_file_not_found_exception()
    {
        /** @var HotelService $service */
        $service = $this->app->get(HotelService::class);

        try {
            $service->importCsvFile('unknonw_file.csv', DelimiterEnum::SEMICOLON, InsertModeEnum::BULK, false);
            $this->fail('It must throw exception.');
        } catch (\Throwable $throwable) {
            $this->assertEquals('fopen(unknonw_file.csv): Failed to open stream: No such file or directory', $throwable->getMessage());
        }
    }
}
