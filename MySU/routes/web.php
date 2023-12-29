<?php

use App\Http\Controllers\KegiatanTahfizhController;
use App\Models\KegiatanTahfizh;
use App\Models\UserManagement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AktivitasMingguanController;
use App\Http\Controllers\PiketController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AktivitasPembinaanController;
use App\Http\Controllers\UserManagementController;
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
})->middleware('guest');

//Rute Aktivitas Mingguan
Route::get('/aktifitasmingguan', [AktivitasMingguanController::class, 'index'])->name('aktifitasmingguan.index')->middleware('auth');
Route::get('/aktifitasmingguan/create', [AktivitasMingguanController::class, 'create'])->name('aktifitasmingguan.create')->middleware('auth');
Route::post('/aktifitasmingguan', [AktivitasMingguanController::class, 'store'])->name('aktifitasmingguan.store')->middleware('auth');
Route::get('/aktifitasmingguan/{id}/edit', [AktivitasMingguanController::class, 'edit'])->name('aktifitasmingguan.edit')->middleware('auth');
Route::put('/aktifitasmingguan/{id}', [AktivitasMingguanController::class, 'update'])->name('aktifitasmingguan.update')->middleware('auth');
Route::delete('/aktifitasmingguan/{id}', [AktivitasMingguanController::class, 'destroy'])->name('aktifitasmingguan.destroy')->middleware('auth');

//Rute Auth
Route::view('/home', 'home')->name('home')->middleware('auth');
Route::get('/register', [RegisterController::class, 'create'])->name('register')->middleware('auth');
Route::post('/register', [RegisterController::class, 'store'])->name('register')->middleware('auth');
Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login')->middleware('guest');
Route::get('/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout')->middleware('auth');

//Rute User Management
Route::get('/user_management', [UserManagementController::class, 'index'])->name('user_management.index')->middleware('auth');
Route::get('/user_management/create', [UserManagementController::class, 'create'])->name('user_management.create')->middleware('auth');
Route::post('/user_management', [UserManagementController::class, 'store'])->name('user_management.store')->middleware('auth');
Route::get('/user_management/{id}/edit', [UserManagementController::class, 'edit'])->name('user_management.edit')->middleware('auth');
Route::put('/user_management/{id}', [UserManagementController::class, 'update'])->name('user_management.update')->middleware('auth');
Route::delete('/user_management/{id}', [UserManagementController::class, 'destroy'])->name('user_management.destroy')->middleware('auth');

//Rute untuk Manajemen Pembinaan
Route::get('/kegiatanpembinaan', [AktivitasPembinaanController::class, 'index'])->name('kegiatanpembinaan.index')->middleware('auth');
Route::get('/kegiatanpembinaan/create', [AktivitasPembinaanController::class, 'create'])->name('kegiatanpembinaan.create')->middleware('auth');
Route::post('/kegiatanpembinaan/store', [AktivitasPembinaanController::class, 'store'])->name('kegiatanpembinaan.store')->middleware('auth');
Route::get('/kegiatanpembinaan/{id}/edit', [AktivitasPembinaanController::class, 'edit'])->name('kegiatanpembinaan.edit')->middleware('auth');
Route::put('/kegiatanpembinaan/{id}', [AktivitasPembinaanController::class, 'update'])->name('kegiatanpembinaan.update')->middleware('auth');
Route::delete('/kegiatanpembinaan/{id}', [AktivitasPembinaanController::class, 'destroy'])->name('kegiatanpembinaan.destroy')->middleware('auth');

//Rute untuk Kegiatan Tahfizh
Route::get('/kegiatan_tahfizhs', [KegiatanTahfizhController::class, 'index'])->name('kegiatan_tahfizhs.index')->middleware('auth');
Route::get('/kegiatan_tahfizhs/create', [KegiatanTahfizhController::class, 'create'])->name('kegiatan_tahfizhs.create')->middleware('auth');
Route::post('/kegiatan_tahfizhs', [KegiatanTahfizhController::class, 'store'])->name('kegiatan_tahfizhs.store')->middleware('auth');
Route::get('/kegiatan_tahfizhs/{id}/edit', [KegiatanTahfizhController::class, 'edit'])->name('kegiatan_tahfizhs.edit')->middleware('auth');
Route::put('/kegiatan_tahfizhs/{id}', [KegiatanTahfizhController::class, 'update'])->name('kegiatan_tahfizhs.update')->middleware('auth');
Route::delete('/kegiatan_tahfizhs/{id}', [KegiatanTahfizhController::class, 'destroy'])->name('kegiatan_tahfizhs.destroy')->middleware('auth');

//Rute untuk Piket
Route::get('/piket', [PiketController::class, 'index'])->name('piket.index')->middleware('auth');
Route::get('/piket/create', [PiketController::class, 'create'])->name('piket.create')->middleware('auth');
Route::post('/piket', [PiketController::class, 'store'])->name('piket.store')->middleware('auth');
Route::get('/piket/{id}/edit', [PiketController::class, 'edit'])->name('piket.edit')->middleware('auth');
Route::put('/piket/{id}', [PiketController::class, 'update'])->name('piket.update')->middleware('auth');
Route::delete('/piket/{id}', [PiketController::class, 'destroy'])->name('piket.destroy')->middleware('auth');