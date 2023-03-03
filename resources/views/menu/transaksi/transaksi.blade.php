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
                    <a href="/transaksi/create" class="btn bg-primary btn-xs"><i class="bi bi-plus-lg"></i>
                        Input Transaksi</a>
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
                    @if(Session::has('notacces'))
                    <div class="alert alert-danger">
                        {{ Session::get('notacces') }}
                    </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th >Tanggal</th>
                                <th >Nama Barang</th>
                                <th >Jenis Transaksi</th>
                                <th >Jumlah</th>
                                <th >Keterangan</th>
                                <th width="13%" class="text-center">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $t)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ date('d-m-Y',strtotime($t->tanggal))}}</td>
                                <td>{{$t->databarang->nama_barang}}</td>
                                <td>{{$t->jenis}}</td>
                                <td>{{$t->jumlah}}</td>
                                <td>{{$t->keterangan}}</td>
                                <td class="text-center">
                                    <a href="{{ url('/transaksi/delete/'.$t->id) }}" class="btn  bg-danger btn-sm" onclick="return confirm('Anda Yakin ingin menghapus Transaksi ini ?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </a>
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