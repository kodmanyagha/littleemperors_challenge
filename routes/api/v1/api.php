<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\CityController;
use App\Http\Controllers\Api\V1\CountryController;
use App\Http\Controllers\Api\V1\ForgotPasswordController;
use App\Http\Controllers\Api\V1\LanguageController;
use App\Http\Controllers\Api\V1\NewsletterController;
use App\Http\Controllers\Api\V1\RealtimeController;
use App\Http\Controllers\Api\V1\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return [
        'version' => '1.0',
        'country' => $request->header('HTTP_CF_IPCOUNTRY'),
        'ip'      => $request->ip(),
    ];
});

Route::prefix('/auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']);

    Route::post('/forgot-password-email', [ForgotPasswordController::class, 'sendPasswordLink'])
        ->middleware('guest')
        ->name('password.email');

    Route::post('/forgot-password', [ForgotPasswordController::class, 'passwordUpdate'])
        ->middleware('guest')
        ->name('password.update');

    Route::any('/reset-password/{token}')->middleware('guest')->name('password.reset');

    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/resend-otp/{type}', [AuthController::class, 'resend']);
    Route::post('/verify-registration-otp', [AuthController::class, 'verifyRegistrationOtp']);
    Route::post('/verifyOtp', [AuthController::class, 'verifyOtp']);

    Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmail'])
        ->middleware(['auth', 'signed'])
        ->name('verification.verify');
});

Route::middleware(['auth', 'kyc_required'])->group(function () {
    Route::get('me', [UserController::class, 'me']);

    Route::post('/users/{user}/kyc-verification', [UserController::class, 'kycVerification']);
    Route::apiResource('users', UserController::class);

    Route::get('/realtime/create-token', [RealtimeController::class, 'createToken']);
});

Route::apiResource('languages', LanguageController::class)->only('index', 'show');
Route::get('countries/{country}/cities', [CityController::class, 'index']);
Route::apiResource('countries', CountryController::class)->only('index', 'show');

Route::post('newsletter', [NewsletterController::class, 'register']);

Route::prefix('/admin')
    ->name('admin.')
    ->middleware('auth')
    ->middleware('role:admin')
    ->middleware('admin_ip_verify')
    ->group(base_path('routes/api/v1/admin.php'));
