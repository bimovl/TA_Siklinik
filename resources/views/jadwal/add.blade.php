@extends('layout.template')

@section('title', 'Tambah Jadwal')

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
                    <form action="{{url ('/jadwal/store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label> Hari </label>
                            <select name="hari" id="hari" class="form-control">
                            <option>-- Pilih Hari --</option>
                            <option value="Senin">Senin</option>
                                <option value="Selasa">Selasa</option>
                                <option value="Rabu">Rabu</option>
                                <option value="Kamis">Kamis</option>
                                <option value="Jumat">Jumat</option>
                                <option value="Sabtu">Sabtu</option>
                                <option value="Minggu">Minggu</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Dokter </label>
                            <select class="form-control select2" name="id_dokter" id="id_dokter">
                                <option>-- Pilih Dokter --</option>
                                @foreach ($dokter as $item)
                                <option value="{{ $item->id_dokter }}"> {{ $item->nama_dokter }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Poli </label>
                            <select class="form-control select2" name="id_poli" id="id_poli">
                                <option>-- Pilih Poli --</option>
                                @foreach ($data as $item)
                                <option value="{{ $item->id_poli }}"> {{ $item->nama_poli }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Jam </label>
                            <input type="timestamps" name="jam" class="form-control" autofocus required>
                        </div>
                        <a href="{{ url('jadwal') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection