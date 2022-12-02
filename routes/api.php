<?php

use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\HotelController;
use Illuminate\Support\Facades\Route;

Route::apiResource('city', CityController::class);
Route::apiResource('hotel', HotelController::class);
