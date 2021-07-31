@extends('layout.template')

@section('title', $data['nama_dokter'])

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Data dokter {{$data['nama_dokter']}}</h1>
            </div>
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
                    <form action="{{url ('/dokter/update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label> Nama dokter</label>
                            <input type="hidden" name="id_dokter" value="{{$data['id_dokter']}}">
                            <input type="text" name="nama_dokter" value="{{$data['nama_dokter']}}" class="form-control" autofocus required>
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
                            <label> Nomor Telepon </label>
                            <input type="text" name="no_telp" value="{{$data['no_telp']}}" class="form-control" autofocus required>
                        </div>

                        <div class="form-group">
                            <label> Alamat </label>
                            <textarea name="alamat" id="textarea-input" rows="6" class="form-control">{{$data['alamat']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label> Institusi </label>
                            <input type="text" name="institusi" value="{{$data['institusi']}}" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label> Jenjang </label>
                            <input type="text" name="jenjang" value="{{$data['jenjang']}}" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label> Spesialis </label>
                            <input type="text" name="spesialis" value="{{$data['spesialis']}}" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label> Tahun Lulus </label>
                            <input type="text" name="tahun_lulus" value="{{$data['tahun_lulus']}}" class="form-control" autofocus required>
                        </div>
                        <a href="{{ url('dokter') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection