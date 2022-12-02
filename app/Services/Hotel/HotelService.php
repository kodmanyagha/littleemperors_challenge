<?php

namespace App\Services\Hotel;

use App\Models\City;
use App\Models\Hotel;
use App\Services\Hotel\Enums\DelimiterEnum;
use App\Services\Hotel\Enums\InsertModeEnum;
use Exception;
use Generator;
use Illuminate\Support\Facades\DB;

class HotelService
{
    /**
     * @throws Exception
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
        } else {
            throw new Exception('File not found or not readable.');
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
                [
                    'name' => trim($row['city']),
                ],
                [
                    'name' => trim($row['city']),
                ]
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
                Hotel::query()->insert($buffer);
                $buffer = [];
            }
        }

        if (count($buffer) > 0) {
            Hotel::query()->insert($buffer);
        }

        return (int)DB::getPdo()->lastInsertId();
    }

    /**
     * @throws Exception
     */
    public function importCsvLoadMode(string $path, DelimiterEnum $delimiter, bool $override): int
    {
        $csvGenerator = $this->readCsvLazy($path, $delimiter);

        return -1;
    }

    /**
     * @throws Exception
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
}
