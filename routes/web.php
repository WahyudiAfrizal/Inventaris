<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {return view('auth.login');});
Auth::routes(['register' => false]);

Route::get('/home',     [HomeController::class, 'index'])->name('index');
Route::get('/barang',   [UserController::class, 'index']);

Route::get('/transaksimasuk', function () {return view('menu.transaksi.masuk');});
Route::get('/transaksikeluar', function () {return view('menu.transaksi.keluar');});
