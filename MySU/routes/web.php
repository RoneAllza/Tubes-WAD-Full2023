<?php

use App\Http\Controllers\KegiatanTahfizhController;
use App\Models\KegiatanTahfizh;
use App\Http\Controllers\PiketController;
use App\Models\Piket;
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

// Rute Manajemen Perizinan Pulang ADRIN

Route::get('/perizinanpulang', [PerizinanPulangController::class, 'index'])->name('PerizinanPulang.indexPulang');
Route::get('/perizinanpulang/create', [PerizinanPulangController::class, 'create'])->name('PerizinanPulang.createPulang');
Route::get('/perizinanpulang/edit', [PerizinanPulangController::class, 'edit'])->name('PerizinanPulang.editPulang');


//Rute untuk Manajemen Pembinaan
Route::get('/kegiatanpembinaan/index', [AktivitasPembinaanController::class, 'index'])->name('kegiatanpembinaan.index');
Route::get('/kegiatanpembinaan/create', [AktivitasPembinaanController::class, 'create'])->name('kegiatanpembinaan.create');
Route::post('/kegiatanpembinaan/store', [AktivitasPembinaanController::class, 'store'])->name('kegiatanpembinaan.store');
Route::get('/kegiatanpembinaan/edit', [AktivitasPembinaanController::class, 'edit'])->name('kegiatanpembinaan.edit');
Route::put('/kegiatanpembinaan/{id}', [AktivitasPembinaanController::class, 'update'])->name('kegiatanpembinaan.update');
Route::delete('/kegiatanpembinaan/{id}', [AktivitasPembinaanController::class, 'destroy'])->name('kegiatanpembinaan.destroy');

//Rute untuk Kegiatan Tahfizh
Route::get('/kegiatan_tahfizhs', [KegiatanTahfizhController::class, 'index'])->name('kegiatan_tahfizhs.index');
Route::get('/kegiatan_tahfizhs/create', [KegiatanTahfizhController::class, 'create'])->name('kegiatan_tahfizhs.create');
Route::post('/kegiatan_tahfizhs', [KegiatanTahfizhController::class, 'store'])->name('kegiatan_tahfizhs.store');
Route::get('/kegiatan_tahfizhs/{id}/edit', [KegiatanTahfizhController::class, 'edit'])->name('kegiatan_tahfizhs.edit');
Route::put('/kegiatan_tahfizhs/{id}', [KegiatanTahfizhController::class, 'update'])->name('kegiatan_tahfizhs.update');
Route::delete('/kegiatan_tahfizhs/{id}', [KegiatanTahfizhController::class, 'destroy'])->name('kegiatan_tahfizhs.destroy');


//Rute untuk Piket
Route::get('/piket', [PiketController::class, 'index'])->name('piket.index');
Route::get('/piket/create', [PiketController::class, 'create'])->name('piket.create');
Route::post('/piket', [PiketController::class, 'store'])->name('piket.store');
Route::get('/piket/{id}/edit', [PiketController::class, 'edit'])->name('piket.edit');
Route::put('/piket/{id}', [PiketController::class, 'update'])->name('piket.update');
Route::delete('/piket/{id}', [PiketController::class, 'destroy'])->name('piket.destroy');
