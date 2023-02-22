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
                  <br>
                  <label>Nama Barang</label>
                  <select class="form-control" name="nama_barang">
                    <option value="">- Pilih Barang</option>
                    @foreach($data_barang as $k)
                        <option value="{{ $k->nama_barang }}">{{ $k->nama_barang }}</option>
                    @endforeach
                  </select>
                  <br>
                  <label>Jumlah</label>
                  <input type="integer" name="stok" class="form-control">
                  <br>
                  <label>Jenis Transaksi</label>
                  <select class="form-control" name="jenis">
                      <option value="">- Pilih Jenis</option>
                      <option value="Barang Masuk">Barang Masuk</option>
                      <option value="Barang Keluar">Barang Keluar</option>
                  </select>
                  <br>
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan"></textarea>
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