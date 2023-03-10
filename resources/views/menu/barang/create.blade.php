@extends('index')
@section('halaman','Input Barang')
@section('master','active')
@section('jenis','active')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid"><br>
                <div class="card">
                    <div class="card-header" style="background-color: #0b507b">
                        <h5 style="color:white">Input Jenis Barang</h5> 
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/barang/store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="jenis_barang" value="{{ old('jenis_barang') }}" class="form-control">
                                @error('jenis_barang')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                            </div>
                            <a href="/barang" class="btn bg-danger btn-sm"><i class="fa fa-undo"> Kembali</i></a>
                            <button type="submit" class="btn bg-primary btn-sm"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection