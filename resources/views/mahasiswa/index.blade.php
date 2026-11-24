@extends('layouts.app')

@section('title', $judul)

@section('content')
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
                            <span class="badge {{ $m['gender'] === 'L' ? 'badge-l' : 'badge-p' }}">{{ $m['gender'] }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
