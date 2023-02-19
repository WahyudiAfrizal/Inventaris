@extends('index')
@section('halaman','transaksi')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaksi Barang</h1><br>
                    <a href="#" class="btn btn-success">Catat Pinjaman</a>
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
                                <th style="width: 10px">No</th>
                                <th >Tanggal</th>
                                <th >Jenis Barang</th>
                                <th >Stok</th>
                                <th >jenis</th>
                                <th >Keterangan</th>
                                <th width="13%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $t)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$t->tanggal}}</td>
                                <td>{{$t->jenis_barang}}</td>
                                <td>{{$t->stok}}</td>
                                <td>{{$t->barang_masuk}}</td>
                                <td>{{$t->keterangan}}</td>
                                <td class="text-center">
                                    <a href="{{ url('#'.$t->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('#'.$t->id) }}" class="btn btn-sm btn-danger">Hapus</a>
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