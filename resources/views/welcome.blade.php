@extends('layout.app')
@section('title', "Welcome to Movie Bazzer")

@section('content')
	<!-- home -->
	<section class="home">
		<!-- home bg -->
		<div class="owl-carousel home__bg">
			<div class="item home__cover" data-bg="img/home/home__bg.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg2.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg3.jpg"></div>
			<div class="item home__cover" data-bg="img/home/home__bg4.jpg"></div>
		</div>
		<!-- end home bg -->

		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1 class="home__title"><b>NEW ITEMS</b> OF THIS SEASON</h1>

					<button class="home__nav home__nav--prev" type="button">
						<i class="icon ion-ios-arrow-round-back"></i>
					</button>
					<button class="home__nav home__nav--next" type="button">
						<i class="icon ion-ios-arrow-round-forward"></i>
					</button>
				</div>

			@include('cards.new_item_card')
	</section>
	<!-- end home -->

	<!-- content -->
	<section class="content">
		<div class="content__head">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- content title -->
						<h2 class="content__title">New items</h2>
						<!-- end content title -->

						<!-- content tabs nav -->
						<ul class="nav nav-tabs content__tabs" id="content__tabs" role="tablist">
						

							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">MOVIES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a>
							</li>

							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">ANIME</a>
							</li>
						</ul>
						<!-- end content tabs nav -->

						<!-- content mobile tabs nav -->
						<div class="content__mobile-tabs" id="content__mobile-tabs">
							<div class="content__mobile-tabs-btn dropdown-toggle" role="navigation" id="mobile-tabs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<input type="button" value="New items">
								<span></span>
							</div>

							<div class="content__mobile-tabs-menu dropdown-menu" aria-labelledby="mobile-tabs">
								<ul class="nav nav-tabs" role="tablist">
								

									<li class="nav-item"><a class="nav-link" id="2-tab" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="true">MOVIES</a></li>

									<li class="nav-item"><a class="nav-link" id="3-tab" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">TV SERIES</a></li>

									<li class="nav-item"><a class="nav-link" id="4-tab" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">ANIME</a></li>
								</ul>
							</div>
						</div>
						<!-- end content mobile tabs nav -->
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<!-- content tabs -->
			<div class="tab-content" id="myTabContent">
				
			@include('cards.movies_card')

			@include('cards.series_card')

			@include('cards.anime_card')	

				

				
			</div>
			<!-- end content tabs -->
		</div>
	</section>
	<!-- end content -->



	<!-- partners -->
	<section class="section">
		<div class="container">
			<div class="row">
				<!-- section title -->
				<div class="col-12">
					<h2 class="section__title section__title--no-margin">Our Partners</h2>
				</div>
				<!-- end section title -->

				<!-- section text -->
				<div class="col-12">
					<p class="section__text section__text--last-with-margin">It is a long <b>established</b> fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using.</p>
				</div>
				<!-- end section text -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="{{asset ('allphotos/img/partners/themeforest-light-background.png')}}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="{{asset ('allphotos/img/partners/audiojungle-light-background.png')}}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="{{asset ('allphotos/img/partners/codecanyon-light-background.png')}}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="{{asset ('allphotos/img/partners/photodune-light-background.png')}}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="{{asset ('allphotos/img/partners/activeden-light-background.png')}}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->

				<!-- partner -->
				<div class="col-6 col-sm-4 col-md-3 col-lg-2">
					<a href="#" class="partner">
						<img src="{{asset ('allphotos/img/partners/3docean-light-background.png')}}" alt="" class="partner__img">
					</a>
				</div>
				<!-- end partner -->
			</div>
		</div>
	</section>
	<!-- end partners -->
@endsection