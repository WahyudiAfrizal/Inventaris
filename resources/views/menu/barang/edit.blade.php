@extends('index')
@section('halaman','Edit Barang')
@section('master','active')
@section('jenis','active')
@section('content')
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid"><br>
          <div class="card">
            <div class="card-header" style="background-color: #0b507b">
              <h5 style="color:white">Edit Barang</h5>
            </div>
            <div class="card-body">
              <form method="post" action="{{ url('/barang/update/'.$barang->id) }}">
                @csrf {{ method_field('PUT') }}
                <div class="form-group">
                    <label>Jenis Barang</label>
                    <input type="text" name="jenis_barang" class="form-control" value="{{ $barang->jenis_barang }}">
                </div>
                <a href="{{ url('/barang') }}" class="btn bg-gradient-danger btn-sm"><i class="bi bi-arrow-clockwise"></i>
                   Cancle</a>
                <input type="submit" class="btn bg-gradient-primary btn-sm" value="Save">
              </form>
            </div>
          </div>
      </div>
    </section>
  </div>
</div>
@endsection