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

Route::get('/transaksi',            [TransaksiController::class, 'index']);
