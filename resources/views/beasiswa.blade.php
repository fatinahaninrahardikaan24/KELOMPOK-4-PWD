@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="p-5 mb-4 bg-light rounded-3 shadow">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold text-primary">Program Beasiswa IAST</h1>
            <p class="col-md-8 fs-4">Halaman khusus informasi beasiswa bagi mahasiswa, dosen, dan peneliti di lingkungan IAST Institute.</p>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Beasiswa Prestasi</h2>
                <p>Untuk mahasiswa dengan IPK di atas 3.5.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                <h2>Beasiswa Riset</h2>
                <p>Dukungan dana bagi penelitian skripsi/tugas akhir.</p>
            </div>
        </div>
    </div>
</div>
@endsection
