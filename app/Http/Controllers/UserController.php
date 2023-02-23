<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = User::all();
        return view('menu.user.user', compact('data'));
    }

    public function create()
    {
        $data = User::all();
        return view('menu.user.create', compact('data'));
    }

    public function store(Request $data)
    {
        //dd($data->all());
        $data->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'role' => 'required',
        ]);
        //hash -> tidak menampilkan kata sandi
        $password = User::get('password');
        $hashed = Hash::make($password);
        
        User::insert([
            'name'=>$data->name,
            'email'=>$data->email,
            'password'=>$hashed,
            'role'=>$data->role,
        ]);
    
        return redirect('/user')->with('status','User berhasil ditambah');
    }
    public function edit($id)
    {
        $data = User::find($id);
    
        return view('menu.user.edit',compact('data'));
    }
    public function update($id, Request $data)
    {
        // dd($data->all());
        $data->validate([
            'name' => 'required',
            'email' => 'required|email',
            // 'password' => 'required',
            'role' => 'required'
        ]);
        
        $a = $data->name;
        $b = $data->email;
        // $c = $data->password;
        $d = $data->role;

        $user=User::find($id);
        $user->name = $a;
        $user->email = $b;
        // $user->password = $c;
        $user->role = $d;
        $user->save();

        return redirect('/user')->with('status', 'User berhasil diubah');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        
        return redirect('/user')->with('status', 'Data berhasil dihapus');
        
    }
}
