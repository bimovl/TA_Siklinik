@extends('layout.template')

@section('title', 'Data Kapasitas Paru')

@section('content')


<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">

        </div>
    </div>
</div>
<div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">ID Pasien : PS0{{$id_pasien}}</h3>
</div>
</div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="pull-left">
            <a href="/paru" class="btn btn-secondary btn-sm">
                <i class="fa fa-undo"></i> Kembali
            </a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<title>Sensor Device</title>
</head>

<body>

<div>
  <canvas id="myChart"></canvas>
</div>

<script>
  // === include 'setup' then 'config' above ===
  const labels = [
    @php
      foreach($time as $per_time){
        print("'".explode(" ",$per_time)[1]."'".",");
      }
      @endphp
];
const data = {
  labels: labels,
  datasets: [{
    label: 'Kapasitas Paru',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: [
      @php
      foreach($nilai_sensor as $nilai){
        print($nilai.",");
      }
      @endphp
    ],
  }]
};

  const config = {
    type: 'line',
    data,
    options: {
    scales: {
      xAxes: [{
        type: 'time',
      }]
    }
  },
    };

  var myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>

@endsection
