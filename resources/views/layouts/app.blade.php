<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiseEdu Hub</title>
</head>
<body>

<header>
    <div class="container">
        <h2>MiseEdu Hub</h2>

        <nav>
            <a href="/">Beranda</a>
            <a href="/publikasi">Artikel</a>
            <a href="/jurnal">Program</a>
            <a href="/beasiswa">Peluang</a>
            <a href="/tentang">Tentang Kami</a>
            <a href="/kontak">Kontak</a>
        </nav>
    </div>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>©2026 MiseEdu Hub</p>
</footer>

</body>
</html>