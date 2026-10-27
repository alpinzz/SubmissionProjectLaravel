<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <table border='1'>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>IPK</th>
            <th>Aksi</th>
        </tr>
        @forelse ($data as $d)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d['nama'] }}</td>
                <td>{{ $d['nim'] }}</td>
                <td>
                    @if ($d['ipk'] > 3.5)
                        Cum Laude
                    @elseif ($d['ipk'] > 3.0)
                        Baik
                    @else
                        Perlu ditingkatkan
                    @endif
                </td>
                <td>
                    <a href="{{ route('mahasiswa.show', $d['nim']) }}">Detail</a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan='5'>Belum ada data.</td>
            </tr>
        @endforelse
    </table>
</body>

</html>
