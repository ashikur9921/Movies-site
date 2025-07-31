<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="4-tab">
					<div class="row">
						<!-- card -->
                        @foreach ($animes as $movie )
						<div class="col-6 col-sm-4 col-lg-3 col-xl-2">
							<div class="card bg-dark">
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
						</div>
						@endforeach
						</div>

						<!-- end card -->
					
					<div class="col-12">
					<a href="{{ route('animes') }}" class="section__btn">Show more</a>
				</div>
				</div>