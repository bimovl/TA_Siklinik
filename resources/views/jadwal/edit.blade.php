@extends('layout.template')
@section('title', 'Edit Jadwal '.$jadwal['id_jadwal'])
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
                    <form action="{{url ('/jadwal/update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                        <label> </label>
                        <input type="hidden" name="id_jadwal" value="{{$jadwal['id_jadwal']}}">
                        
                        <label> Hari </label>
                        <select name="hari" id="hari" value="{{$jadwal['hari']}}" class="form-control">
                        <option value="{{ $jadwal->hari }}"> {{ $jadwal->hari }} </option>
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
                            <label> Dokter</label>
                            <select class="form-control select2" name="id_dokter" id="id_dokter">
                                <option disabled value> Pilih Dokter</option>
                                <option value="{{ $jadwal->id_dokter }}"> {{ $jadwal->dokter->nama_dokter }} </option>
                                @foreach ($dokter as $item)
                                <option value="{{ $item->id_dokter }}"> {{ $item->nama_dokter }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                        <label> Poli </label>
                        <select class="form-control select2" name="id_poli" id="id_poli">
                            <option disabled value> Pilih Poli</option>
                            <option value="{{ $jadwal->id_poli }}"> {{ $jadwal->poli->nama_poli }} </option>
                            @foreach ($poli as $item)
                            <option value="{{ $item->id_poli }}"> {{ $item->nama_poli }}</option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                            <label> Jam Kerja</label>
                            <input type="text" name="jam" value="{{$jadwal['jam']}}" class="form-control" autofocus required>
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