@extends('index')
@section('halaman','transaksi')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaksi Barang</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Transaksi</h3>
                        <a href="#" class="float-right btn btn-sm btn-success">Tambah</a>
                </div>        
                {{-- Tabel --}}
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">No</th>
                                <th class="text-center" rowspan="2">Tanggal</th>
                                <th class="text-center" rowspan="2">Nama Barang</th>
                                <th class="text-center" rowspan="2">Stok</th>
                                <th class="text-center" colspan="2">jenis</th>
                                <th class="text-center" rowspan="2">Keterangan</th>
                                <th class="text-center" rowspan="2" width="13%">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $t)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$t->date('d-m-Y',strtotime($t->Tanggal)) }}</td>
                                <td>{{$t->NamaBarang}}</td>
                                <td>{{$t->Stok}}</td>
                                <td class="text-center">
                                    @if($t->Jenis == "Barang_Masuk")
                                        {{ "Rp.".number_format($t->nominal).",-" }}
                                    @else
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if($t->Jenis == "Barang_Keluar")
                                        {{ "Rp.".number_format($t->nominal).",-" }}
                                    @else
                                    @endif
                                </td>
                                <td>{{$t->Keterangan}}</td>
                                <td class="text-center">
                                    <a href="{{ url('#'.$k->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="{{ url('#'.$k->id) }}" class="btn btn-sm btn-danger">Hapus</a>
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