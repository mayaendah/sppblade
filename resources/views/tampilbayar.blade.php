<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (session('alert'))
    <div style="color:red">
        {{ session('alert') }}
    </div>
@endif
<table border="1">
        <tr>
            <th>NISN</th>
            <th>Tanggal Bayar</th>
            <th>Bulan Bayar</th>
            <th>Tahun Bayar</th>
            <th>Jumlah bayar</th>
            <th>Jumlah bayar</th>
        </tr>
        @foreach($getbayar as $gtbayar)
        <tr>
            <td>{{$gtbayar->id_siswa}}</td>
            <td>{{$gtbayar->tgl_bayar}}</td>
            <td>{{$gtbayar->bulan}}</td>
            <td>{{$gtbayar->thn_bayar}}</td>
            <td>{{$gtbayar->jumlah_bayar}}</td>
            <td><a href="/editbayar/{{$gtbayar->id_siswa}}">Edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
