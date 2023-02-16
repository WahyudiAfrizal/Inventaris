<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $barang = Barang::all();
        return view('menu.barang', ['barang' => $barang]);
    }
}
