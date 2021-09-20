<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title> Solutions Tag - Better Tomorrow</title>

	<!-- Main -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('slick/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('slick/slick-theme.css') }}" rel="stylesheet">
	<!--<link href="{{ asset('font/stylesheet.css') }}" rel="stylesheet">-->


	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://res.cloudinary.com/veseylab/raw/upload/v1597754760/magicmouse/magic-mouse-1.0.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



	<!-- CDNs -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	@yield('styles_login_register')
</head>
<body>

	<section id="app">

		<header class="main-header bg-white">
			<div class="header container-fluid">
				<div class="header-inner-container">
					<nav class="main-nav-nav row">
						<div class="col-lg-2 col-6">
							<div class="logo-container">
								@include('includes.logo')
							</div>
						</div>
						<div class="col-lg-7 mobi-menu">
							<nav class="menu-navigation">
								<ul class="web-menu">
									@include('includes.menu')
								</ul>
							</nav>
						</div>
						<div class="col-lg-3 col-6">
							<ul class="menu-right">
								@include('includes.rightItems')
							</ul>
						</div>
				</div>
			</div>

		</header>

		<main class="stag_main">
			@yield('content')
		</main>

		<footer class="main-footer">
			<div class="container-lg-stag">
				<div class="row m-0 row-cols-1 text-center p40">
					<h1 class="title_01"> <span class="decor"> JOIN OUR NEWSLETTER </span>  </h1>
					<div class="form-subscribe">
						<form>
							<div class="form-group subscribe">
								<input type="email" class="form-control" placeholder="Add your email">
								<span class="go_icon"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" > <path d="M15.0378 6.34317L13.6269 7.76069L16.8972 11.0157L3.29211 11.0293L3.29413 13.0293L16.8619 13.0157L13.6467 16.2459L15.0643 17.6568L20.7079 11.9868L15.0378 6.34317Z" fill="currentColor" /></svg> </span>
							</div>
						</form>
					</div>
				</div>
				<div class="row m-0 p40">
					<div class="col-lg-5">
						<div class="row m-0 pb-3">
							<span class="titlefooter"> NEED HELP? </span>  </h1>
						</div>
						<div class="row m-0">
							<div class="col-lg-6">
								<ul class="footer-menu-1 footer-links">
									<li><a href="#"> HOME </a></li>
									<li><a href="#"> THE COMPANY </a></li>
									<li><a href="#"> SERVICES </a></li>
									<li><a href="#"> SOLUTIONS </a></li>
									<li><a href="#"> TRAINING  </a></li>
									<li><a href="#"> CONTACT US </a></li>
								</ul>
							</div>
							<div class="col-lg-6">
								<ul class="footer-menu-2 footer-links">
									<li><a href="#"> NEWS</a></li>
									<li><a href="#"> RESOURCES </a></li>
									<li><a href="#"> FAQ </a></li>
									<li><a href="/privacy-policy"> PRIVACY POLICY </a></li>
									<li><a href="#"> TERMS & CONDITIONS  </a></li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-3">
						<div class="row m-0 pb-3">
							<span class="titlefooter"> FOLLOW US </span>  </h1>
						</div>
						<div class="row m-0">
							<ul class="footer-social footer-links">
								<li><a href="#"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z" fill="currentColor"/></svg> @solutionstag </a></li>
								<li><a href="#"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M8 3C9.10457 3 10 3.89543 10 5V8H16C17.1046 8 18 8.89543 18 10C18 11.1046 17.1046 12 16 12H10V14C10 15.6569 11.3431 17 13 17H16C17.1046 17 18 17.8954 18 19C18 20.1046 17.1046 21 16 21H13C9.13401 21 6 17.866 6 14V5C6 3.89543 6.89543 3 8 3Z" fill="currentColor" /></svg> @solutionstag </a></li>
								<li><a href="#"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M5 7H19C19.5523 7 20 7.44771 20 8V16C20 16.5523 19.5523 17 19 17H5C4.44772 17 4 16.5523 4 16V8C4 7.44772 4.44772 7 5 7ZM2 8C2 6.34315 3.34315 5 5 5H19C20.6569 5 22 6.34315 22 8V16C22 17.6569 20.6569 19 19 19H5C3.34315 19 2 17.6569 2 16V8ZM10 9L14 12L10 15V9Z" fill="currentColor"/></svg> @solutionstag </a> </li>
							</ul>
						</div>
					</div>

					<div class="col-lg-4">
						<div class="row m-0 pb-3">
							<span class="titlefooter"> CONTACT US </span>  </h1>
						</div>
						<div class="row m-0">
							<p>Nasra Tower, 2nd Floor, Makamba Street <br/> Dar es salaam </p>
							<p> <label> CALL US </label><br />
								+255 746 371 371
							</p>
							<p> <label> EMAIL </label><br />
								info@solutionstag.co.tz
							</p>
						</div>
					</div>
				</div>

				<div class="row m-0 p40">
					<div class="footer-separator">
						<div class="relative">
							<span class="text-center">@2021 copywrite SolutionsTag Consulting Company Limited</span>

							<!--<div class="footer-img-container">
								<img src="{{ asset('img/logo/logo_white.png')}}" role="img" title="solutions tag white logo" alt="solutions tag logo" class="footer-logo">
							</div>-->
						</div>
					</div>
				</div>
			</div>
		</footer>

	</section>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1597754761/magicmouse/magic_mouse-1.0.js"></script>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/main.js') }}" defer></script>
	<script src="{{ asset('js/custom-js.js') }}" defer></script>
	<script src="{{ asset('slick/slick.min.js') }}" defer></script>

	<script type="text/javascript">
		options = {
		"cursorOuter": "circle-basic",
		"hoverEffect": "circle-move",
		"hoverItemMove": false,
		"defaultCursor": false,
		"outerWidth": 30,
		"outerHeight": 30
		};
		magicMouse(options);
	</script>

</body>
</html>
