<?php

use App\Http\Controllers\KegiatanTahfizhController;
use App\Models\KegiatanTahfizh;
use App\Http\Controllers\PiketController;
use App\Models\Piket;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/kegiatan_tahfizhs', [KegiatanTahfizhController::class, 'index'])->name('kegiatan_tahfizhs.index');

// Rute untuk menampilkan formulir tambah kegiatan tahfizh dan menyimpan data baru
Route::get('/kegiatan_tahfizhs/create', [KegiatanTahfizhController::class, 'create'])->name('kegiatan_tahfizhs.create');
Route::post('/kegiatan_tahfizhs', [KegiatanTahfizhController::class, 'store'])->name('kegiatan_tahfizhs.store');

// Rute untuk menampilkan formulir edit kegiatan tahfizh dan memperbarui data
Route::get('/kegiatan_tahfizhs/{id}/edit', [KegiatanTahfizhController::class, 'edit'])->name('kegiatan_tahfizhs.edit');
Route::put('/kegiatan_tahfizhs/{id}', [KegiatanTahfizhController::class, 'update'])->name('kegiatan_tahfizhs.update');

// Rute untuk menghapus data kegiatan tahfizh
Route::delete('/kegiatan_tahfizhs/{id}', [KegiatanTahfizhController::class, 'destroy'])->name('kegiatan_tahfizhs.destroy');


// Rute Nampilin Homepage
Route::get('/home', [HomeController::class, 'index'])->name('welcome');


Route::get('/piket', [PiketController::class, 'index'])->name('piket.index');
Route::get('/piket/create', [PiketController::class, 'create'])->name('piket.create');
Route::post('/piket', [PiketController::class, 'store'])->name('piket.store');
Route::get('/piket/{id}/edit', [PiketController::class, 'edit'])->name('piket.edit');
Route::put('/piket/{id}', [PiketController::class, 'update'])->name('piket.update');
Route::delete('/piket/{id}', [PiketController::class, 'destroy'])->name('piket.destroy');


