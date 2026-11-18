@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <div class="card">
        <h1>Latihan Laravel</h1>
        <p class="muted">Pilih halaman yang ingin dibuka:</p>
        <div class="actions">
            <a class="btn" href="{{ route('mahasiswa.index') }}">Daftar Mahasiswa</a>
            <a class="btn btn-outline" href="{{ route('kalkulator.segitiga') }}">Kalkulator Segitiga</a>
        </div>
    </div>
@endsection
