@extends('layout.template')

@section('title', 'Edit Pemeriksaan ' . $periksa['id_periksa'])

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
                        <form action="{{url ('/periksa/updateantri')}}" method="post" enctype="multipart/form-data">
                        @csrf
                         
                        <div class="form-group" hidden="form-group" >
                        <label> Tanggal Periksa</label>
                        <input type="date" name="tgl_periksa" value="{{$periksa['tgl_periksa']}}" class="form-control" autofocus required>
                        </div>
                        <div>
                        <div class="form-group">
                            <label> Status </label>
                            <select name="status" id="status" class="form-control" value="{{$periksa['status']}}">
                            <option value="{{ $periksa->status }}"> {{ $periksa->status }} </option>
                                <option value="Check Up">Check Up</option>
                            </select>
                            </div>
                        <div class="form-group" hidden="form-group" >
                        <label> Nama Pasien</label>
                        <input type="hidden" name="id_periksa" value="{{$periksa['id_periksa']}}">

                        <select class="form-control select2" name="id_pasien" id="id_pasien">
                            <option disabled value> Pilih Pasien</option>
                            <option value="{{ $periksa->id_pasien }}"> {{ $periksa->pasien->nama_pasien }} </option>
                            @foreach ($pasien as $item)
                            <option value="{{ $item->id_pasien }}"> {{ $item->nama_pasien }}</option>
                            @endforeach
                           </select>
                        </div>

                        <div class="form-group" hidden="form-group" >
                        <label> Nama Dokter</label>

                        <select class="form-control select2" name="id_dokter" id="id_dokter">
                            <option disabled value> Pilih Dokter</option>
                            <option value="{{ $periksa->id_dokter }}"> {{ $periksa->dokter->nama_dokter }} </option>
                            @foreach ($dokter as $item)
                            <option value="{{ $item->id_dokter }}"> {{ $item->nama_dokter }}</option>
                            @endforeach
                           </select>
                        </div>
                        <a href="{{ url('periksa/antri') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        </form>
                    </div>
                </div>
            </div> 
            </div>
@endsection
    
