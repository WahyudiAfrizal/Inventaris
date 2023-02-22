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

    public function index_data(){
        $data_barang = DataBarang::all();
        return view('menu.data_barang.data_barang', ['data_barang' => $data_barang]);
    }

    public function data_create(){
        $barang = Barang::all();
        return view('menu.data_barang.create', ['barang' => $barang]);
    }

    public function data_store(Request $data){
        $data->validate([
            'nama_barang' => 'required|unique:data_barang,nama_barang',
            'foto' => 'required|image|mimes:jpg,png',
            'jenis_barang' => 'required',
            'stok' => 'required|integer'
        ]);

        $foto = $data->foto;
        $slug = Str::slug($foto->getClientOriginalName());
        $new_foto = time() .'_'. $slug;
        $foto->move('uploads/barang',$new_foto);

         $barang = new DataBarang;
         $barang->nama_barang = $data->nama_barang;
         $barang->foto  = 'uploads/barang/'.$new_foto;
         $barang->jenis_barang = $data->jenis_barang;
         $barang->stok = $data->stok;
         $barang->save();
        
        return redirect('/data')->with('status', 'Data berhasil ditambahkan');
    }

    public function data_edit($id){
        $barang = Barang::all();
        $data_barang = DataBarang::find($id);
        return view('menu.data_barang.edit', [
            'barang' => $barang,
            'data_barang' => $data_barang
        ]);
    }
 
    public function data_update($id, Request $data){
        $data->validate([
            'nama_barang' => 'required',
            'foto' => 'required|image|mimes:jpg,png',
            'jenis_barang' => 'required',
        ]);
        $foto = $data->foto;
        $slug = Str::slug($foto->getClientOriginalName());
        $new_foto = time() .'_'. $slug;
        $foto->move('edit/barang',$new_foto);

        $d_nama = $data->nama_barang;
        $d_jenis = $data->jenis_barang;

        $data_barang = DataBarang::find($id);
        $data_barang->nama_barang = $d_nama;
        $data_barang->foto  = 'edit/barang/'.$new_foto;
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
