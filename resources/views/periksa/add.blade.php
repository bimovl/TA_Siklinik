@extends('layout.template')

@section('title', 'Tambah periksa')

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
                    <form action="{{url ('/periksa/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label> Periksa</label>
                            <div class="form-group">
                                <label> Tanggal Periksa</label>
                                <input type="date" name="tgl_periksa" class="form-control" autofocus required>
                            </div>

                            <div class="form-group">
                                <label> Pilih Pasien </label>
                                <select class="form-control select2" name="id_pasien" id="id_pasien">
                                <option>-- Pilih Pasien --</option>
                                    @foreach ($pasien as $item)
                                    <option value="{{ $item->id_pasien }}"> {{ $item->nama_pasien }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Pilih Dokter </label>
                                <select class="form-control select2" name="id_dokter" id="id_dokter">
                                    <option>-- Pilih Dokter --</option>
                                    @foreach ($dokter as $item)
                                    <option value="{{ $item->id_dokter }}"> {{ $item->nama_dokter }}</option>
                                    @endforeach
                                </select>
                            </div>

                        <div class="form-group">
                            <label> Status </label>
                            <select name="status" id="status" class="form-control">
                            <option>-- Pilih Status --</option>    
                                <option value="Antri">Antri</option>
                                <option value="Check Up">Check Up</option>
                                <option value="Rawat Inap">Rawat Inap</option>
                                <option value="Selesai">Selesai</option>
                            </select>
                        </div>

                            <a href="{{ url('periksa') }}" class="btn btn-danger">Batal </a>
                            <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection