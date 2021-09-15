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
				<h2 class="title"> Projects <span class="circle"></span> </h2>
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
			
				<div class="title-resources">
					<h4> Kuongeza Thamani </h4>
					<a href="#"><button class="btn btn-st btn-st-primary"> Read more </button></a>
				</div>
			</div>
			<div class="col-lg-4" style="background-image: url('img/slide1.jpg');">
				<span class="overlay-inner"></span>
				
				<div class="title-resources">
					<h4> Sustainable Projects Management </h4>
					<a href="#"><button class="btn btn-st btn-st-primary"> Read more </button></a>
				</div>
			</div>
			<div class="col-lg-4" style="background-image: url('img/slide1.jpg');">
				<span class="overlay-inner"></span>
				
				<div class="title-resources">
					<h4> Project Name </h4>
					<a href="#"><button class="btn btn-st btn-st-primary"> Read more </button></a>
				</div>
			</div>
		</div>
	</div>

</section>


@endsection