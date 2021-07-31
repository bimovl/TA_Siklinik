@extends('layout.template')

@section('title', 'Tambah Data Ruang')

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
                    <form action="{{url ('/ruang/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label> Nama Ruang</label>
                            <input type="text" name="nama_ruang" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                                <label> Fasilitas </label>
                                <textarea name="fasilitas" id="textarea-input" rows="6" placeholder="fasilitas..." class="form-control"></textarea>
                            </div>
                        <div class="form-group">
                            <label> Jenis </label>
                            <select name="jenis" id="jenis" class="form-control">
                            <option>-- Pilih Jenis Ruang --</option>
                               <option value="Kelas 1">Kelas 1</option>
                               <option value="Kelas 2">Kelas 2</option>
                               <option value="Kelas3">Kelas 3</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Ketersediaan </label>
                            <select name="ketersediaan" id="ketersediaan" class="form-control">
                            <option>-- Ketersediaan --</option>
                               <option value="Tersedia">Tersedia</option>
                               <option value="Tidak Tersedia">Tidak Tersedia</option>
                            </select>
                        </div>
                        <a href="{{ url('ruang') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection