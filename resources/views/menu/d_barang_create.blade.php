@extends('index')
@section('halaman','tambah barang')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid"><br>
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h5>Create data Barang</h5> 
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
                                <a href="/data" class="btn btn-sm btn-success">Kembali</a>
                                <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection