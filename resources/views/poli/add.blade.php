@extends('layout.template')

@section('title', 'Tambah Data Poli')

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
                    <form action="{{url ('/poli/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label> Nama Poli </label>
                            <input type="text" name="nama_poli" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                                <label> Inventaris </label>
                                <textarea name="inventaris" id="textarea-input" rows="6" placeholder="inventaris..." class="form-control"></textarea>
                            </div>
                        <a href="{{ url('poli') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection