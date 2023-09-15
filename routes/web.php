<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SuperAdminController::class, 'index'])->name('dashboard');
Route::get('/login', [SuperAdminController::class, 'login']);
Route::get('/super-admin/data-pengguna', [SuperAdminController::class, 'dataPengguna']);

Route::get('/super-admin/tambah-pengguna', [PenggunaController::class, 'tambahPengguna']);
Route::get('/super-admin/riwayat-pengguna', [PenggunaController::class, 'riwayatPengguna']);

Route::get('/super-admin/kategori', [BarangController::class, 'kategoriBarang']);
Route::get('/super-admin/data-barang', [BarangController::class, 'dataBarang']);

Route::get('/super-admin/data-paket', [PaketController::class, 'dataPaket']);
Route::get('/super-admin/detail-paket', [PaketController::class, 'detailPaket']);
Route::get('/super-admin/tambah-paket', [PaketController::class, 'tambahPaket']);
