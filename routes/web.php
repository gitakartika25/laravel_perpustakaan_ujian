<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\DetailPeminjamanController;
use App\Http\Controllers\DetailPengembalianController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

// Route::resource('dashboard', HomeController::class);
Route::resource('kelas', KelasController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('buku', BukuController::class);
Route::resource('petugas', PetugasController::class);
Route::resource('peminjaman', PeminjamanController::class);
Route::resource('pengembalian', PengembalianController::class);
Route::resource('detailpeminjaman', DetailPeminjamanController::class);
Route::resource('detailpengembalian', DetailPengembalianController::class);
Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
