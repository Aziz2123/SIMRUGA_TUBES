<?php

use App\Http\Controllers\BendaharaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::prefix('bendahara')->group(function () {
    Route::get('/', [BendaharaController::class, 'index']);
    Route::post('/list', [BendaharaController::class, 'list']);
    Route::get('/create', [BendaharaController::class, 'create']);
    Route::post('/', [BendaharaController::class, 'store']);
    Route::get('/{id}', [BendaharaController::class, 'show']);
    Route::get('/{id}/edit', [BendaharaController::class, 'edit']);
    Route::put('/{id}', [BendaharaController::class, 'update']);
    Route::delete('/{id}', [BendaharaController::class, 'destroy']);
});
