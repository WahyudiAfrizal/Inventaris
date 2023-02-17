@extends('index')
@section('halaman','menu barang')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Jenis-jenis Barang
                    <a href="{{ url('/barang/tambah') }}" class="float-right btn btn-sm btn-primary">Tambah</a>
                </div>
                <div class="card-body">
                    @if(Session::has('sukses'))
                        <div class="alert alert-success">{{ Session::get('sukses') }}</div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                               <th width="1%">No</th>
                               <th>Nama Barang</th>
                               <th width="25%" class="text-center">OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach($barang as $k)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $k->NamaBarang }}</td>
                                    <td class="text-center">
                                       <a href="{{ url('/barang/edit/'.$k->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                       <a href="{{ url('/barang/hapus/'.$k->id) }}" class="btn btn-sm btn-danger"
                                    onclick="return confirm('ANDA YAKIN INGIN MENGHAPUSNYA!')">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection