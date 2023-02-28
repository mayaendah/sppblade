<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa Page</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>NIS</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Nominal SPP</th>
            <th>Telephone</th>
            <th>Aksi</th>
        </tr>
        @foreach ($siswa as $dataSiswa)
        <tr>
            <td>{{$dataSiswa->nis}}</td>
            <td>{{$dataSiswa->nisn}}</td>
            <td>{{$dataSiswa->nama}}</td>
            <td>{{$dataSiswa->nama_kelas}}</td>
            <td>{{$dataSiswa->alamat}}</td>
            <td>{{$dataSiswa->nominal}}</td>
            <td>{{$dataSiswa->no_tlp}}</td>
            <td>
            <a href="/siswabayar/{{ $dataSiswa->nisn }}">Bayar{{ $dataSiswa->nisn }}</a>
            </td>
        </tr>
        @endforeach
    </table>

</body>
</html>

