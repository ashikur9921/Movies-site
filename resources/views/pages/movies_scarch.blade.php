
@section('title', "Movies List")

@section('content')
<head>
  <meta charset="UTF-8">
  <title>Upload Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="card shadow p-4">
  <div class="card-body d-flex justify-content-between mb-3">  
  <h4 class="mb-3">Uploaded Data</h4>
   <form action="{{ route('moviescarch') }}" class="header__search" method="GET">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="header__search-content">
            <input type="text" name="query" placeholder="Search for a movie, TV Series that you are looking for" required>
            <button class="btn btn-primary" type="submit">search</button>
          </div>
        </div>
      </div>
    </div>
  </form>

  </div>
    <table class="table table-bordered">
      <thead>
        <tr>
            <th>#</th>
          <th>ID</th>
          <th>type</th>
          <th>name</th>
        <th>category</th>
            <th>rating</th>
            <th>description</th>
            <th>download_link</th>
            <th>watch_link</th>
            <th>movie_image_link</th>
            <th>trailer</th>
            

        </tr>
      </thead>
      <tbody>
        @forelse($movies as $movie)
          <tr>
 <td class="d-flex gap-2">
              <!-- Edit Button -->
              <a href="{{ route('movie.edit', $movie->id) }}" class="btn btn-warning btn-sm">Edit</a>

              <!-- Delete Button -->
              <form action="{{ route('movie.destroy', $movie->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>
            </td>


            <td>{{ $movie->id }}</td>
            <td>{{ $movie->type }}</td>
            <td>{{ $movie->name }}</td>
            <td>{{ $movie->category }}</td>
            <td>{{ $movie->rating }}</td>
            <td>{{ $movie->description }}</td>
            <td>{{ $movie->download_link }}</td>
            <td>{{ $movie->watch_link }}</td>
             <td>{{ $movie->movie_image_link }}</td>
            <td>{{ $movie->trailer}}</td>
           
         
          </tr>
        @empty
          <tr>
            <td colspan="3" class="text-center">No data found</td>
          </tr>
        @endforelse
      </tbody>
    </table>

    <div class="col-12 justify-content-center ">
							<div class="paginator text-center mt-4 j">
								{{ $movies->links() }}
							</div>
						</div>
  </div>
</div>

