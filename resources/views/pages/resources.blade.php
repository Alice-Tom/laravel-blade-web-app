@extends('layouts.app')
@section('styles_login_register')
<link href="{{ asset('css/icons.css') }}" rel="stylesheet">
<link href="{{ asset('css/orange.css') }}" rel="stylesheet">
@stop

@section('content')

<!-- Titlebar
================================================== -->
<div class="soltag-header-single" style="background-image: url('img/slide2.jpg');">
	<div class="container-lg-stag inner-title">
		<div class="row m-0 w-100">
			<div class="col-lg-6">
				<h2 class="title"> Resources <span class="circle"></span> </h2>
			</div>
		</div>
	</div>
</div>

<!-- Page Content
================================================== -->

<section class="container-lg-stag">

	<div class="center-cols train-section">
		<div class="row cols-resources m-0 mt-5 mb-5">
			<div class="col-lg-4" style="background-image: url('img/slide2.jpg');">
				<span class="overlay-inner"></span>
				<div class="col-top-item-type">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15 12.3301L9 16.6603L9 8L15 12.3301Z" fill="currentColor" />
					</svg>
				</div>
				<div class="title-resources">
					<h4> How to extract oil from the ground</h4>
					<a href="#"><button class="btn btn-st btn-st-primary"> Read more </button></a>
				</div>
			</div>
			<div class="col-lg-4" style="background-image: url('img/slide1.jpg');">
				<span class="overlay-inner"></span>
				<div class="col-top-item-type">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M6 6C6 5.44772 6.44772 5 7 5H17C17.5523 5 18 5.44772 18 6C18 6.55228 17.5523 7 17 7H7C6.44771 7 6 6.55228 6 6Z" fill="currentColor" />
						<path d="M6 10C6 9.44771 6.44772 9 7 9H17C17.5523 9 18 9.44771 18 10C18 10.5523 17.5523 11 17 11H7C6.44771 11 6 10.5523 6 10Z" fill="currentColor" />
						<path d="M7 13C6.44772 13 6 13.4477 6 14C6 14.5523 6.44771 15 7 15H17C17.5523 15 18 14.5523 18 14C18 13.4477 17.5523 13 17 13H7Z" fill="currentColor" />
						<path d="M6 18C6 17.4477 6.44772 17 7 17H11C11.5523 17 12 17.4477 12 18C12 18.5523 11.5523 19 11 19H7C6.44772 19 6 18.5523 6 18Z" fill="currentColor" />
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2 4C2 2.34315 3.34315 1 5 1H19C20.6569 1 22 2.34315 22 4V20C22 21.6569 20.6569 23 19 23H5C3.34315 23 2 21.6569 2 20V4ZM5 3H19C19.5523 3 20 3.44771 20 4V20C20 20.5523 19.5523 21 19 21H5C4.44772 21 4 20.5523 4 20V4C4 3.44772 4.44771 3 5 3Z" fill="currentColor" />
					</svg>
				</div>
				<div class="title-resources">
					<h4> How to extract oil from the ground</h4>
					<a href="#"><button class="btn btn-st btn-st-primary"> Read more </button></a>
				</div>
			</div>
			<div class="col-lg-4" style="background-image: url('img/slide1.jpg');">
				<span class="overlay-inner"></span>
				<div class="col-top-item-type">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M15 12.3301L9 16.6603L9 8L15 12.3301Z" fill="currentColor" />
					</svg>
				</div>
				<div class="title-resources">
					<h4> How to extract oil from the ground</h4>
					<a href="#"><button class="btn btn-st btn-st-primary"> Read more </button></a>
				</div>
			</div>
		</div>
	</div>

</section>


@endsection