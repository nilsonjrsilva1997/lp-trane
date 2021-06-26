<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['middleware' => 'api'], function() {
    Route::prefix('technician')->group(function () {
        Route::post('/search/by_location', [\App\Http\Controllers\TechnicianController::class, 'searchByLocation']);
    });

    Route::prefix('technician')->group(function () {
        Route::get('/numbers', [\App\Http\Controllers\CertificateUserController::class, 'mapData']);
    });

    Route::prefix('installation')->group(function () {
        Route::post('create/', [\App\Http\Controllers\InstallationController::class, 'create']);
    });
});

