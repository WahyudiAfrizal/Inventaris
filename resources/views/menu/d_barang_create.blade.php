@extends('index')
@section('halaman','Input Data Barang')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid"><br>
                <div class="card">
                    <div class="card-header" style="background-color: #0b507b"">
                        <h5 style="color: white">Create Data Barang</h5> 
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/data/store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_barang" class="form-control">
                                <br>
                                <label>Jenis Barang</label>
                                <select class="form-control" name="jenis_barang">
                                    <option value="">- Pilih barang</option>
                                    @foreach($barang as $k)
                                        <option value="{{ $k->jenis_barang }}">{{ $k->jenis_barang }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <label>Stok</label>
                                    <input type="integer" name="stok" class="form-control">
                            </div>
                            <a href="/data" class="btn bg-gradient-success btn-sm">Kembali</a>
                            <input type="submit" class="btn bg-gradient-primary btn-sm" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection