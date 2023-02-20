<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BarangController;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {return view('auth.login');});
Auth::routes(['register' => false]);

Route::get('/home',                 [HomeController::class, 'index'])->name('index');

Route::get('/barang',               [BarangController::class, 'index']);
Route::get('/barang/create',        [BarangController::class, 'create']);
Route::post('/barang/store',        [BarangController::class, 'store']);
Route::get('/barang/edit/{id}',     [BarangController::class, 'edit']);
Route::put('/barang/update/{id}',   [BarangController::class, 'update']);
Route::get('/barang/delete/{id}',   [BarangController::class, 'delete']);

Route::get('/data',                 [BarangController::class, 'index_data']);
Route::get('/data/create',          [BarangController::class, 'data_create']);
Route::post('/data/store',          [BarangController::class, 'data_store']);

Route::get('/transaksi',            [TransaksiController::class, 'index']);
Route::get('/transaksi/tambah',     [TransaksiController::class, 'transaksi_tambah']);
Route::post('/transaksi/aksi',      [TransaksiController::class, 'transaksi_aksi']);
Route::get('/laporan',              [TransaksiController::class, 'cetak_laporan']);