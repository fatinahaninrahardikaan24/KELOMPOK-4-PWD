@extends('layouts.app')

@section('content')

<div class="program-page">
    <h1>Data Program</h1>

    <a href="{{ route('programs.create') }}" class="btn">
        Tambah Program
    </a>

    @foreach($programs as $p)

        <div class="card" style="margin-top:20px;">

            <h3>{{ $p->title }}</h3>

            <p>{{ $p->description }}</p>

            <a href="{{ route('programs.edit', $p->id) }}">
                Edit
            </a>

            <form action="{{ route('programs.destroy', $p->id) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus
                </button>
            </form>

        </div>

    @endforeach

</div>

@endsection