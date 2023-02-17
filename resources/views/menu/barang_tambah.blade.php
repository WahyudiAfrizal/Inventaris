@extends('index')
@section('halaman','tambah barang')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Tambah Barang
          <a href="{{ url('/barang') }}" class="float-right btn btn-sm btn-primary">Kembali</a>
        </div>
        <div class="card-body">
          <form method="post" action="{{ url('/barang/aksi') }}">
            @csrf
            <div class="form-group">
              <label>Nama Barang</label>
              <input type="text" name="NamaBarang" class="form-control">
              @if($errors->has('barang'))
              <span class="text-danger">
                <strong>{{ $errors->first('barang') }}</strong>
              </span>
              @endif
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection