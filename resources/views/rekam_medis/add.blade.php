@extends('layout.template')

@section('title', 'Tambah Rekam Medis')

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
                    <form action="{{url ('/rekam_medis/store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">

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

                            <div>
                                <label> Pilih Dokter </label>
                                <select class="form-control select2" name="id_dokter" id="id_dokter">
                                <option>-- Pilih Dokter --</option>
                                    @foreach ($dokter as $item)
                                    <option value="{{ $item->id_dokter }}"> {{ $item->nama_dokter }}</option>
                                    @endforeach
                                </select>
                            </div>

                            </br>
                            <div class="input-group">
                              <div class="input-group tbinput">
                                <input type="float" name="tb" class="form-control" placeholder="Tinggi Badan" autofocus required>
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
                                <input type="float" name="bb" class="form-control" placeholder="Berat Badan" autofocus required>
                                <div class="input-group-append">
                                  <div class="input-group-text">
                                    <i>Kg</i>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <br>
                            <div class="input-group">
                              <div class="input-group tnsinput">
                                <input type="float" name="tensi" class="form-control" placeholder="Sistol/Diastol" autofocus required>
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
                                <input type="text" name="diagnosa" class="form-control" autofocus required>
                            </div>
                            <div class="form-group">
                                <label> Keluhan </label>
                                <textarea name="keluhan" id="textarea-input" rows="6" placeholder="Keluhan..." class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label> Keterangan </label>
                                <textarea name="keterangan" id="textarea-input" rows="6" placeholder="Keterangan..." class="form-control"></textarea>
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