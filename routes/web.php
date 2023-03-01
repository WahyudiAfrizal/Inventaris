<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Route::get('/', function () {return view('auth.login');});

Auth::routes(['register' => false]);

//route ini digunakan untuk mengatur hak akses berdasarkan authentikasinya
Route::middleware('auth')->group(function(){

    Route::get('/home',                 [HomeController::class, 'index'])->name('index');

    Route::get('/user',                 [UserController::class, 'index']);
    Route::get('/user/create',          [UserController::class, 'create']);
    Route::post('/user/store',          [UserController::class, 'store']);
    Route::get('/user/edit/{id}',       [UserController::class, 'edit']);
    Route::put('/user/update/{id}',     [UserController::class, 'update']);
    Route::get('/user/delete/{id}',     [UserController::class, 'delete']);

    Route::get('/barang',               [BarangController::class, 'index']);
    Route::get('/barang/create',        [BarangController::class, 'create']);
    Route::post('/barang/store',        [BarangController::class, 'store']);
    Route::get('/barang/edit/{id}',     [BarangController::class, 'edit']);
    Route::put('/barang/update/{id}',   [BarangController::class, 'update']);
    Route::get('/barang/delete/{id}',   [BarangController::class, 'delete']);

    Route::get('/data',                 [DataBarangController::class, 'index']);
    Route::get('/data/create',          [DataBarangController::class, 'create']);
    Route::post('/data/store',          [DataBarangController::class, 'store']);
    Route::get('/data/edit/{id}',       [DataBarangController::class, 'edit']);
    Route::put('/data/update/{id}',     [DataBarangController::class, 'update']);
    Route::get('/data/delete/{id}',     [DataBarangController::class, 'delete']);


    Route::get('/transaksi',            [TransaksiController::class, 'index']);
    Route::get('/transaksi/create',     [TransaksiController::class, 'create']);
    Route::post('/transaksi/store',     [TransaksiController::class, 'store']);
    Route::get('/transaksi/delete/{id}',[TransaksiController::class, 'delete']);
    Route::post('/post',                [TransaksiController::class, 'post']);
        
    Route::get('/laporan',              [LaporanController::class, 'laporan']);
    Route::get('/cetak',                [LaporanController::class, 'cetak']);
});
