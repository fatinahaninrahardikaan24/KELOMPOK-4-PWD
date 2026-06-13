@extends('layouts.app')

@section('content')

<div class="contact-container">

    <h1 style="text-align:center; margin-bottom:25px; color:#0b3d91;">
        Tambah Program
    </h1>

    <form action="{{ route('programs.store') }}" method="POST">
        @csrf

        <label>Judul Program</label>
        <input type="text" name="title" required>

        <label>Deskripsi</label>
        <textarea name="description" required></textarea>

        <button type="submit">
            Simpan Program
        </button>
    </form>

</div>

@endsection