<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mhs['nama'] }}</td>
                <td>{{ $mhs['nim'] }}</td>
                <td>{{ $mhs['prodi'] }}</td>
                <td>
                    <a href="#">Detail</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
