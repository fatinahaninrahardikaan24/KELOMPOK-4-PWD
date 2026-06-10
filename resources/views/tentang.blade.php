@extends('layouts.app')

@section('content')

<section class="hero">

    <h1>Welcome to IAST Institute</h1>

    <p>
        Pusat informasi organisasi, jurnal ilmiah,
        publikasi akademik, beasiswa, dana riset,
        dan katalog buku digital.
    </p>

    <a href="/publikasi" class="btn">
        Explore Now
    </a>

</section>

<section class="about">

    <h2>Tentang IAST Institute</h2>

    <p>
        IAST Institute merupakan pusat informasi akademik
        yang menyediakan berbagai layanan seperti jurnal,
        publikasi ilmiah, informasi beasiswa, dana riset,
        katalog buku, serta berita akademik yang dapat
        diakses oleh mahasiswa, dosen, dan peneliti.
    </p>

</section>

<section class="card-section">

    <div class="card">

        <h3>📚 Jurnal Ilmiah</h3>

        <p>
            Temukan berbagai jurnal nasional maupun internasional.
        </p>

    </div>

    <div class="card">

        <h3>📰 Publikasi</h3>

        <p>
            Lihat artikel dan berita akademik terbaru.
        </p>

    </div>

    <div class="card">

        <h3>🎓 Beasiswa</h3>

        <p>
            Informasi beasiswa untuk mahasiswa S1, S2, dan S3.
        </p>

    </div>

    <div class="card">

        <h3>🔬 Dana Riset</h3>

        <p>
            Peluang pendanaan penelitian bagi akademisi.
        </p>

    </div>

</section>

@endsection