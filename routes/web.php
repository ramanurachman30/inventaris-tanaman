<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TamanController;
use App\Http\Controllers\PendopoController;
use App\Http\Controllers\VariatifController;
use App\Http\Controllers\ProduktifController;

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
    return view('landingpage');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});
Route::resource('/pendopo', PendopoController::class);
Route::get('pendopo/hapus/{id}', [PendopoController::class,'destroy']);

Route::resource('/produktif', ProduktifController::class);
Route::get('produktif/hapus/{id}', [ProduktifController::class,'destroy']);

Route::resource('/taman', TamanController::class);
Route::get('taman/hapus/{id}', [TamanController::class,'destroy']);

Route::resource('/variatif', VariatifController::class);
Route::get('variatif/hapus/{id}', [VariatifController::class,'destroy']);
