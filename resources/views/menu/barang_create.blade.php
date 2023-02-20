@extends('index')
@section('halaman','tambah barang')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid"><br>
                <div class="card">
                    <div class="card-header" style="background-color:  #095642">
                        <h5 style="color:white">Create Jenis Barang</h5> 
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/barang/store') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="jenis_barang" class="form-control">
                                @if($errors->has('jenis_barang'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('jenis_barang') }}</strong>
                                </span>
                                @endif
                            </div>
                            <a href="/barang" class="btn btn-sm btn-success">Kembali</a>
                            <input type="submit" class="btn btn-sm btn-primary" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection