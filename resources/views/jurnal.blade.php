@extends('layouts.app')

@section('content')

<section class="about">
    <h2>Daftar Jurnal</h2>
</section>

<div class="table-container jurnal-page">

<table>
    <tr>
        <th>Judul</th>
        <th>Tahun</th>
        <th>Aksi</th>
    </tr>

    <tr>
        <td>Machine Learning Research</td>
        <td>2025</td>
        <td><button>Download</button></td>
    </tr>

    <tr>
        <td>Cyber Security Study</td>
        <td>2024</td>
        <td><button>Download</button></td>
    </tr>

</table>

</div>

@endsection