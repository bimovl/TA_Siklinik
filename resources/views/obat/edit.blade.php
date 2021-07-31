@extends('layout.template')
@section('title', 'Edit Obat ' . $data['nama_obat'])
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
                    <form action="{{url ('/obat/update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label> Nama Obat</label>
                            <input type="hidden" name="id_obat" value="{{$data['id_obat']}}">

                            <input type="text" name="nama_obat" value="{{$data['nama_obat']}}" class="form-control" autofocus required>
                        </div>

                        <div class="form-group">
                        <label> Jenis</label>
                        <select name="jenis" id="jenis"value="{{$data['jenis']}}"class="form-control">
                        <option value="{{$data->jenis }}"> {{ $data->jenis }} </option>
                                <option value="Serbuk">Serbuk</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Pil">Pil</option>
                                <option value="Kapsul">Kapsul</option>
                                <option value="Sirup">Sirup</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label> Kandungan </label>
                            <textarea name="kandungan" id="textarea-input" rows="6" class="form-control">{{$data['kandungan']}}</textarea>
                        </div>
                        <a href="{{ url('obat') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection