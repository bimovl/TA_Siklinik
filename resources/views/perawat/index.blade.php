@extends('layout.template')
@section('title', 'Data Perawat')
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
            <a href="{{ url('perawat/add') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Tambah Perawat
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
                        <th>Nama Perawat </th>
                        <th>Jenis Kelamin </th>
                        <th>Username </th>
                        <th>level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama_perawat}} </td>
                        <td> {{$item->jeniskelamin}} </td>
                        <td> {{$item->username}} </td>
                        <td> {{$item->level}} </td>
                        <td class="text-center">
                            <a href="/perawat/edit/{{$item['id_perawat']}}" class="btn btn-primary btn-sm" method="post">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="/perawat/delete/{{$item['id_perawat']}}" onclick="return confirm('yakin ingin menghapus data?')" class="btn btn-danger btn-sm" method="post">
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
</div>

@endsection