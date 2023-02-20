@extends('index')
@section('halaman','Input')
@section('content')
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid"><br>
        <div class="col-md-8">
          <div class="card card-primary">
            <div class="card-header">
              Input transaksi
          </div>
          <div class="card-body">
              <form method="post" action="/transaksi/aksi">
              @csrf
              <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control"> 
                  <br>
                  <label>Nama Barang</label>
                  <input type="text" name="nama_barang" class="form-control">
                  <br>
                  <label>Stok</label>
                  <input type="number" name="stok" class="form-control">
                  <br>
                  <label>Jenis</label>
                  <select class="form-control" name="jenis">
                      <option value="">- Pilih Jenis</option>
                      <option value="Barang Masuk">Barang Masuk</option>
                      <option value="Barang Keluar">Barang Keluar</option>
                  </select>
                  <br>
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan"></textarea>
              </div>
              <a href="/transaksi" class="btn btn-success">Kembali</a>
              <input type="submit" class="btn btn-primary" value="Simpan">
              </form>
          </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection