<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;
use App\Models\Transaksi;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function laporan(){
        $transaksi = Transaksi::all();
        return view('menu.laporan.laporan', ['transaksi' => $transaksi]);
    }
    public function cetak(){
        $transaksi = Transaksi::all();
        return view('menu.laporan.cetak', ['transaksi' => $transaksi]);
    }
    public function post( Request $data)
    {
        $transaksi = Transaksi::whereBetween('tanggal',[$data->awal, $data->akhir])->get();

        return view('menu.laporan.cetak',['transaksi' => $transaksi]);
    }
}
