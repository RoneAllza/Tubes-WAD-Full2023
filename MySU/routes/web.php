<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AktivitasPembinaanController;
use App\Models\AktivitasPembinaan;

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
    return view('welcome');
});

Route::get('/kegiatanpembinaan/index', [AktivitasPembinaanController::class, 'index'])->name('kegiatanpembinaan.index');
Route::get('/kegiatanpembinaan/create', [AktivitasPembinaanController::class, 'create'])->name('kegiatanpembinaan.create');
Route::post('/kegiatanpembinaan/store', [AktivitasPembinaanController::class, 'store'])->name('kegiatanpembinaan.store');
Route::get('/kegiatanpembinaan/edit', [AktivitasPembinaanController::class, 'edit'])->name('kegiatanpembinaan.edit');
Route::put('/kegiatanpembinaan/{id}', [AktivitasPembinaanController::class, 'update'])->name('kegiatanpembinaan.update');
Route::delete('/kegiatanpembinaan/{id}', [AktivitasPembinaanController::class, 'destroy'])->name('kegiatanpembinaan.destroy');