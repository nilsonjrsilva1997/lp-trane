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

    Route::prefix('pmoc')->group(function () {
        Route::get('show/{id}', [\App\Http\Controllers\PmocController::class, 'show']);
        Route::get('/', [\App\Http\Controllers\PmocController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\PmocController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\PmocController::class, 'update']);
        Route::delete('delete/', [\App\Http\Controllers\PmocController::class, 'destroy']);
    });

    Route::prefix('pmoc_answer')->group(function () {
        Route::get('show/{id}', [\App\Http\Controllers\PmocAnswerController::class, 'show']);
        Route::get('/', [\App\Http\Controllers\PmocAnswerController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\PmocAnswerController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\PmocAnswerController::class, 'update']);
        Route::delete('delete/', [\App\Http\Controllers\PmocAnswerController::class, 'destroy']);
    });

    Route::prefix('pmoc_history')->group(function () {
        Route::get('show/{id}', [\App\Http\Controllers\PmocHistoryController::class, 'show']);
        Route::get('/', [\App\Http\Controllers\PmocHistoryController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\PmocHistoryController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\PmocHistoryController::class, 'update']);
        Route::delete('delete/', [\App\Http\Controllers\PmocHistoryController::class, 'destroy']);
    });

    Route::prefix('refricode')->group(function () {
        Route::get('show/{id}', [\App\Http\Controllers\RefricodeImageController::class, 'show']);
        Route::get('/', [\App\Http\Controllers\RefricodeImageController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\RefricodeImageController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\RefricodeImageController::class, 'update']);
        Route::delete('delete/', [\App\Http\Controllers\RefricodeImageController::class, 'destroy']);
    });

    Route::prefix('service_order')->group(function () {
        Route::get('show/{id}', [\App\Http\Controllers\ServiceOrderController::class, 'show']);
        Route::get('/', [\App\Http\Controllers\ServiceOrderController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\ServiceOrderController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\ServiceOrderController::class, 'update']);
        Route::delete('delete/', [\App\Http\Controllers\ServiceOrderController::class, 'destroy']);
    }); 

    Route::prefix('maintenance_installation')->group(function () {
        Route::get('show/{id}', [\App\Http\Controllers\MaintenanceInstallationController::class, 'show']);
        Route::get('/', [\App\Http\Controllers\MaintenanceInstallationController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\MaintenanceInstallationController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\MaintenanceInstallationController::class, 'update']);
        Route::delete('delete/', [\App\Http\Controllers\MaintenanceInstallationController::class, 'destroy']);
    }); 

    Route::prefix('image')->group(function () {
        Route::get('show/{id}', [\App\Http\Controllers\ImageInstallationMaintenenceController::class, 'show']);
        Route::get('/', [\App\Http\Controllers\ImageInstallationMaintenenceController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\ImageInstallationMaintenenceController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\ImageInstallationMaintenenceController::class, 'update']);
        Route::delete('delete/', [\App\Http\Controllers\ImageInstallationMaintenenceController::class, 'destroy']);
    }); 

    Route::prefix('image_install')->group(function () {
        Route::get('show/{id}', [\App\Http\Controllers\PivotImageInstallationMaintenenceController::class, 'show']);
        Route::get('/', [\App\Http\Controllers\PivotImageInstallationMaintenenceController::class, 'index']);
        Route::post('create/', [\App\Http\Controllers\PivotImageInstallationMaintenenceController::class, 'create']);
        Route::put('update/{id}', [\App\Http\Controllers\PivotImageInstallationMaintenenceController::class, 'update']);
        Route::delete('delete/', [\App\Http\Controllers\PivotImageInstallationMaintenenceController::class, 'destroy']);
    }); 

    Route::prefix('reverse_geolocation')->group(function () {
        Route::post('/', [\App\Http\Controllers\MapBoxController::class, 'reverseLocation']);
    }); 

    Route::prefix('user')->group(function () {
        Route::get('show/{id}/', [\App\Http\Controllers\UserController::class, 'show']);
    });

    Route::prefix('client')->group(function () {
        Route::get('notify/', [\App\Http\Controllers\SendNotificationController::class, 'sendMail']);
    });

    // sendMail
});

