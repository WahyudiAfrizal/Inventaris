<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $transaksi = Transaksi::all();
        return view('menu.transaksi', ['transaksi' => $transaksi]);
    }
}
