@extends('index')
@section('halaman','Transaksi')
@section('transaksi','active')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaksi Barang</h1><br>
                    <a href="/transaksi/tambah" class="btn btn-success">Input Transaksi</a>
                    <a href="/cetak" target="_blank" class=" btn btn-primary">Cetak Laporan</a>
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
                                <th style="width: 10px">No</th>
                                <th >Tanggal</th>
                                <th >Nama Barang</th>
                                <th >Stok</th>
                                <th >Jenis</th>
                                <th >Keterangan</th>
                                <th width="13%" class="text-center">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $t)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$t->tanggal}}</td>
                                <td>{{$t->nama_barang}}</td>
                                <td>{{$t->stok}}</td>
                                <td>{{$t->jenis}}</td>
                                <td>{{$t->keterangan}}</td>
                                <td class="text-center">
                                    <a href="{{ url('#'.$t->id) }}" class="btn btn-sm btn-success">Edit</a>
                                    <a href="{{ url('#'.$t->id) }}" class="btn btn-sm btn-primary">Hapus</a>
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