@extends('index')
@section('halaman','Input Transaksi')
@section('transaksi','active')
@section('content')
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid"><br>
          <div class="card">
            <div class="card-header" style="background-color: #0b507b"">
              <h5 style="color: white">Input Transaksi</h5>
          </div>
          <div class="card-body">
              <form method="post" action="/transaksi/store">
              @csrf
              <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control">
                  @error('tanggal')
                      <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                  @enderror 
                  <br>

                  <label>Nama Barang</label>
                  <select class="form-control" name="barang_id">
                    <option value="">- Pilih Barang</option>
                    @foreach($data_barang as $k)
                        <option value="{{ $k->id }}">{{ $k->nama_barang }}</option>
                    @endforeach
                  </select>
                  @error('barang_id')
                      <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                  @enderror
                  <br>

                  <label>Jenis Transaksi</label>
                  <select class="form-control" name="jenis">
                      <option value="">- Pilih Jenis</option>
                      <option value="barang_masuk">Barang Masuk</option>
                      <option value="barang_keluar">Barang Keluar</option>
                  </select>
                  @error('jenis')
                      <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                  @enderror
                  <br>

                  <label>Jumlah</label>
                  <input type="integer" name="jumlah" class="form-control">
                  @error('jumlah')
                      <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                  @enderror
                  <br>

                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan"></textarea>
                  @error('keterangan')
                      <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                  @enderror
              </div>
              <a href="/transaksi" class="btn bg-gradient-danger btn-sm"><i class="fa fa-undo"> Cancel</i></a>
              <button type="submit" class="btn bg-gradient-primary btn-sm"><i class="fa fa-save"> Save</i></button>
              </form>
          </div>
          </div>
      </div>
    </section>
  </div>
</div>
@endsection