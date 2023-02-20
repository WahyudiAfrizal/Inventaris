<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Data Inventarsi</title>
</head>
<body>
    <div class="form-group">
        <P align="center"><b>Laporan Data Inventaris</b></P>
        <table class="static" align="center" rules="all" border="1px" style="width:20cm">
            {{-- tabel header --}}
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th >Tanggal</th>
                    <th >Jenis Barang</th>
                    <th >Stok</th>
                    <th >jenis</th>
                    <th >Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $t)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$t->tanggal}}</td>
                    <td>{{$t->nama_barang}}</td>
                    <td>{{$t->stok}}</td>
                    <td>{{$t->jenis}}</td>
                    <td>{{$t->keterangan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>