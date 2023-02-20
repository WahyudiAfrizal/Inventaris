<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $transaksi = Transaksi::all();
        return view('menu.transaksi', ['transaksi' => $transaksi]);
    }

    public function transaksi_tambah()
    {
        $transaksi = Transaksi::all();
        return view('menu.transaksi_tambah', ['transaksi'=> $transaksi]);
    }

    public function transaksi_aksi(Request $data)
    {
        $data->validate([
            'tanggal' => 'required',
            'jenis_barang'=> 'required',
            'stok' => 'required | integer',
            'jenis' => 'required',
            'keterangan' => 'required'
        ]);

        $transaksi = $data->tanggal;
        $transaksi = $data->jenis_barang;
        $transaksi = $data->stok;
        $transaksi = $data->jenis;
        $transaksi = $data->keterangan;

        Transaksi::insert([
            'tanggal'=>$transaksi,
            'jenis_barang'=>$transaksi,
            'stok'=>$transaksi,
            'jenis'=>$transaksi,
            'keterangan'=>$transaksi
        ]);

        return redirect('transaksi');
    }
}
