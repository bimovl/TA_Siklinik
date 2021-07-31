@extends('layout.template')
@section('title', 'Data Pasien')
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
            <a href="{{ url('pasien/add') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Tambah Pasien
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
                    <tr role="row">
                        <th>No </th>
                        <th>Nama Pasien </th>
                        <th>Jenis Kelamin </th>
                        <th>Tanggal Lahir </th>
                        <th>Tempat Lahir</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama_pasien}} </td>
                        <td> {{$item->jeniskelamin}} </td>
                        <td> {{$item->tgl_lahir}} </td>
                        <td> {{$item->tempat_lahir}} </td>
                        <td> {{$item->alamat}} </td>
                        <td> {{$item->pekerjaan}} </td>
                        <td class="text-center">
                            <a href="/pasien/edit/{{$item['id_pasien']}}" class="btn btn-primary btn-sm" method="post">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="/pasien/delete/{{$item['id_pasien']}}" onclick="return confirm('yakin ingin menghapus data?')" class="btn btn-danger btn-sm" method="post">
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