<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::prefix('credenciamentos')->group(function () {
    Route::get('/', function () {
        return view('accreditation');
    });
});

Route::prefix('atividades')->group(function () {
    Route::get('/instalacao', function () {
        return view('services.installation');
    });

    Route::get('/manutencao', function () {
        return view('services.maintenance');
    });
});

Route::get('/adm', function () {
    return view('testes.adm');
});



Route::prefix('technician')->group(function () {
    Route::post('/search', [\App\Http\Controllers\TechnicianController::class, 'searchTechnician']);
});

Route::prefix('images')->group(function () {
    Route::get('/{image}', [\App\Http\Controllers\ImageController::class, 'show']);
});

