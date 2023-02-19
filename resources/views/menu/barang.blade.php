@extends('index')
@section('halaman','Jenis Barang')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Jenis-Jenis Barang</h1><br>
                    <a href="{{ url('/barang/create') }}" class="btn btn-success">Create New Barang</a>
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
                                       <a href="{{ url('/barang/edit/'.$b->id) }}" class="btn btn-sm btn-success">Edit</a>
                                       <a href="{{ url('/barang/delete/'.$b->id) }}" class="btn btn-sm btn-primary" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
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