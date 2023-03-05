@extends('index')

@section('halaman','Dashboard')
@section('dashboard','active')
@section('content')
<div class="content-wrapper" style="background-color: #E1EEDD">
  <br>
  <section class="content">
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
              <i class="ion ion-bag" style="color: rgb(185, 185, 255)"></i>
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
              <i class="ion ion-pie-graph" style="color:darkgrey"></i>
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
              <i class="ion ion-person-add" style="color:rgb(147, 209, 147)"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <div id="C_Inventaris"></div>
        </div>
        <div class="col-8">
          <div id="C_transaksi"></div>
        </div>
      </div><br>
    </div>
  </section>
</div>
@section('footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
  Highcharts.chart('C_Inventaris', {
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
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
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
<script>
  Highcharts.chart('C_transaksi', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Data Transaksi Perbulan'
    },
    xAxis: {
        categories: [
            'januari', 'februari', 'maret', 'april', 'mei', 'juni', 'juli', 'agustus', 'september', 'oktober', 'november', 'desember'
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
            '<td style="padding:0"><b>{point.y}</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.1,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Transaki',
        data: [ {{ $jan }}, {{ $feb }}, {{ $mar }}, {{ $apr }}, {{ $mei }}, {{ $jun }}, {{ $jul }}, {{ $ags }}, {{ $sep }}, {{ $okt }}, {{ $nov }}, {{ $des }} ]
    }
  ]
});
</script>
@endsection
@endsection