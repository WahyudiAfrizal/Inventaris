@extends('index')
@section('halaman','Edit Data Barang')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid"><br>
                <div class="card">
                    <div class="card-header" style="background-color: #095642">
                        <h5 style="color: white">Edit Data Barang</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/data/update/'.$data_barang->id) }}">
                            @csrf {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" value="{{ $data_barang->nama_barang }}">
                            <label>Jenis Barang</label>
                            <select class="form-control" name="jenis_barang">
                                <option value="">- Pilih Jenis Barang</option>
                                @foreach($barang as $k)
                                    <option value="{{ $k->jenis_barang }}">{{ $k->jenis_barang }}</option>
                                @endforeach
                            </select>                           
                        </div>
                        <a href="{{ url('/data') }}" class="btn btn-sm btn-success">Kembali</a>
                        <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection