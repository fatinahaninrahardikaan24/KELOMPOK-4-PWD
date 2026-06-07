<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAST Institute</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <div class="container">
        <h2>IAST Institute</h2>

        <nav>
            <a href="/">Home</a>
            <a href="/publikasi">Publikasi</a>
            <a href="/jurnal">Jurnal</a>
            <a href="/beasiswa">Beasiswa</a>
            <a href="/kontak">Kontak</a>
        </nav>
    </div>
</header>

<main>

@yield('content')

</main>

<footer>

    <p>©2026 IAST Institute</p>

</footer>

</body>
</html>