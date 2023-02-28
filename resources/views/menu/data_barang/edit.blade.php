@extends('index')
@section('halaman','Edit Data Barang')
@section('master','active')
@section('data','active')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid"><br>
                <div class="card">
                    <div class="card-header" style="background-color: #0b507b">
                        <h5 style="color: white">Edit Data Barang</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/data/update/'.$data_barang->id) }}"  enctype="multipart/form-data">
                            @csrf {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" name="nama_barang" class="form-control" value="{{ $data_barang->nama_barang }}">
                                @error('nama_barang')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                            <label>Foto Barang</label>
                            <input type="file" name="foto" class="form-control" accept="image/*" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])">
                                @error('foto')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                                    <div class="mt-3"><img src="" id="output" width="150"></div>
                            <label>Jenis Barang</label>        
                            <select class="form-control" name="jenis_id">
                                @foreach($barang as $b)
                                    <option value="{{ $b->id }}" {{ $b->jenis_barang == $data_barang->jenis_barang ? 'selected' : '' }}>{{ $b->jenis_barang }}</option>
                                @endforeach
                            </select> 
                            @error('jenis_id')
                                <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                            @enderror                  
                        </div>
                        <a href="/data" class="btn bg-gradient-danger btn-sm"><i class="fa fa-undo"> Kembali</i></a>
                        <button type="submit" class="btn bg-gradient-primary btn-sm"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection