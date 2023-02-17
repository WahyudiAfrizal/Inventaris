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
Route::get('/barang/tambah',        [BarangController::class, 'index_tambah']);
Route::post('/barang/aksi',         [BarangController::class, 'index_aksi']);
Route::get('/barang/edit/{id}',     [BarangController::class, 'index_edit']);
Route::put('/barang/update/{id}',   [BarangController::class, 'index_update']);

Route::get('/transaksi',            [TransaksiController::class, 'index']);
