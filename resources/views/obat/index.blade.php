@extends('layout.template')
@section('title', 'List Data Obat')
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
            <a href="{{ url('obat/add') }}" class="btn btn-success btn-sm">
                <i class="fa fa-plus"></i> Tambah Obat
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
                        <th>Nama Obat </th>
                        <th>Jenis Obat </th>
                        <th>Bahan Aktif </th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama_obat}} </td>
                        <td> {{$item->jenis}} </td>
                        <td> {{$item->kandungan}} </td>
                        <td class="text-center">
                            <a href="/obat/edit/{{$item['id_obat']}}" class="btn btn-primary btn-sm" method="post">
                                <i class="fa fa-pen"></i>
                            </a>
                            </a>
                            <a href="/obat/delete/{{$item['id_obat']}}" onclick="return confirm('yakin ingin menghapus data?')" class="btn btn-danger btn-sm" method="post">
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