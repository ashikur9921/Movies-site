@extends('layout.app')
@section('title', "Edit Movie")

@section('content')
<div class="container mt-5">
    <div class="card bg-dark text-light p-4">
        <h2 class="mb-4">Edit Movie</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('movie.update', $movies->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Movie Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $movies->name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Type</label>
                <input type="text" name="type" class="form-control" value="{{ old('type', $movies->type) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Movie Image Link</label>
                <input type="text" name="movie_image_link" class="form-control" value="{{ old('movie_image_link', $movies->movie_image_link) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Rating</label>
                <input type="number" name="rating" class="form-control" step="0.1" min="0" max="10" value="{{ old('rating', $movies->rating) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="4">{{ old('description', $movies->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Download Link</label>
                <input type="text" name="download_link" class="form-control" value="{{ old('download_link', $movies->download_link) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Watch Link</label>
                <input type="text" name="watch_link" class="form-control" value="{{ old('watch_link', $movies->watch_link) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Trailer</label>
                <input type="text" name="trailer" class="form-control" value="{{ old('trailer', $movies->trailer) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <input type="text" name="categori" class="form-control" value="{{ old('categori', $movies->categori) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Movie</button>
        <a href="{{ route('all') }}" class="btn btn-secondary">Back to List</a>
        </form>
    </div>
</div>
@endsection