<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $transaksi = Transaksi::all();
        $transaksi = Transaksi::where('user_id', Auth::user()->id)->get();
        return view('menu.transaksi.transaksi', ['transaksi' => $transaksi]);
    }

    public function create()
    {
        $data_barang = DataBarang::all();
        return view('menu.transaksi.create', ['data_barang' => $data_barang]);
    }

    public function store(Request $data)
    {
        //dd($data->all());
        $data->validate([
            'tanggal' => 'required',
            'barang_id'=> 'required',
            'jenis' => 'required',
            'jumlah' => 'required|integer',
            'keterangan' => 'required'
        ]);
        // dd($data->jenis);

        if ($data->jenis == 'barang_masuk'){
            
            Transaksi::create([
                'tanggal'=>$data->tanggal,
                'barang_id'=>$data->barang_id,
                'jenis'=>$data->jenis,
                'jumlah'=>$data->jumlah,
                'keterangan'=>$data->keterangan,
                'user_id' => auth()->id()
            ]); 
                $data_barang = DataBarang::find($data->barang_id);
                $data_barang->stok   += $data->jumlah;
                $data_barang->save();
        }else{
                $data_barang = DataBarang::find($data->barang_id);

                if($data_barang->stok   < $data->jumlah){

                    return redirect('/transaksi')->with('notacces','Transaksi tidak bisa diproses. Jumlah barang melebihi stok');
                
                }else{
                    Transaksi::create([
                        'tanggal'=>$data->tanggal,
                        'barang_id'=>$data->barang_id,
                        'jenis'=>$data->jenis,
                        'jumlah'=>$data->jumlah,
                        'keterangan'=>$data->keterangan,
                        'user_id' => auth()->id()
                    ]); 
                        $data_barang->stok   -= $data->jumlah;
                        $data_barang->save();
                }
        }
        return redirect('/transaksi')->with('status','Data berhasil ditambahkan');
    }

    public function delete($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return redirect('transaksi')->with('status', 'Transaksi berhasil dihapus');
    }
}
