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
              <h5>Create Jenis Barang</h5> 
            </div>
            <div class="card-body">
              <form method="post" action="{{ url('/barang/aksi') }}">
                @csrf
                <div class="form-group">
                  <input type="text" name="NamaBarang" class="form-control">
                  @if($errors->has('barang'))
                  <span class="text-danger">
                  <strong>{{ $errors->first('barang') }}</strong>
                  </span>
                  @endif
                </div>
                <a href="/barang" class="btn btn-sm btn-success">Kembali</a>
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