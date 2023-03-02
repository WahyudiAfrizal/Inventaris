<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\DataBarang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $barang = Barang::count();
        $data_barang = DataBarang::count();
        $transaksi = Transaksi::count();
        
        $br = DataBarang::all();
        $dt = [];
        foreach($br as $brg){
            $dt[] = $brg->nama_barang;
        }
        //dd(json_encode($c_brg));

        return view('dashboard', compact('barang', 'data_barang','transaksi','dt'));
    }
}
