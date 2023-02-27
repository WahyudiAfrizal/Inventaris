@extends('index')
@section('halaman','User')
@section('user','active')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data User</h1><br>
                    <a href="/user/create" class="btn bg-gradient-primary btn-xs"><i class="bi bi-plus-lg"></i>
                        Tambah User</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card">        
                {{-- Tabel --}}
                <div class="card-body">
                    {{-- pesan menggunakan alert --}}
                    @if(Session::has('status'))
                    <div class="alert alert-success">
                        {{ Session::get('status') }}
                    </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th width="25%" class="text-center">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role}}</td>
                                <td class="text-center">
                                    <a href="{{ url('/user/edit/'.$user->id) }}" class="btn bg-gradient-warning btn-sm">
                                    <i class="bi bi-pencil-square"></i> Edit</a>
                                    <a href="{{ url('/user/delete/'.$user->id) }}" class="btn bg-gradient-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">
                                    <i class="bi bi-trash"></i> Hapus</a>
                                </td>                              
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                           
                </div>
            </div>
        </div>
    </section>
</div>
@endsection