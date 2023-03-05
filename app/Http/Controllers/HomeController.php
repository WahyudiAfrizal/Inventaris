<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Barang;
use App\Models\Transaksi;
use App\Models\DataBarang;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function index(Request $data)
    {
        $user = $data->user();

        if($user -> role == "superadmin"){
            $barang = Barang::count();
            $data_barang = DataBarang::count();
            $transaksi = Transaksi::count();
            $jan = Transaksi::whereMonth('tanggal', '01')->count();
            $feb = Transaksi::whereMonth('tanggal', '02')->count();
            $mar = Transaksi::whereMonth('tanggal', '03')->count();
            $apr = Transaksi::whereMonth('tanggal', '04')->count();
            $mei = Transaksi::whereMonth('tanggal', '05')->count();
            $jun = Transaksi::whereMonth('tanggal', '06')->count();
            $jul = Transaksi::whereMonth('tanggal', '07')->count();
            $ags = Transaksi::whereMonth('tanggal', '08')->count();
            $sep = Transaksi::whereMonth('tanggal', '09')->count();
            $okt = Transaksi::whereMonth('tanggal', '10')->count();
            $nov = Transaksi::whereMonth('tanggal', '11')->count();
            $des = Transaksi::whereMonth('tanggal', '12')->count();      
        }else{
            $barang = Barang::count();
            $data_barang = DataBarang::count();
            $transaksi = Transaksi::where('user_id', Auth::user()->id)->count();
            $jan = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '01')->count();
            $feb = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '02')->count();
            $mar = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '03')->count();
            $apr = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '04')->count();
            $mei = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '05')->count();
            $jun = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '06')->count();
            $jul = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '07')->count();
            $ags = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '08')->count();
            $sep = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '09')->count();
            $okt = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '10')->count();
            $nov = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '11')->count();
            $des = Transaksi::where('user_id', Auth::user()->id)->whereMonth('tanggal', '12')->count();

    }
    return view('dashboard', compact(
        'barang',
        'data_barang',
        'transaksi',

        'jan',
        'feb',
        'mar',
        'apr',
        'mei',
        'jun',
        'jul',
        'ags',
        'sep',
        'okt',
        'nov',
        'des'
    ));      
    }
}
