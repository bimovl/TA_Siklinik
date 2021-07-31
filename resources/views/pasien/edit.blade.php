@extends('layout.template')

@section('title', 'Edit Data Pasien ' . $data['nama_pasien'])

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
                    <form action="{{url ('/pasien/update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label> Nama Perawat</label>
                            <input type="hidden" name="id_pasien" value="{{$data['id_pasien']}}">

                            <input type="text" name="nama_pasien" value="{{$data['nama_pasien']}}" class="form-control" autofocus required>
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
                            <label> Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" value="{{$data['tgl_lahir']}}" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" value="{{$data['tempat_lahir']}}" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label> Alamat </label>
                            <textarea name="alamat" id="textarea-input" rows="6" class="form-control">{{$data['alamat']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label> Pekerjaan</label>
                            <input type="text" name="pekerjaan" value="{{$data['pekerjaan']}}" class="form-control" autofocus required>
                        </div>
                        <a href="{{ url('pasien') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection