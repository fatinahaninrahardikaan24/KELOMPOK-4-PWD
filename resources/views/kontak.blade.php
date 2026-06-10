@extends('layouts.app')

@section('content')

<section class="hero">
    <h1>Kontak MiseEdu Hub</h1>

    <p>
        Hubungi kami untuk informasi program, kolaborasi,
        maupun pertanyaan seputar layanan MiseEdu Hub.
    </p>
</section>

<div class="contact-container">

    <div class="info-card">

        <h2>Informasi Kontak</h2>

        <p><strong>Email:</strong> hello@miseeduhub.com</p>
        <p><strong>Telepon:</strong> +62 812-3456-7890</p>
        <p><strong>Alamat:</strong> Jakarta, Indonesia</p>

    </div>

    <div class="info-card">

        <h2>Kirim Pesan</h2>

        <form>
            <input type="text" placeholder="Nama Lengkap">
            <input type="email" placeholder="Email">
            <textarea rows="5" placeholder="Tulis pesan Anda"></textarea>
            <button type="submit">Kirim Pesan</button>
        </form>

    </div>

</div>

@endsection