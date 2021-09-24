<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title> Dashboard >Solutions Tag - Better Tomorrow </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- CSS
================================================== -->
<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
<link href="{{ asset('css/orange.css') }}" rel="stylesheet">
<link href="{{ asset('css/icons.css') }}" rel="stylesheet">
<link href="{{ asset('slick/slick.css') }}" rel="stylesheet">
<link href="{{ asset('slick/slick-theme.css') }}" rel="stylesheet">
<link href="{{ asset('css/datepicker.css') }}" rel="stylesheet">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
<!--<link href="{{ asset('font/stylesheet.css') }}" rel="stylesheet">-->


<!-- Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://res.cloudinary.com/veseylab/raw/upload/v1597754760/magicmouse/magic-mouse-1.0.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body class="gray">

<!-- Wrapper -->
<div id="wrapper">

<body>

	<section id="app">

		<header id="header-container" class="fullwidth dashboard-header not-sticky">
			<div id="header">
				<div class="container">

					<!-- Left Side Content -->
					<div class="left-side">

						<!-- Logo -->
						<div id="logo">
								@include('includes.logo')
						</div>

						<!-- Main Navigation -->
{{--						<nav id="navigation">--}}
{{--							<ul id="responsive">--}}
{{--                                @include('includes.menu')--}}
{{--							</ul>--}}
{{--						</nav>--}}

						<div class="clearfix"></div>
						<!-- Main Navigation / End -->

					</div>
					<!-- Left Side Content / End -->


					<!-- Right Side Content / End -->
					<div class="right-side">

						<!--  User Notifications -->
						<div class="header-widget hide-on-mobile">

							<!-- Notifications -->
							<div class="header-notifications">

								<!-- Trigger -->
								<div class="header-notifications-trigger">
									<a href="#"><i class="icon-feather-bell"></i><span>{{auth::user()->unreadNotifications->count()}}</span></a>
								</div>

								<!-- Dropdown -->
								@if(auth::user()->unreadNotifications->count()!==0)
								<div class="header-notifications-dropdown">

									<div class="header-notifications-headline">
										<h4>Notifications</h4>
										{{-- <button class="mark-as-read ripple-effect-dark" title="Mark all as read" data-tippy-placement="left">
											<i class="icon-feather-check-square"></i>
										</button> --}}
									</div>

									<div class="header-notifications-content">
										<div class="header-notifications-scroll" data-simplebar>
											<ul>
												@include('dashboard.notifications.header');
											</ul>
										</div>
									</div>

								</div>
								@endif

							</div>

						</div>
						<!--  User Notifications / End -->

						<!-- User Menu -->
						<div class="header-widget">

							<!-- Messages -->
							<div class="header-notifications user-menu">
								<div class="header-notifications-trigger">
									<a href="#"><div class="user-avatar status-online"><img src="{{ asset(auth::user()->avator??'img/members/avator.png') }}" alt=""></div></a>
								</div>

								<!-- Dropdown -->
								<div class="header-notifications-dropdown">

									<!-- User Status -->
									<div class="user-status">

										<!-- User Name / Avatar -->
										<div class="user-details">
											<div class="user-name">
												{{ auth::user()->firstname }} {{ auth::user()->lastname }}<span class="text-uppercase">{{ auth::user()->account_type }}</span>
											</div>
										</div>

								</div>

								<ul class="user-menu-small-nav">
									@include('includes.userprofilemenu')
								</ul>

								</div>
							</div>

						</div>
						<!-- User Menu / End -->

						<!-- Mobile Navigation Button -->
						<span class="mmenu-trigger">
							<button class="hamburger hamburger--collapse" type="button">
								<span class="hamburger-box">
									<span class="hamburger-inner"></span>
								</span>
							</button>
						</span>

					</div>
					<!-- Right Side Content / End -->

				</div>
			</div>
		</header>

		<main class="">
			@yield('content')
		</main>



<!-- Scripts
================================================== -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('js/mmenu.min.js') }}" defer></script>
<script src="{{ asset('js/tippy.all.min.js') }}" defer></script>
<script src="{{ asset('js/simplebar.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-slider.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}" defer></script>
<script src="{{ asset('js/snackbar.js') }}" defer></script>
<script src="{{ asset('js/clipboard.min.js') }}" defer></script>
<script src="{{ asset('js/counterup.min.js') }}" defer></script>
<script src="{{ asset('js/magnific-popup.min.js') }}" defer></script>
<script src="{{ asset('slick/slick.min.js') }}" defer></script>
<script src="{{ asset('js/datepicker.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>


<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() {
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	});
});
</script>

<!-- Chart.js // documentation: http://www.chartjs.org/docs/latest/ -->
<script src="js/chart.min.js"></script>
<script>
	Chart.defaults.global.defaultFontFamily = "Nunito";
	Chart.defaults.global.defaultFontColor = '#888';
	Chart.defaults.global.defaultFontSize = '14';

	var ctx = document.getElementById('chart').getContext('2d');

	var chart = new Chart(ctx, {
		type: 'line',

		// The data for our dataset
		data: {
			labels: ["January", "February", "March", "April", "May", "June"],
			// Information about the dataset
	   		datasets: [{
				label: "Views",
				backgroundColor: 'rgba(42,65,232,0.08)',
				borderColor: '#2a41e8',
				borderWidth: "3",
				data: [196,132,215,362,210,252],
				pointRadius: 5,
				pointHoverRadius:5,
				pointHitRadius: 10,
				pointBackgroundColor: "#fff",
				pointHoverBackgroundColor: "#fff",
				pointBorderWidth: "2",
			}]
		},

		// Configuration options
		options: {

		    layout: {
		      padding: 10,
		  	},

			legend: { display: false },
			title:  { display: false },

			scales: {
				yAxes: [{
					scaleLabel: {
						display: false
					},
					gridLines: {
						 borderDash: [6, 10],
						 color: "#d8d8d8",
						 lineWidth: 1,
	            	},
				}],
				xAxes: [{
					scaleLabel: { display: false },
					gridLines:  { display: false },
				}],
			},

		    tooltips: {
		      backgroundColor: '#333',
		      titleFontSize: 13,
		      titleFontColor: '#fff',
		      bodyFontColor: '#fff',
		      bodyFontSize: 13,
		      displayColors: false,
		      xPadding: 10,
		      yPadding: 10,
		      intersect: false
		    }
		},


});

</script>

<script>
	$('[data-toggle="datepicker"]').datepicker();
</script>
</body>
</html>
