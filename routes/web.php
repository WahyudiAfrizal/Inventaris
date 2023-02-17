<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {return view('auth.login');});
Auth::routes(['register' => false]);

Route::get('/home',     [HomeController::class, 'index'])->name('index');
Route::get('/barang',   [UserController::class, 'index']);
Route::get('/barang/tambah',   [UserController::class, 'index_tambah']);
Route::post('/barang/aksi',   [UserController::class, 'index_aksi']);
Route::get('/transaksi', [TransaksiController::class, 'index']);
