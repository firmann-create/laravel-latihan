<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Latihan Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar">
        <a class="brand" href="{{ route('home') }}">Latihan Laravel</a>
        <div class="menu">
            <a href="{{ route('mahasiswa.index') }}" class="{{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}">Mahasiswa</a>
            <a href="{{ route('kalkulator.segitiga') }}" class="{{ request()->routeIs('kalkulator.*') ? 'active' : '' }}">Kalkulator Segitiga</a>
        </div>
    </nav>

    <main class="container">
        @yield('content')
    </main>

    <footer class="footer">&copy; {{ date('Y') }} Latihan Laravel</footer>
</body>
</html>
