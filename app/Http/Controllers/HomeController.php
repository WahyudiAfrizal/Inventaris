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
        $user = User::count();
        $transaksi = Transaksi::count();

        return view('dashboard', compact('barang', 'data_barang', 'user','transaksi'));
    }
}
