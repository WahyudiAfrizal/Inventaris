@extends('home')
@section('halaman','Menu Barang')
@section('content')
 <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tabel Barang</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div >
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Jenis-jenis Barang</h3>
                        </div>
                        
                        {{-- Tabel --}}
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stok Awal</th>
                                        <th>Harga Barang</th>
                                        <th>Pemasukan</th>
                                        <th>Pengeluaran</th>
                                        <th>Stok Akhir</th>
                                        <th style="width: 40px">OPSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($barang as $k)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$k->KodeBarang}}</td>
                                        <td>{{$k->NamaBarang}}</td>
                                        <td>{{$k->StokAwal}}</td>
                                        <td>{{$k->HargaBarang}}</td>
                                        <td>{{$k->Pemasukan}}</td>
                                        <td>{{$k->Pengeluaran}}</td>
                                        <td>{{$k->StokAkhir}}</td>
                                        <td class="text-center">
                                            <a href="{{ url('#'.$k->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <a href="{{ url('#'.$k->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="#" class="float-right btn btn-sm btn-primary">Kembali</a>
                            <a href="#" class="float-right btn btn-sm btn-success">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
@endsection