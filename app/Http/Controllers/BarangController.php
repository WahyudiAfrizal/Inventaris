<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
            'jenis_barang' => 'required|unique:barang,jenis_barang,'
        ]);
        
        $barang = $data->jenis_barang;
       

        Barang::insert([
            'jenis_barang' => $barang
        ]);
        return redirect('/barang')->with('status', 'Data berhasil ditambahkan');
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

        return redirect('/barang')->with('status', 'Data berhasil diubah');
    }
    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        
        return redirect('/barang')->with('status', 'Data berhasil dihapus');
        
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
            'nama_barang' => 'required|unique:data_barang,nama_barang',
            'jenis_barang' => 'required',
            'stok' => 'required|integer'
        ]);

        DataBarang::insert([
            'nama_barang' =>$data->nama_barang,
            'jenis_barang' =>$data->jenis_barang,
            'stok' =>$data->stok
        ]);
        return redirect('/data')->with('status', 'Data berhasil ditambahkan');
    }

    public function data_edit($id){
        $barang = Barang::all();
        $data_barang = DataBarang::find($id);
        return view('menu.d_barang_edit', [
            'barang' => $barang,
            'data_barang' => $data_barang
        ]);
    }
 
    public function data_update($id, Request $data){
        $data->validate([
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
        ]);
        $d_nama = $data->nama_barang;
        $d_jenis = $data->jenis_barang;

        $data_barang = DataBarang::find($id);
        $data_barang->nama_barang = $d_nama;
        $data_barang->jenis_barang = $d_jenis;
        $data_barang->save();

        return redirect('/data')->with('status', 'Data berhasil diubah');
    }
    public function data_delete($id){
        $data_barang = DataBarang::find($id);
        $data_barang->delete();

        return redirect('/data')->with('status', 'Data berhasil dihapus');
    }
}
