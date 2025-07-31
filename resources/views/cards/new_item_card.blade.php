	<div class="col-12">
					<div class="owl-carousel home__carousel">
						@foreach($latestmovies as $movie)
						<div class="item">
							<!-- card -->
							<div class="card bg-dark card--big">
								<div class="card__cover">
									<img src="{{ $movie->movie_image_link }}" alt="">
									<a href="{{ route('details', $movie->id) }}" class="card__play">
										<i class="icon ion-ios-play"></i>
									</a>
								</div>
								<div class="card__content">
									<h3 class="card__title"><a href="{{ route('details', $movie->id) }}">{{ $movie->name }}</a></h3>
									<span class="card__category">
										<a href="#">{{ $movie->type }}</a>

									</span>
									<span class="card__rate"><i class="icon ion-ios-star"></i>{{ $movie->rating }}</span>
								</div>
							</div>
							<!-- end card -->
						</div>
						@endforeach
					</div>
				</div>
			