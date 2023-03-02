@extends('index')

@section('halaman','Dashboard')
@section('dashboard','active')
@section('content')
<div class="content-wrapper" style="background-color: #E1EEDD">
  <div class="content">
    <div class="content-header">
      <div class="container-fluid">
        <h3 style="color: rgb(94, 92, 92)" class="text-center">Selamat Datang di Sistem Informasi Inventaris</h3>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-primary">
            <div class="inner">
              <h3>{{ $barang }}</h3>

              <p>Jenis Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="small-box" style="background-color: rgb(78, 79, 78)">
            <div class="inner">
              <h3 style="color: white">{{ $data_barang }}</h3>

              <p style="color: white">Data Barang</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{$transaksi}}</h3>

              <p>Transaksi</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <div id="chartNilai"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('chartNilai', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Diagram Data Inventaris'
    },
    xAxis: {
        categories: [
            ''
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: '     '
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Jenis Barang',
        data: [{{ $barang }}]
    },{
        name: 'Data Barang',
        data: [{{ $data_barang }}]
    },{
        name: 'Transaksi',
        data: [{{ $transaksi }}]
    }
  ]
});
</script>
@endsection
@endsection