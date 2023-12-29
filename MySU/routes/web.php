<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AktivitasMingguanController;

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

Route::get('/aktifitasmingguan', [AktivitasMingguanController::class, 'index'])->name('aktifitasmingguan.index');

// Rute untuk menampilkan formulir tambah kegiatan tahfizh dan menyimpan data baru
Route::get('/aktifitasmingguan/create', [AktivitasMingguanController::class, 'create'])->name('aktifitasmingguan.create');
Route::post('/aktifitasmingguan', [AktivitasMingguanController::class, 'store'])->name('aktifitasmingguan.store');

// Rute untuk menampilkan formulir edit kegiatan tahfizh dan memperbarui data
Route::get('/aktifitasmingguan/{id}/edit', [AktivitasMingguanController::class, 'edit'])->name('aktifitasmingguan.edit');
Route::put('/aktifitasmingguan/{id}', [AktivitasMingguanController::class, 'update'])->name('aktifitasmingguan.update');

// Rute untuk menghapus data kegiatan tahfizh
Route::delete('/aktifitasmingguan/{id}', [AktivitasMingguanController::class, 'destroy'])->name('aktifitasmingguan.destroy');


