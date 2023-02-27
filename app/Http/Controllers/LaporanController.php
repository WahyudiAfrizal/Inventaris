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
        $data = DataBarang :: all();
        return view('menu.laporan.laporan', [
            'transaksi' => $transaksi,
            'data' => $data
        ]);
    }
    public function cetak(){
        $transaksi = Transaksi::all();
        $data = DataBarang :: all();
        return view('menu.laporan.cetak', [
            'transaksi' => $transaksi,
            'data' => $data
        ]);
    }
}
