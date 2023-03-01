<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


class DataBarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $data_barang = DataBarang::all();
        return view('menu.data_barang.data_barang', ['data_barang' => $data_barang]);
    }

    public function create(){
        $barang = Barang::all();
        return view('menu.data_barang.create', ['barang' => $barang]);
    }

    public function store(Request $data){
        $data->validate([
            'nama_barang' => 'required|unique:data_barang,nama_barang',
            'foto' => 'required|image|mimes:jpg,png',
            'jenis_id' => 'required',
            'stok' => 'required|integer'
        ]);

        $foto = $data->foto;
        $slug = Str::slug($foto->getClientOriginalName());
        $new_foto = time() .'_'. $slug;
        $foto->move('uploads/barang',$new_foto);

         $barang = new DataBarang;
         $barang->nama_barang = $data->nama_barang;
         $barang->foto  = 'uploads/barang/'.$new_foto;
         $barang->jenis_id = $data->jenis_id;
         $barang->stok = $data->stok;
         $barang->save();
        
        return redirect('/data')->with('status', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $barang = Barang::all();
        $data_barang = DataBarang::find($id);
        $data = DataBarang::all();
        return view('menu.data_barang.edit', [
            'barang' => $barang,
            'data_barang' => $data_barang,
            'foto' => $data
        ]);
    }
 
    public function update(Request $data, $id){
        $data->validate([
            'nama_barang' => 'required',
            'jenis_id' => 'required',
            'foto' => 'image|mimes:jpg,png'
        ]);
        $data_barang = DataBarang::find($id);

        if($data->hasFile('foto')){
            File::delete($data_barang->foto);
            
            $foto = $data->foto;
            $d_nama = $data->nama_barang;
            $d_jenis = $data->jenis_id;

            $slug = Str::slug($foto->getClientOriginalName());
            $new_foto = time() .'_'. $slug;
            $foto->move('uploads/barang',$new_foto);
            $data_barang->foto  = 'uploads/barang/'.$new_foto;
            
            $data_barang->nama_barang = $d_nama;
            $data_barang->jenis_id = $d_jenis;
        }else{

            $d_nama = $data->nama_barang;
            $d_jenis = $data->jenis_id;

            $data_barang->nama_barang = $d_nama;
            $data_barang->jenis_id = $d_jenis;
        }
        $data_barang->save();

        return redirect('/data')->with('status', 'Data berhasil diubah');
    }
    public function delete($id){
        $data_barang = DataBarang::find($id);
        File::delete($data_barang->foto);
        $data_barang->delete();

        return redirect('/data')->with('status', 'Data berhasil dihapus');
    }
}
