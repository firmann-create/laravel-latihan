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
            <a href="/daftar/mahasiswa">Mahasiswa</a>
            <a href="/kalkulator/segitiga" class="active">Kalkulator Segitiga</a>
        </div>
    </nav>

    <main class="container">
        <div class="card card-narrow">
            <h1>{{ $judul }}</h1>
            <p class="muted">Rumus: Luas = ½ × alas × tinggi</p>

            <form action="/kalkulator/segitiga" method="POST">
                @csrf
                <label for="alas">Alas</label>
                <input type="number" step="any" id="alas" name="alas" value="{{ old('alas', $alas ?? '') }}">
                @error('alas') <span class="error">{{ $message }}</span> @enderror

                <label for="tinggi">Tinggi</label>
                <input type="number" step="any" id="tinggi" name="tinggi" value="{{ old('tinggi', $tinggi ?? '') }}">
                @error('tinggi') <span class="error">{{ $message }}</span> @enderror

                <div class="actions">
                    <button type="submit" class="btn">Hitung</button>
                    <a href="/kalkulator/segitiga" class="btn btn-outline">Reset</a>
                </div>
            </form>

            @isset($luas)
            <div class="result">
                <span>Hasil perhitungan</span>
                <strong>{{ $luas }}</strong>
                <small>½ × {{ $alas }} × {{ $tinggi }}</small>
            </div>
            @endisset
        </div>
    </main>

    <footer class="footer">&copy; {{ date('Y') }} Latihan Laravel</footer>
</body>