
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

	<!-- CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="{{asset ('allphotos/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset ('allphotos/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset ('allphotos/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset ('allphotos/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset ('allphotos/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset ('allphotos/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset ('allphotos/css/plyr.css')}}">
	<link rel="stylesheet" href="{{asset ('allphotos/css/photoswipe.css')}}">
	<link rel="stylesheet" href="{{asset ('allphotos/css/default-skin.css')}}">
	<link rel="stylesheet" href="{{asset ('allphotos/css/main.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{asset('allphotos/img/favicon/favicon-96x96.png')}}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{asset('allphotos/img/favicon/favicon.svg')}}" />
<link rel="shortcut icon" href="{{asset('allphotos/img/favicon/favicon.ico')}}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('allphotos/img/favicon/apple-touch-icon.png')}}" />
<link rel="manifest" href="{{asset('allphotos/img/favicon/site.webmanifest')}}" />



	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>@yield('title')</title>
</head>
<body class="body">
	
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content">
							<!-- header logo -->
							<a href="{{ url('/') }}" class="header__logo">
								<img src="{{asset ('allphotos/img/logo.png')}}" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="header__nav-link" href="{{ url('/') }}" >Home</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuHome">
										<li><a href="index.html">Home slideshow bg</a></li>
										<li><a href="index2.html">Home static bg</a></li>
									</ul>
								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<li><a href="catalog1.html">Catalog Grid</a></li>
										<li><a href="catalog2.html">Catalog List</a></li>
										<li><a href="details1.html">Details Movie</a></li>
										<li><a href="details2.html">Details TV Series</a></li>
									</ul>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a href="pricing.html" class="header__nav-link">Pricing Plan</a>
								</li>

							

								<!-- dropdown -->
								<li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li><a href="about.html">About</a></li>
										<li><a href="signin.html">Sign In</a></li>
										<li><a href="signup.html">Sign Up</a></li>
										<li><a href="404.html">404 Page</a></li>
									</ul>
								</li>
								<!-- end dropdown -->
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth">
								<button class="header__search-btn" type="button">
									<i class="icon ion-ios-search"></i>
								</button>

								<a href="{{ route('signin.form') }}" class="header__sign-in">
									<i class="icon ion-ios-log-in"></i>
									<span>sign in</span>
								</a>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="{{ route('search') }}" class="header__search" method="GET">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" name="query" placeholder="Search for a movie, TV Series that you are looking for" required>

							<button type="submit">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
	</header>
	<!-- end header -->