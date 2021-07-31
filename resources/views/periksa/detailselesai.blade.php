@extends('layout.template')
@section('title', 'Detail Selesai Pemeriksaan')
@section('content')

<div class="breadcrumbs">
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
    <div class="row">

            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Details Pemeriksaan</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Tanggal Periksa: </a></strong>
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
                        <a style="font-size: 15px"><strong> Status : </a></strong>
                        <p>{{$data['status']}} </p>
                    </div>
                </div>
                </div>
</div>
                <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                    <strong class="card-title">Riwayat Rawat Inap</strong>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Proses : </a></strong>
                        <p>- {{$data['proses']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> ID Ruang : </a></strong>
                        <p>RG-{{$data['id_ruang']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Tanggal Masuk : </a></strong>
                        <p>- {{$data['tgl_masuk']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Tanggal Keluar : </a></strong>
                        <p>- {{$data['tgl_keluar']}} </p>
                    </div>
                </div>
            </div>
</div>
            <a href="{{ url('/periksa/rawat') }}" class="btn btn-danger">Kembali </a>
        </div>
    </div>
</div>

@endsection