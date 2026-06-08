@extends('layouts.app')

@section('content')

<section class="hero">
    <h1>Program Beasiswa IAST</h1>
    <p>
        Halaman khusus informasi beasiswa bagi mahasiswa, 
        dosen, dan peneliti di lingkungan IAST Institute.
    </p>
</section>

<section class="about" style="padding: 20px;">
    <h2>Daftar Beasiswa Tersedia</h2>
    <p>Berikut adalah daftar program beasiswa yang sedang dibuka:</p>
    
    <ul>
        <li><strong>Beasiswa Prestasi Akademik:</strong> Untuk mahasiswa dengan IPK di atas 3.5.</li>
        <li><strong>Beasiswa Riset:</strong> Dukungan dana bagi penelitian skripsi/tugas akhir.</li>
    </ul>
</section>

@endsection