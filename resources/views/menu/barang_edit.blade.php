@extends('index')
@section('halaman', 'menu edit')
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          Edit Barang
          <a href="{{ url('/barang') }}" class="float-right btn btn-sm btn-primary">Kembali</a>
        </div>
        <div class="card-body">
          <form method="post" action="{{ url('/barang/update/'.$barang->id) }}">
            @csrf {{ method_field('PUT') }}
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" name="barang" class="form-control" value="{{ $barang->NamaBarang }}">
                {{-- @if($errors->has('barang'))
                  <span class="text-danger">
                    <strong>{{ $errors->first('barang') }}</strong>
                  </span>
                @endif --}}
            </div>
            <input type="submit" class="btn btn-primary" value="Simpan">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection