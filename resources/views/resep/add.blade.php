@extends('layout.template')

@section('title', 'Tambah Data Resep')

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
                    <form action="{{url ('/resep/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label> Pilih Pasien </label>
                            <select class="form-control select2" name="id_pasien" id="id_pasien">
                                <option value> -- Pilih Pasien-- </option>
                                @foreach ($pasien as $item)
                                <option value="{{ $item->id_pasien }}"> {{ $item->nama_pasien }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Pilih Obat </label>
                            <select class="form-control select2" name="id_obat" id="id_obat">
                            <option>-- Pilih Obat --</option>
                                @foreach ($obat as $item)
                                <option value="{{ $item->id_obat }}"> {{ $item->nama_obat }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label> Aturan Minum</label>
                            <input type="text" name="aturan_minum" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                                <label> Keterangan </label>
                                <textarea name="keterangan" id="textarea-input" rows="6" placeholder="Keterangan..." class="form-control"></textarea>
                            </div>
                        <a href="{{ url('resep') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection