<?php

namespace App\Repositories;

use App\Models\Hotel;

class HotelRepository extends AbstractBaseRepository
{
    public function insert(array $data): bool
    {
        return Hotel::query()->insert($data);
    }
}
