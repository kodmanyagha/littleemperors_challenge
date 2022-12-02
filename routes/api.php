<?php

use App\Http\Controllers\Api\HotelController;
use Illuminate\Support\Facades\Route;

Route::apiResource('hotel', HotelController::class);
