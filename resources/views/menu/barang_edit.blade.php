@extends('index')
@section('halaman','Edit Barang')
@section('content')
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid"><br>
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              Edit Barang
            </div>
            <div class="card-body">
              <form method="post" action="{{ url('/barang/update/'.$barang->id) }}">
                @csrf {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <input type="text" name="jenis_barang" class="form-control" value="{{ $barang->jenis_barang }}">
                </div>
                <a href="{{ url('/barang') }}" class="btn btn-sm btn-success">Kembali</a>
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