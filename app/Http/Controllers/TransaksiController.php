<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
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
        $data_barang = DataBarang::all();
        return view('menu.transaksi_tambah', ['data_barang' => $data_barang]);
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

        return redirect('/transaksi')->with('status','Data berhasil ditambahkan');
    }

    public function transaksi_hapus($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return redirect('transaksi')->with('Sukses', 'Transaksi berhasil dihapus');
    }

    public function laporan(){
        $transaksi = Transaksi::all();
        return view('menu.laporan', ['transaksi' => $transaksi]);
    }
    public function cetak(){
        $transaksi = Transaksi::all();
        return view('menu.cetak', ['transaksi' => $transaksi]);
    }
}
