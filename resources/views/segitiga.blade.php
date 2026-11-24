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

        <form action="/kalkulator/segitiga" method="POST">
            @csrf
            <label>Alas</label>
            <input type="number" step="any" name="alas" value="{{ old('alas', $alas ?? '') }}">
            @error('alas') <p class="error">{{ $message }}</p> @enderror

            <label>Tinggi</label>
            <input type="number" step="any" name="tinggi" value="{{ old('tinggi', $tinggi ?? '') }}">
            @error('tinggi') <p class="error">{{ $message }}</p> @enderror

            <button type="submit">Hitung</button>
        </form>

        @isset($luas)
        <div class="result">
            Luas = ½ × {{ $alas }} × {{ $tinggi }} = <strong>{{ $luas }}</strong>
        </div>
        @endisset
    </div>
</body>
</html>