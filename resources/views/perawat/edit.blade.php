@extends('layout.template')

@section('title', 'Edit Data Perawat ' . $data['nama_perawat'])

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
                    <form action="{{url ('/perawat/update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label> Nama Perawat</label>
                            <input type="hidden" name="id_perawat" value="{{$data['id_perawat']}}">

                            <input type="text" name="nama_perawat" value="{{$data['nama_perawat']}}" class="form-control" autofocus required>
                        </div>

                        <div class="form-group">
                            <label> Jenis Kelamin</label>
                            <select name="jeniskelamin" id="jeniskelamin" value="{{$data['jeniskelamin']}}" class="form-control">
                            <option value="{{ $data->jeniskelamin }}"> {{ $data->jeniskelamin }} </option>
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Username</label>
                            <input type="username" name="username" value="{{$data['username']}}" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" autofocus required>
                        </div>
                        <div class="form-group">
                            <label> Level</label>
                            <input type="level" name="level" value="{{$data['level']}}" class="form-control" autofocus required>
                        </div>

                        <a href="{{ url('perawat') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection