<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function laporan(){
        $transaksi = Transaksi::all();
        $transaksi = Transaksi::where('user_id', Auth::user()->id)->get();
        return view('menu.laporan.laporan', ['transaksi' => $transaksi]);
    }
    public function cetak(){
        $transaksi = Transaksi::all();
        $transaksi = Transaksi::where('user_id', Auth::user()->id)->get();
        return view('menu.laporan.cetak', ['transaksi' => $transaksi]);
    }
    public function post( Request $data)
    {
        $transaksi = Transaksi::where('user_id', Auth::user()->id)->get();
        $transaksi = Transaksi::whereBetween('tanggal',[$data->awal, $data->akhir])->get();

        return view('menu.laporan.cetak',['transaksi' => $transaksi]);
    }
}
