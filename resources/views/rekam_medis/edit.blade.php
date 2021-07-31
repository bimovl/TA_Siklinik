@extends('layout.template')

@section('title', 'Edit Rekam Medis ' . $data['id_rekammedis'])

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="pull-left">
        </div>

        <div class="card-body table-responsive">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <form action="{{url ('/rekam_medis/update')}}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label> Tanggal Periksa</label>
                            <input type="date" name="tgl_periksa" value="{{$data['tgl_periksa']}}" class="form-control" autofocus required>
                        </div>

                        <div class="form-group">
                            <label> Nama Pasien</label>
                            <input type="hidden" name="id_rekammedis" value="{{$data['id_rekammedis']}}">
                            <select class="form-control select2" name="id_pasien" id="id_pasien">
                                <option disabled value> Pilih Pasien</option>
                                <option value="{{ $data->id_pasien }}"> {{ $data->pasien->nama_pasien }} </option>
                                @foreach ($pasien as $item)
                                <option value="{{ $item->id_pasien }}"> {{ $item->nama_pasien }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label> Nama Dokter</label>
                            <select class="form-control select2" name="id_dokter" id="id_dokter">
                                <option disabled value> Pilih Dokter</option>
                                <option value="{{ $data->id_dokter }}"> {{ $data->dokter->nama_dokter }} </option>
                                @foreach ($dokter as $item)
                                <option value="{{ $item->id_dokter }}"> {{ $item->nama_dokter }}</option>
                                @endforeach
                            </select>
                        </div>
                        </br>
                        <div class="input-group">
                        <div class="input-group tbinput">
                            <input type="float" name="tb" value="{{$data['tb']}}" class="form-control" autofocus required>
                            <div class="input-group-append">
                                  <div class="input-group-text">
                                    <i>Cm</i>
                                  </div>
                                </div>
                        </div>
                        </div>
                        <br>
                        <div class="input-group">
                        <div class="input-group bbinput">
                            <input type="float" name="bb" value="{{$data['bb']}}" class="form-control" autofocus required>
                            <div class="input-group-append">
                                  <div class="input-group-text">
                                    <i>Kg</i>
                                  </div>
                                </div>
                        </div>
                        </div>
                        <br>
                        <div class="input-group">
                        <div class="input-group tensiinput">
                            <input type="float" name="tensi" value="{{$data['tensi']}}" class="form-control" autofocus required>
                            <div class="input-group-append">
                                  <div class="input-group-text">
                                    <i>mmHg</i>
                                  </div>
                                </div>
                        </div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label> Diagnosa </label>
                            <input type="text" name="diagnosa" value="{{$data['diagnosa']}}" class="form-control" autofocus required>
                        </div>
                        <div class="form-group">
                            <label> Keluhan </label>
                            <textarea name="keluhan" id="textarea-input" rows="6" class="form-control">{{$data['keluhan']}}</textarea>
                        </div>
                        <div class="form-group">
                            <label> Keterangan </label>
                            <textarea name="keterangan" id="textarea-input" rows="6" class="form-control">{{$data['keterangan']}}</textarea>
                        </div>
                        <a href="{{ url('rekam_medis') }}" class="btn btn-danger">Batal </a>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection