<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $barang = Barang::all();
        return view('menu.barang', ['barang' => $barang]);
    }

    public function index_tambah(){
        return view('menu.barang_tambah');
    }

    public function index_aksi(Request $data){
        $data->validate([
            'NamaBarang' => 'required'
        ]);
        $barang = $data->NamaBarang;

        Barang::insert([
            'NamaBarang' => $barang
        ]);
        return redirect('barang')->with("sukses", "Kategori berhasil tersimpan");
    }

    public function index_edit($id){
        $barang=Barang::find($id);
        return view('menu.barang_edit', ['barang' => $barang]);
    }

    public function index_update($id, Request $data){
        $data->validate([
            'NamaBrang' => 'required'
        ]);
        $nama_barang = $data->NamaBarang;

        // update kategori
        $barang=Barang::find($id);
        $barang->NamaBarang = $nama_barang;
        $barang->save();

        // alihkan halaman ke halaman kategori
        return redirect('barang');
    }
}
