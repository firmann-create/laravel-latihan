@extends('layouts.app')

@section('title', $judul)

@section('content')
    <div class="card card-narrow">
        <h1>{{ $judul }}</h1>
        <p class="muted">Rumus: Luas = &frac12; &times; alas &times; tinggi</p>

        <form method="POST" action="{{ route('kalkulator.segitiga.hitung') }}">
            @csrf

            <label for="alas">Alas</label>
            <input type="number" step="any" id="alas" name="alas"
                   value="{{ old('alas', $alas ?? '') }}" placeholder="Contoh: 10">
            @error('alas') <small class="error">{{ $message }}</small> @enderror

            <label for="tinggi">Tinggi</label>
            <input type="number" step="any" id="tinggi" name="tinggi"
                   value="{{ old('tinggi', $tinggi ?? '') }}" placeholder="Contoh: 6">
            @error('tinggi') <small class="error">{{ $message }}</small> @enderror

            <button type="submit" class="btn">Hitung Luas</button>
        </form>

        @isset($luas)
            <div class="result">
                <span>Luas segitiga</span>
                <strong>{{ rtrim(rtrim(number_format($luas, 2, ',', '.'), '0'), ',') }}</strong>
                <small>&frac12; &times; {{ $alas }} &times; {{ $tinggi }}</small>
            </div>
        @endisset
    </div>
@endsection
