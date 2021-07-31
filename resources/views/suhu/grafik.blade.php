@extends('layout.template')

@section('title', 'Pengukuran Suhu tubuh')

@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Pengukuran Suhu Tubuh</h1>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="pull-left">
            <a href="/suhu" class="btn btn-secondary btn-sm">
                <i class="fa fa-undo"></i> Kembali
            </a>
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No </th>
                        <th>Nama Pasien </th>
                        <th>Sensor </th>
                        <th>Created </th>
                        <th>Aksi </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td> {{$item->pasien->nama_pasien}} </td>
                        <td>{{$item->sensor}} </td>
                        <td> {{$item->created_at}} </td>
                        <td>
                            <a href="/suhu/delete/{{$item['id']}}" class="btn btn-danger btn-sm" method="post" onclick="return confirm('Yakin ingin menghapus data?')">
                                <i class="ti-trash"></i>
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