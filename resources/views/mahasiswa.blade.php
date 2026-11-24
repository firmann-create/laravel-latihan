<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar">
        <a href="/" class="brand">Latihan Laravel</a>
        <div class="menu">
            <a href="/daftar/mahasiswa" class="active">Mahasiswa</a>
            <a href="/kalkulator/segitiga">Kalkulator Segitiga</a>
        </div>
    </nav>

    <main class="container">
        <div class="card">
            <h1>{{ $judul }}</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th class="center">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswa as $m)
                    <tr>
                        <td>{{ $m['nama'] }}</td>
                        <td>{{ $m['alamat'] }}</td>
                        <td class="center">
                            <span class="badge {{ $m['gender'] == 'L' ? 'badge-l' : 'badge-p' }}">
                                {{ $m['gender'] }}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <footer class="footer">&copy; {{ date('Y') }} Latihan Laravel</footer>
</body>
</html>