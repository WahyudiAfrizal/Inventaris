<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Inventaris</title>

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body>
    <div class="form-group"><br>
        <P align="center"><b>Laporan Data Inventaris</b></P>
        <table class="table table-bordered table-hover" align="center" rules="all" border="1px" style="width:30cm">
            {{-- tabel header --}}
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th >Tanggal</th>
                    <th >Nama Barang</th>
                    <th >Jenis Transaksi</th>
                    <th >Jumlah</th>
                    <th >Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $t)
                @foreach ($data as $d)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$t->tanggal}}</td>
                    <td>{{$d->nama_barang}}</td>
                    <td>{{$t->jenis}}</td>
                    <td>{{$t->jumlah}}</td>
                    <td>{{$t->keterangan}}</td>
                </tr>
                @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>