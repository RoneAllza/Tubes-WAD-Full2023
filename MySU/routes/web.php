<?php

use App\Http\Controllers\KegiatanTahfizhController;
use App\Models\KegiatanTahfizh;
use App\Models\UserManagement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\PiketController;
use App\Models\Piket;
use App\Http\Controllers\AktivitasPembinaanController;
use App\Http\Controllers\PerizinanPulangController;
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

//Rute Untuk Login Regis Logout
Route::view('/home', 'home')->name('home')->middleware('auth');
Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('auth');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');
Route::post('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout')->middleware('auth');

// Rute Manajemen Perizinan Pulang 
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

Route::group(['middleware' => 'role:admin'], function () {
    // Routes or controllers accessible only by admin
    // ...
});

Route::group(['middleware' => 'role:user'], function () {
    // Routes or controllers accessible only by user
    // ...
});

Route::get('/user_management', [UserManagementController::class, 'index'])->name('user_management.index');

// Rute untuk menampilkan formulir tambah kegiatan tahfizh dan menyimpan data baru
Route::get('/user_management/create', [UserManagementController::class, 'create'])->name('user_management.create');
Route::post('/user_management', [UserManagementController::class, 'store'])->name('user_management.store');
Route::get('/user_management/{id}/edit', [UserManagementController::class, 'edit'])->name('user_management.edit');
Route::put('/user_management/{id}', [UserManagementController::class, 'update'])->name('user_management.update');
Route::delete('/user_management/{id}', [UserManagementController::class, 'destroy'])->name('user_management.destroy');

//Rute untuk Piket
Route::get('/piket', [PiketController::class, 'index'])->name('piket.index');
Route::get('/piket/create', [PiketController::class, 'create'])->name('piket.create');
Route::post('/piket', [PiketController::class, 'store'])->name('piket.store');
Route::get('/piket/{id}/edit', [PiketController::class, 'edit'])->name('piket.edit');
Route::put('/piket/{id}', [PiketController::class, 'update'])->name('piket.update');
Route::delete('/piket/{id}', [PiketController::class, 'destroy'])->name('piket.destroy');

