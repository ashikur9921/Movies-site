<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="{{asset('allphotos/css/bootstrap-reboot.min.css')}}">
	<link rel="stylesheet" href="{{asset('allphotos/css/bootstrap-grid.min.css')}}">
	<link rel="stylesheet" href="{{asset('allphotos/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('allphotos/css/jquery.mCustomScrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('allphotos/css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('allphotos/css/ionicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('allphotos/css/plyr.css')}}">
	<link rel="stylesheet" href="{{asset('allphotos/css/photoswipe.css')}}">
	<link rel="stylesheet" href="{{asset('allphotos/css/default-skin.css')}}">
	<link rel="stylesheet" href="{{asset('allphotos/css/main.css')}}">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="{{asset('allphotos/img/favicon/favicon-96x96.png')}}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{asset('allphotos/img/favicon/favicon.svg')}}" />
<link rel="shortcut icon" href="{{asset('allphotos/img/favicon/favicon.ico')}}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('allphotos/img/favicon/apple-touch-icon.png')}}" />
<link rel="manifest" href="{{asset('allphotos/img/favicon/site.webmanifest')}}" />

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Signin Movie Bazzer</title>

</head>
<body class="body">

	<div class="sign section--bg" data-bg="{{asset('allphotos/img/section/section.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="{{ route('signin.store') }}" method="POST" class="sign__form">
                            @csrf
							<a href="index.html" class="sign__logo">
								<img src="{{asset('allphotos/img/logo.png')}}" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email" name="email" required>
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password"   name="password" required>
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
							
							<button class="sign__btn" type="submit">Sign in</button>

							<span class="sign__text">Don't have an account? <a href="signup.html">Sign up!</a></span>

							<span class="sign__text"><a href="#">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="{{asset('allphotos/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('allphotos/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('allphotos/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('allphotos/js/jquery.mousewheel.min.js')}}"></script>
	<script src="{{asset('allphotos/js/jquery.mCustomScrollbar.min.js')}}"></script>
	<script src="{{asset('allphotos/js/wNumb.js')}}"></script>
	<script src="{{asset('allphotos/js/nouislider.min.js')}}"></script>
	<script src="{{asset('allphotos/js/plyr.min.js')}}"></script>
	<script src="{{asset('allphotos/js/jquery.morelines.min.js')}}"></script>
	<script src="{{asset('allphotos/js/photoswipe.min.js')}}"></script>
	<script src="{{asset('allphotos/js/photoswipe-ui-default.min.js')}}"></script>
	<script src="{{asset('allphotos/js/main.js')}}"></script>
</body>

</html>