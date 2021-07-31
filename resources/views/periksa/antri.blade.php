@extends('layout.template')
@section('title', 'Antri')
@section('content')
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> <!-- tambh -->
<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
        </div>
    </div>
</div>
{!! Toastr::message() !!} 
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="pull-left">
        @if(userLevel() == 'ADMIN')
            <a href="{{ url('periksa/add') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Tambah Periksa
            </a>
            @endif
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <div class="card-body table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Tanggal Periksa </th>
                        <th>Status </th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter </th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->tgl_periksa}} </td>
                        <td>{{$item->status}} </td>
                        <td> {{$item->pasien->nama_pasien}} </td>
                        <td> {{$item->dokter->nama_dokter}} </td>
                        <td class="text-center">
                            <a href="/periksa/editantri/{{$item['id_periksa']}}" class="btn btn-primary btn-sm" method="post">
                                <i class="fa fa-pen"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection