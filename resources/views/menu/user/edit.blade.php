@extends('index')
@section('halaman','Edit User')
@section('user','active')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid"><br>
                <div class="card">
                    <div class="card-header" style="background-color: #0b507b">
                        <h5 style="color:white">Edit User</h5>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ url('/user/update/'.$data->id) }}">
                            @csrf {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" value="{{$data->name}}" class="form-control" name="name">
                                @error('name')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></b></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" value="{{$data->email}}" name="email">
                                @error('email')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></b></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Role</label>
                                <select name="role" class="form-control" aria-label="Default select example">
                                    <option value="">- Pilih Role</option>
                                    <option value="superadmin">Super Admin</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                                @error('role')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                            </div>
                            <a href="/user" class="btn bg-danger btn-sm"><i class="fa fa-undo"> Kembali</i></a>
                            <button type="submit" class="btn bg-primary btn-sm"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection