<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\DataBarang;

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

    public function create(){
        return view('menu.barang_create');
    }

    public function store(Request $data){
        $data->validate([
            'jenis_barang' => 'required'
        ]);
        $barang = $data->jenis_barang;

        Barang::insert([
            'jenis_barang' => $barang
        ]);
        return redirect('barang')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $barang=Barang::find($id);
        return view('menu.barang_edit', ['barang' => $barang ]);
    }

    public function update($id, Request $data){
        $data->validate([
            'jenis_barang' => 'required'
        ]);
        $nama_barang = $data->jenis_barang;

        $barang=Barang::find($id);
        $barang->jenis_barang = $nama_barang;
        $barang->save();

        return redirect('barang')->with('success', 'Data berhasil diubah');
    }
    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        
        return redirect('barang')->with('success', 'Data berhasil dihapus');
        
    }

    // controller data barang

    public function index_data(){
        $data_barang = DataBarang::all();
        return view('menu.d_barang', ['data_barang' => $data_barang]);
    }

    public function data_create(){
        $barang = Barang::all();
        return view('menu.d_barang_create', ['barang' => $barang]);
    }

    public function data_store(Request $data){
        $data->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'stok' => 'required|integer'
        ]);

        DataBarang::insert([
            'nama_barang' =>$data->nama_barang,
            'jenis_barang' =>$data->jenis_barang,
            'stok' =>$data->stok
        ]);
        return redirect('data')->with('success', 'Data berhasil ditambahkan');
    }
}
