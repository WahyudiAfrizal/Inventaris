@extends('index')
@section('halaman','Input Data Barang')
@section('master','active')
@section('data','active')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid"><br>
                <div class="card">
                    <div class="card-header" style="background-color: #0b507b"">
                        <h5 style="color: white">Input Data Barang</h5> 
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/data/store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" name="nama_barang" value="{{ old('nama_barang') }}"class="form-control">
                                @error('nama_barang')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                                <br>
                                <label>Foto Barang</label>
                                <input type="file" name="foto" class="form-control" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                <div class="mt-3"><img src="" id="output" width="150"></div>
                                @error('foto')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                                <br>
                                <label>Jenis Barang</label>
                                <select class="form-control" name="jenis_id">
                                    <option value="">- Pilih barang</option>
                                    @foreach($barang as $k)
                                        <option value="{{ $k->id }}">{{ $k->jenis_barang }}</option>
                                    @endforeach
                                </select>
                                @error('jenis_id')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                                <br>
                                <label>Stok</label>
                                    <input type="integer" name="stok" value="{{ old('stok') }}" class="form-control">
                                    @error('stok')
                                        <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                    @enderror
                            </div>
                            <a href="/data" class="btn bg-danger btn-sm"><i class="fa fa-undo"> Kembali</i></a>
                            <button type="submit" class="btn bg-primary btn-sm"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection