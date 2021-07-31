@extends('layout.template')

@section('title', 'Tambah Data Admin')

@section('content')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="pull-left">
        </div>

        <div class="card-body table-responsive">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{url ('/admin/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label> Nama Admin</label>
                            <input type="text" name="nama" class="form-control" autofocus required>
                        </div>

                        <div class="form-group">
                            <label> Jenis Kelamin</label>
                            <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                            <option>-- Pilih Jenis Kelamin --</option>    
                            <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Username</label>
                            <input type="username" name="username" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" autofocus required>
                        </div>
                        <div class="form-group">
                            <label> Level</label>
                            <input type="level" name="level" placeholder="Admin"class="form-control" autofocus required>
                        </div>
                        <a href="{{ url('admin') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection