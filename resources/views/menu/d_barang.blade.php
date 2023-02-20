@extends('index')
@section('halaman','Jenis Barang')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Barang</h1><br>
                    <a href="{{ url('/data/create') }}" class="btn btn-success">Create data Barang</a>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card">        
                {{-- Tabel --}}
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama Barang</th>
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
                                <td>{{$d->jenis_barang}}</td>
                                <td>{{$d->stok}}</td>
                                <td class="text-center">
                                       <a href="{{ url('/data/edit/'.$d->id) }}" class="btn btn-sm btn-success">Edit</a>
                                       <a href="{{ url('/data/delete/'.$d->id) }}" class="btn btn-sm btn-primary" onclick="return confirm('Apakah anda yakin untuk menghapus?')">Hapus</a>
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