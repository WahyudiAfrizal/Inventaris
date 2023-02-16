@extends('home')
@section('halaman','Barang')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Transaksi</h1>
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
                        <h3 class="card-title">Barang Masuk</h3>
                    </div>

                    {{-- Tabel --}}
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jenis Barang</th>
                                    <th>Jumlah Barang</th>
                                    <th>Satuan</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>
@endsection