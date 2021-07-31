@extends('layout.template')
@section('title', 'Dashboard')
@section('content')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">
<div class="text-left">
</div>
    <div class="text-center">
    <div class="card">
        <h4>SISTEM INFORMASI KLINIK DAN REKAM MEDIS</h4>
    </div>
@if(userLevel() == 'ADMIN')
<div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ url('admin') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Admin</h4>
                  </div>
                  <div class="card-body">
                    {{App\Models\Admin::count()}}
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="{{ url('perawat') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-user-nurse"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Perawat</h4>
                  </div>
                  <div class="card-body">
                    {{App\Models\Perawat::count()}}
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="{{ url('pasien') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Pasien</h4>
                  </div>
                  <div class="card-body">
                    {{App\Models\Pasien::count()}}
                  </div>
                </div>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ url('dokter') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-user-md"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Dokter</h4>
                  </div>
                  <div class="card-body">
                    {{App\Models\Dokter::count()}}
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="{{ url('periksa/rawat') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-clock"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Waiting List Ruang</h4>
                  </div>
                  <div class="card-body">
                    {{App\Models\Periksa::where('proses', 'Tunggu Ruang')->count()}}
                  </div>
                </div>
              </div>
            </a>
            </div>
          </div>

@endif
            @if(userLevel() == 'PERAWAT')
            <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12"> 
            <a href="{{ url('periksa/antri') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-user-clock"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Antrian</h4>
                  </div>
                  <div class="card-body">
                    {{App\Models\Periksa::where('status', 'Antri')->count()}}
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <a href="{{ url('periksa/cekup') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-person-booth"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Check Up</h4>
                  </div>
                  <div class="card-body">
                    {{App\Models\Periksa::where('status', 'Check Up')->count()}}
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="{{ url('periksa/rawat') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-bed"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Rawat Inap</h4>
                  </div>
                  <div class="card-body">
                    {{App\Models\Periksa::where('status', 'Rawat Inap')->count()}}
                  </div>
                </div>
              </div>
            </a>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <a href="{{ url('periksa/selesai') }}">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-child"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Antrian Selesai</h4>
                  </div>
                  <div class="card-body">
                    {{App\Models\Periksa::where('status', 'selesai')->count()}}
                  </div>
                </div>
              </div>
            </a>
            </div>
@endif
          </div>
    </div><!-- .animated
</div><!-- .content -->
@endsection