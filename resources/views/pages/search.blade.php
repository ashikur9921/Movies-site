@extends('layout.app')

@section('content')
 <section class="search">
    <div class="container">
        <div class="row mt-5">
            @forelse ($movies as $movie)
                <div class="col-6 col-sm-4 col-md-4 col-lg-2 mb-4 mt-5">
                    <div class="card bg-dark h-100">
                        <div class="card__cover">
                            <img src="{{ $movie->movie_image_link }}" alt="{{ $movie->name }}" class="img-fluid">
                            <a href="{{ route('details', $movie->id) }}" class="card__play">
                                <i class="icon ion-ios-play"></i>
                            </a>
                        </div>
                        <div class="card__content p-2">
                            <h3 class="card__title">
                                <a href="{{ route('details', $movie->id) }}">{{ $movie->name }}</a>
                            </h3>
                            <span class="card__category">
                                <a href="#">{{ $movie->type }}</a>
                            </span>
                            <span class="card__rate">
                                <i class="icon ion-ios-star"></i>{{ $movie->rating }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-white">No movies found.</p>
            @endforelse
        </div>
    </div>

</section>
@endsection