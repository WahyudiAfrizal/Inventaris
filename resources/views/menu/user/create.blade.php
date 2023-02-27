@extends('index')
@section('halaman','Add User')
@section('user','active')
@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid"><br>
                <div div class="card">
                    <div class="card-header" style="background-color: #0b507b">
                        <h5 style="color:white">Add User</h5>
                    </div>
                    <div class="card-body">
                        <form form method="post" action="{{ url('/user/store') }}">
                        @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                                @error('name')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="text" class="form-control" value="{{ old('email') }}" name="email">
                                @error('email')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password">
                                @error('password')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="form-label">Role</label>
                                <select name="role" class="form-control" aria-label="Default select example">
                                    <option value="">- Pilih role</option>
                                    <option value="superadmin">Super Admin</option>
                                    <option value="petugas">Petugas</option>
                                </select>
                                @error('role')
                                    <div class="error" style="color:#CD0404"><b>{{$message}}</b></div>
                                @enderror
                            </div>
                            <a href="/user" class="btn bg-gradient-danger btn-sm"><i class="fa fa-undo"> Cancel</i></a>
                            <button type="submit" class="btn bg-gradient-primary btn-sm"><i class="fa fa-save"> Save</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection