@extends('layout.template')

@section('title', 'Details Rekam Medis ' . $data['id_rekammedis'])

@section('content')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="pull-left">

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body" color="grey">
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Tanggal Periksa : </a></strong>
                        <p>{{$data['tgl_periksa']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Nama Pasien : </a></strong>
                        <p>{{$data->pasien->nama_pasien}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Nama Dokter : </a></strong>
                        <p>{{$data->dokter->nama_dokter}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Tinggi Badan : </a></strong>
                        <p>{{$data['tb']}} Cm</p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Berat Badan : </a></strong>
                        <p>{{$data['bb']}} Kg</p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Tekanan Darah : </a></strong>
                        <p>{{$data['tensi']}} mmHg</p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Diagnosa : </a></strong>
                        <p>{{$data['diagnosa']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Keluhan : </a></strong>
                        <p>{{$data['keluhan']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Keterangan : </a></strong>
                        <p>{{$data['keterangan']}} </p>
                    </div>
                </div>
            </div>
            <a href="{{ url('rekam_medis') }}" class="btn btn-danger">Kembali </a>
        </div>
    </div>
</div>


@endsection