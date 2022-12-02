<?php

use App\Enums\PermissionOperationEnum;
use App\Enums\PermissionEnum;
use App\Http\Controllers\Api\V1\Admin\ThirdPartyServiceController;
use App\Services\Authorization\PermissionService;
use Illuminate\Support\Facades\Route;

Route::prefix('/third-party-service')
    ->middleware(PermissionService::middlewarePermission(PermissionOperationEnum::ADMIN, PermissionEnum::THIRD_PARTY_SERVICE))
    ->group(function () {
        Route::get('/types', [ThirdPartyServiceController::class, 'types']);
        Route::get('/services/{key}', [ThirdPartyServiceController::class, 'services']);
    });

Route::middleware(PermissionService::middlewarePermission(PermissionOperationEnum::ADMIN, PermissionEnum::THIRD_PARTY_SERVICE))
    ->apiResource('/third-party-service', ThirdPartyServiceController::class)->except('destroy');

