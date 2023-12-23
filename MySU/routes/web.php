<?php

use App\Http\Controllers\KegiatanTahfizhController;
use App\Models\KegiatanTahfizh;
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

