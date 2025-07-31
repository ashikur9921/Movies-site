@extends('layout.app')
@section('title', "Upload Your Movie")

@section('content')

  <style>
  
  body {
  background-color: #000;
  color: #fff;
  }

  .form-container {
  max-width: 600px;
  margin: 100px auto;
  padding: 30px;
  background-color: #111;
  border-radius: 10px;
  box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
  }

  .text-center {
  text-align: center;
  align-items: center;
  }

  #btn {
  display: flex;
  justify-content: center;
  }

  .form-control {
  background-color: #222;
  color: #fff;
  border: 1px solid #444;
  }

  .form-control:focus {
  background-color: #333;
  color: #fff;
  border-color: #ff00ff;
  box-shadow: 0 0 5px rgba(255, 0, 255, 0.5);
  

  }



  </style>
  </head>

  <body>

  <div class="form-container ">
  @if (session('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

  @endif
  <h2 class="mb-4 text-center ">Movie Details</h2>
  <form action="{{ route('upload.store') }}" method="POST">
    @csrf
    <!-- 1. Name -->
    <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Enter movie name" required>
    </div>

    <!-- 2. Type -->
    <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control" id="type" name="type" placeholder="e.g. Action, Drama" required>
    </div>
    <!-- 3. category -->
    <div class="mb-3">
    <label for="type" class="form-label">Category</label>
    <input type="text" class="form-control" id="type" name="type" placeholder="e.g. Action, Drama" required>
    </div>

    <!-- 3. Rating -->
    <div class="mb-3">
    <label for="rating" class="form-label">Rating</label>
    <input type="number" step="0.1" min="0" max="10" class="form-control" id="rating" name="rating"
    placeholder="e.g. 8.5" required>
    </div>

    <!-- 4. Description -->
    <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"
    placeholder="Write a short description..." required></textarea>
    </div>

    <!-- 5. Download Link -->
    <div class="mb-3">
    <label for="download_link" class="form-label">Download Link</label>
    <input type="url" class="form-control" id="download_link" name="download_link"
    placeholder="http://example.com/download" required>
    </div>

    <!-- 6. Movie Image Link -->
    <div class="mb-3">
    <label for="movie_image_link" class="form-label">Movie Image Link</label>
    <input type="url" class="form-control" id="image_link" name="image_link"
    placeholder="http://example.com/image.jpg" required>
    </div>

    <!-- 7. Watch link -->
    <div class="mb-3">
    <label for="watch_link" class="form-label">Watch Link</label>
    <input type="url" class="form-control" id="watch_link" name="watch_link" placeholder="http://example.com/watch">
    </div>
    <!-- 8. TRAILERS link -->
    <div class="mb-3">
    <label for="trailer" class="form-label">TRAILER</label>
    <input type="url" class="form-control" id="trailer" name="trailer" placeholder="http://example.com/trailer">
    </div>
    <!-- 9. Category -->

    <div class="form-group">
  <h6>Category :</h6>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="categori" value="movie" id="movie">
    <label class="form-check-label" for="movie">Movie</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="categori" value="series" id="series">
    <label class="form-check-label" for="series">Series</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="categori" value="anime" id="anime">
    <label class="form-check-label" for="anime">Anime</label>
  </div>
</div>

    <!-- Submit Button -->
    <div id="btn" class="flex justify-center">
    <button type="submit" class="header__sign-in text-white px-4 py-2">Submit</button>
    </div>
  </form>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>

  </html>
@endsection