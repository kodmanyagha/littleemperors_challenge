<?php

namespace App\Repositories;

abstract class AbstractBaseRepository implements AbstractBaseRepositoryInterface
{
    abstract public function insert(array $data): bool;
}
