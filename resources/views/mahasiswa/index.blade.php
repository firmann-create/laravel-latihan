<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="card">
        <h1>{{ $judul }}</h1>
        <table>
            <thead>
                <tr><th>Nama</th><th>Alamat</th><th>Gender</th></tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $m)
                <tr>
                    <td>{{ $m['nama'] }}</td>
                    <td>{{ $m['alamat'] }}</td>
                    <td>{{ $m['gender'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>