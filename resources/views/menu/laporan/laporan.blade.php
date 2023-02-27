@extends('index')
@section('halaman','Laporan')
@section('laporan','active')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-8">
                  <h3 style="color: rgb(95, 93, 93)">laporan Transaksi</h3>
                </div>
              </div>
            </div>
          </div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th >Tanggal</th>
                            <th >Jenis Barang</th>
                            <th >Jenis Transaksi</th>
                            <th >Jumlah</th>
                            <th >Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $t)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$t->tanggal}}</td>
                            <td>{{$t->nama_barang}}</td>
                            <td>{{$t->jenis}}</td>
                            <td>{{$t->jumlah}}</td>
                            <td>{{$t->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table><br>
                <a href="/cetak" target="_blank" class="float-right btn bg-gradient-primary btn-sx">
                  <i class="fas fa-print"></i> Print</a>
            </div>
        </div>
    </section>
</div>  
@endsection