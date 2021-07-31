<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SIKlinik | @yield('title')</title>
  <meta name="description" content="ADMIN ">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href=" {{ asset('./assets/css/style.css') }}">
  <link rel="stylesheet" href="{{asset ('./assets/css/components.css') }}">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <div class="search-backdrop"></div>
            <div class="search-result">
          </div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
          @if(userLevel() == 'ADMIN')
                            <img class="user-avatar rounded-circle" src="{{ asset('style/images/admin.png') }}">
                            @endif

                        @if(userLevel() == 'PERAWAT')
                            <img class="user-avatar rounded-circle" src="{{ asset('style/images/perawat.png') }}">
                            @endif  
            <div class="d-sm-none d-lg-inline-block">Hi, {{@session('user')['nama']}}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="{{url('logout')}}" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{url('/')}}">{{userLevel()}}</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
          </div>
          <ul class="sidebar-menu">    
                    <li class="<?php if(request()->is('dashboard')){ echo"active";} ?>">
                      <a href="{{ url('home') }}" class="nav-link"><i class="fas fa-fire" style="font-size: 20px;"></i><span style="font-size: 15px;">Dashboard</span></a>
                    </li>

            @if(userLevel() == 'ADMIN')
              <li class="menu-header">USER</li>
                    <li class="<?php if(request()->is('admin')){ echo"active";} ?>">
                        <a href="{{ url('admin') }}" class="nav-link"><i class="fas fa-user" style="font-size: 20px;"></i><span>Admin</span> </a>
                    </li>

                    <li class="<?php if(request()->is('perawat')){ echo"active";} ?>">
                        <a href="{{ url('perawat') }}" class="nav-link"><i class="fas fa-user-nurse" style="font-size: 20px;"></i><span>Perawat<span></a>
                    </li>
              <li class="menu-header">PEMERIKSAAN</li>
                    <li class="<?php if(request()->is('pasien')){ echo"active";} ?>">
                        <a href="{{ url('pasien') }}" class="nav-link"><i class="fas fa-users" style="font-size: 20px;"></i><span>Pasien</span></a>
                    </li>
                    <li class="<?php if(request()->is('periksa')){ echo"active";} ?>">
                        <a href="{{ url('periksa') }}" class="nav-link"><i class="far fa-file-alt" style="font-size: 20px;"></i><span>Periksa</span></a>
                    </li>
              <li class="menu-header">DATA KLINIK</li>
                    <li class="<?php if(request()->is('ruang')){ echo"active";} ?>">
                        <a href="{{ url('ruang') }}" class="nav-link"> <i class="fas fa-home" style="font-size:20px;"></i><span>Ruang</span></a>
                    </li>
                    <li class="<?php if(request()->is('obat')){ echo"active";} ?>">
                        <a href="{{ url('obat') }}" class="nav-link"> <i class="fas fa-pills" style="font-size: 20px;"></i><span>Obat</span></a>
                    </li>
                    <li class="<?php if(request()->is('poli')){ echo"active";} ?>">
                        <a href="{{ url('poli') }}" class="nav-link"> <i class="fas fa-clinic-medical" style="font-size: 20px;"></i><span>Poli</span></a>
                    </li>
                    <li class="<?php if(request()->is('dokter')){ echo"active";} ?>">
                        <a href="{{ url('dokter') }}" class="nav-link"> <i class="fas fa-user-md" style="font-size: 20px;"></i><span>Dokter</span></a>
                    </li>
                    <li class="<?php if(request()->is('jadwal')){ echo"active";} ?>">
                        <a href="{{ url('jadwal') }}" class="nav-link"> <i class="fas fa-calendar" style="font-size: 20px;"></i><span>Jadwal</span></a>
                    </li>
                @endif

                @if(userLevel() == 'PERAWAT')

                <li class="nav-item dropdown">
                <a class="nav-link has-dropdown"><i class="fas fa-clipboard" style="font-size: 20px;"></i><span>Pemeriksaan</span></a>
                <ul class="dropdown-menu">
                  <li class="<?php if(request()->is('antri')){ echo"active";} ?>">
                    <a class="nav-link" href="{{ url('periksa/antri') }}">Antri</a></li>
                  <li class="<?php if(request()->is('cekup')){ echo"active";} ?>">
                    <a class="nav-link" href="{{ url('periksa/cekup') }}">Check Up</a></li>
                  <li class="<?php if(request()->is('rawat')){ echo"active";} ?>">
                    <a class="nav-link" href="{{ url('periksa/rawat') }}">Rawat Inap</a></li>
                  <li class="<?php if(request()->is('selesai')){ echo"active";} ?>">
                    <a class="nav-link" href="{{ url('periksa/selesai') }}">Selesai</a></li>
                </ul>
                </li>


                  <li class="<?php if(request()->is('resep')){ echo"active";} ?>">
                      <a href="{{ url('resep') }}" class="nav-link"> <i class="fas fa-receipt" style="font-size: 20px;"></i><span>Resep</span></a>
                    </li>

                    <li class="menu-header">CHECK UP</li>
                    <li class="<?php if(request()->is('rekam_medis')){ echo"active";} ?>">
                        <a href="{{ url('rekam_medis') }}" class="nav-link"> <i class="fas fa-notes-medical" style="font-size: 20px;"></i><span>Rekam Medis</span></a>
                    </li>
                    <li class="<?php if(request()->is('paru')){ echo"active";} ?>">
                        <a href="{{ url('paru') }}" class="nav-link"> <i class="fas fa-wind" style="font-size: 20px;"></i><span>Kapasitas Paru</span></a>
                    </li>
                   <li class="<?php if(request()->is('suhu')){ echo"active";} ?>">
                        <a href="{{ url('suhu') }}" class="nav-link"> <i class="fas fa-thermometer" style="font-size: 20px;"></i><span>Suhu Tubuh</span></a>
                    </li>
                    @endif
                    <li class="menu-header">LOGGED IN AS </li>
                    <li>
                    <a href="{{url('logout')}}" class="nav-link"> <i class="fas fa-sign-in-alt" style="font-size: 20px;"></i><span>{{@session('user')['nama']}}</span></a>
                    </li>
                </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
          </div>

          <div class="section-body">
            <div class="card">
              <div class="card-body">
                @yield('content')
              </div>
              <div class="card-footer bg-whitesmoke">
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-----------------------------footer---------------------------->
      <footer class="main-footer">
        <div class="footer-right">
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('./assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File --> 
  <script src="{{ asset('./assets/js/scripts.js') }}"></script>
  <script src="{{ asset('./assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
