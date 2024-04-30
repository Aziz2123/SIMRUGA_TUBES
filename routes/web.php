<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BendaharaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArsipansuratController;

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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan manager maka akan diarahkan ke UserController 

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('bendahara', BendaharaController::class);
    });
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


Route::resource('arsipansurat', ArsipansuratController::class)
    ->parameters(['arsipansurat' => 'arsipanSurat'])
    ->except(['show'])
    ->names([
    'index' => 'arsipansurat.index',
    'create' => 'arsipansurat.create',
    'store' => 'arsipansurat.store',
    'edit' => 'arsipansurat.edit',
    'update' => 'arsipansurat.update',
    'destroy' => 'arsipansurat.destroy'
    ]);
