<?php

namespace App\Http\Controllers;


use App\Models\Barang;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $barang = Barang::all();
        return view('menu.barang.barang', ['barang' => $barang]);
    }

    public function create(){
        return view('menu.barang.create');
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
        return view('menu.barang.edit', ['barang' => $barang ]);
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
}
