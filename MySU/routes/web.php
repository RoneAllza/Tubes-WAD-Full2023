<?php

use App\Http\Controllers\KegiatanTahfizhController;
use App\Models\KegiatanTahfizh;
use App\Models\UserManagement;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
});

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

Route::get('/kegiatan_tahfizhs', [KegiatanTahfizhController::class, 'index'])->name('kegiatan_tahfizhs.index');
// Rute untuk menampilkan formulir tambah kegiatan tahfizh dan menyimpan data baru
Route::get('/kegiatan_tahfizhs/create', [KegiatanTahfizhController::class, 'create'])->name('kegiatan_tahfizhs.create');
Route::post('/kegiatan_tahfizhs', [KegiatanTahfizhController::class, 'store'])->name('kegiatan_tahfizhs.store');

// Rute untuk menampilkan formulir edit kegiatan tahfizh dan memperbarui data
Route::get('/kegiatan_tahfizhs/{id}/edit', [KegiatanTahfizhController::class, 'edit'])->name('kegiatan_tahfizhs.edit');
Route::put('/kegiatan_tahfizhs/{id}', [KegiatanTahfizhController::class, 'update'])->name('kegiatan_tahfizhs.update');

// Rute untuk menghapus data kegiatan tahfizh
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

// Rute untuk menampilkan formulir edit kegiatan tahfizh dan memperbarui data
Route::get('/user_management/{id}/edit', [UserManagementController::class, 'edit'])->name('user_management.edit');
Route::put('/user_management/{id}', [UserManagementController::class, 'update'])->name('user_management.update');

// Rute untuk menghapus data kegiatan tahfizh
Route::delete('/user_management/{id}', [UserManagementController::class, 'destroy'])->name('user_management.destroy');
