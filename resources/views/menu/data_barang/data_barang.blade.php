@extends('index')
@section('halaman','Data Barang')
@section('master','active')
@section('data','active')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Barang</h1><br>
                    <a href="{{ url('/data/create') }}" class="btn  bg-gradient-primary btn-xs">
                        <i class="bi bi-plus-lg"></i> Create Data Barang</a>
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
                                <th>Nama Barang</th>
                                <th>Foto Barang</th>
                                <th>Jenis Barang</th>
                                <th>Stok</th>
                                <th width="25%" class="text-center">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_barang as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->nama_barang }}</td>
                                <td><img src="{{ asset($d->foto)}}" width="50"></td>
                                <td>{{$d->jenis_barang}}</td>
                                <td>{{$d->stok}}</td>
                                <td class="text-center">
                                       <a href="{{ url('/data/edit/'.$d->id) }}" class="btn bg-gradient-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit</a>
                                       <a href="{{ url('/data/delete/'.$d->id) }}" class="btn bg-gradient-danger btn-sm" onclick="return confirm('Apakah anda yakin untuk menghapus?')">
                                        <i class="bi bi-trash"></i> Delate</a>
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