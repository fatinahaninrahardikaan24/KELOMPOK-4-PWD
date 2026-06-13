@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Program</h1>
    <form action="{{ route('programs.update', $program->id) }}" method="POST">
        @csrf
        @method('PUT') <div class="form-group">
            <label>Judul:</label>
            <input type="text" name="title" class="form-control" value="{{ $program->title }}" required>
        </div>

        <div class="form-group">
            <label>Deskripsi:</label>
            <textarea name="description" class="form-control" required>{{ $program->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Program</button>
    </form>
</div>
@endsection