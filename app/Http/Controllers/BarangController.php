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

    public function create(){
        return view('menu.barang_tambah');
    }

    public function store(Request $data){
        $data->validate([
            'NamaBarang' => 'required'
        ]);
        $barang = $data->NamaBarang;

        Barang::insert([
            'NamaBarang' => $barang
        ]);
        return redirect('barang');
    }

    public function edit($id){
        $barang=Barang::find($id);
        return view('menu.barang_edit', ['barang' => $barang]);
    }

    public function update($id, Request $data){
        $data->validate([
            'NamaBarang' => 'required',
        ]);
        $barang = $data->NamaBarang;

        $barang=Barang::find($id);
        $barang->NamaBarang = $barang;
        $barang->save();

        return redirect('barang');
    }
    public function delete($id)
    {
        $barang = Barang::find($id);
        $barang->delete();
        
        return redirect('barang');
        
    }
}
