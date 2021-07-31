@extends('layout.template')
@section('title', 'Rekam Medis')
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
            <a href="{{ url('rekam_medis/add') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Tambah Rekam Medis
            </a>
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
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Diagnosa</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->tgl_periksa}} </td>
                        <td> {{$item->pasien->nama_pasien}} </td>
                        <td> {{$item->dokter->nama_dokter}} </td>
                        <td>{{$item->diagnosa}} </td>
                        <td>{{$item->keterangan}} </td>
                        <td class="text-center">
                            <a href="/rekam_medis/edit/{{$item['id_rekammedis']}}" class="btn btn-primary btn-sm" method="post">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="/rekam_medis/detail/{{$item['id_rekammedis']}}" class="btn btn-warning btn-sm" method="post">
                                <i class="fa fa-search"></i>
                            </a>
                            <a href="/rekam_medis/delete/{{$item['id_rekammedis']}}" class="btn btn-danger btn-sm" method="post" onclick="return confirm('Yakin ingin menghapus data?')">
                                <i class="fa fa-trash-alt"></i>
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