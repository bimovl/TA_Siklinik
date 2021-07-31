@extends('layout.template')
@section('title', $data['nama_dokter'])
@section('content')

<div class="breadcrumbs">
</div>

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
                <div class="card-header">
                    <strong class="card-title">Details Dokter {{$data['nama_dokter']}}</strong>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Nama : </a></strong>
                        <p>{{$data['nama_dokter']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Jenis Kelamin : </a></strong>
                        <p>{{$data['jeniskelamin']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Nomor Telepon : </a></strong>
                        <p>{{$data['no_telp']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Alamat : </a></strong>
                        <p>{{$data['alamat']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Institusi : </a></strong>
                        <p>{{$data['institusi']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Jenjang Terakhir : </a></strong>
                        <p>{{$data['jenjang']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Spesialis : </a></strong>
                        <p>{{$data['spesialis']}} </p>
                    </div>
                    <div class="form-group">
                        <a style="font-size: 15px"><strong> Tahun Lulus: </a></strong>
                        <p>{{$data['tahun_lulus']}} </p>
                    </div>
                </div>
            </div>
            <a href="{{ url('dokter') }}" class="btn btn-danger">Kembali </a>
        </div>
    </div>
</div>

@endsection