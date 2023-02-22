@extends('index')
@section('halaman','Jenis Barang')
@section('master','active')
@section('jenis','active')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jenis-Jenis Barang</h1><br>
                    <a href="{{ url('/barang/create') }}" class="btn bg-gradient-primary btn-xs">
                        <i class="bi bi-plus-lg"></i> Create New Barang</a>
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
                                <th>Jenis Barang</th>
                                <th width="25%" class="text-center">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $b)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$b->jenis_barang }}</td>
                                <td class="text-center">
                                       <a href="{{ url('/barang/edit/'.$b->id) }}" class="btn bg-gradient-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit</a>
                                       <a href="{{ url('/barang/delete/'.$b->id) }}" class="btn bg-gradient-danger btn-sm" onclick="return confirm('Apakah anda yakin?')">
                                        <i class="bi bi-trash"></i> Delete</a>
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