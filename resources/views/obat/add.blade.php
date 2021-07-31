@extends('layout.template')

@section('title', 'Tambah Data Obat')

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
                    <form action="{{url ('/obat/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label> Nama Obat </label>
                            <input type="text" name="nama_obat" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label> Jenis Obat</label>
                            <select name="jenis" id="jenis" class="form-control">
                            <option >-- Pilih Jenis Obat --</option>    
                            <option value="Serbuk">Serbuk</option>
                                <option value="Tablet">Tablet</option>
                                <option value="Pil">Pil</option>
                                <option value="Kapsul">Kapsul</option>
                                <option value="Sirup">Sirup</option>
                            </select>
                        </div>
                        <div class="form-group">
                                <label> Kandungan </label>
                                <textarea name="kandungan" id="textarea-input" rows="6" placeholder="Kandungan..." class="form-control"></textarea>
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