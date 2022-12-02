<?php

namespace App\Repositories;

interface AbstractBaseRepositoryInterface
{
    public function insert(array $data): bool;
}
