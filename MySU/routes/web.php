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

Route::get('/kegiatantahfiz', [KegiatanTahfizhController::class, 'index'])->name('kegiatantahfiz.indextahfiz');
Route::get('/kegiatantahfiz/add', [KegiatanTahfizhController::class, 'create'])->name('kegiatantahfiz.createtahfiz');
Route::post('/kegiatantahfiz/store', [KegiatanTahfizhController::class, 'store'])->name('kegiatantahfiz.store');
Route::get('/kegiatantahfiz/edit', [KegiatanTahfizhController::class, 'edit'])->name('kegiatantahfiz.edittahfiz');
Route::get('/kegiatantahfiz/update', [KegiatanTahfizhController::class, 'update'])->name('kegiatantahfiz.update');
Route::get('/kegiatantahfiz/delete', [KegiatanTahfizhController::class, 'destroy'])->name('kegiatantahfiz.deletetahfiz');




