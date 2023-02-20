@extends('index')
@section('halaman','Laporan')
@section('laporan','active')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
      <section class="content">
        <body>
            <div class="form-group"><br><br>
                <P align="center"><b>Laporan Data Inventaris</b></P>
                <table class="static" align="center" rules="all" border="1px" style="width:20cm">
                    {{-- tabel header --}}
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th >Tanggal</th>
                            <th >Jenis Barang</th>
                            <th >Stok</th>
                            <th >jenis</th>
                            <th >Keterangan</th>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </body>
        <a href="/cetak" target="_blank" class="float-right btn btn-danger">print</a>
    </section>
    </div>
</div>   
@endsection