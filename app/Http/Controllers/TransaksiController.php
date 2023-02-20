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

    public function cetak_laporan(){
        $transaksi = Transaksi::all();
        return view('menu.laporan', ['transaksi' => $transaksi]);
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
            'nama_barang'=> 'required',
            'stok' => 'required|integer',
            'jenis' => 'required',
            'keterangan' => 'required'
        ]);
        Transaksi::insert([
            'tanggal'=>$data->tanggal,
            'nama_barang'=>$data->nama_barang,
            'stok'=>$data->stok,
            'jenis'=>$data->jenis,
            'keterangan'=>$data->keterangan
        ]);

        return redirect('transaksi')->with('status','Data berhasil ditambahkan');
    }
}
