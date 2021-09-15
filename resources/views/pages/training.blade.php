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
				<h2 class="title"> Training <span class="circle"></span> </h2>
			</div>
		</div>
	</div>
</div>

<!-- Page Content
================================================== -->
<section class="fullwidthbg bgprimary-main">
	<div class="container-lg-stag p200">
		<div class="row m-0">
			<div class="col-lg-4">
				<div class="title-big-icon">
					<i class="icon-line-awesome-question"></i>
					<h1> introduction </h1>
				</div>
			</div>
			<div class="col-lg-8">
				<p> Oil and gas sector requires fresh, innovative and disruptive minds that are motivated by the future rather than the present. The minds that are committed to present their ulttimate thoughts and providing the best solutions for the better tomorrow of the sector in Tanzania. </p>
			</div>
		</div>
	</div>
</section>

<section class="container-lg-stag">

	<div class="center-cols train-section">
		<div class="row w-100 pt-5 pb-5">
			<h2 class="title_01"><span class="decor"> TRAINING CALENDAR </span></h2>
		</div>
		<div class="row m-0 training-container">
			<!-- Training -->
			<div class="training-col">
				<a href="{{ url('view-training')}}">
					<div class="row m-0">
						<div class="col-lg-3">
							<img src="{{ asset('img/slide1.jpg')}}" class="event-img" role="img" title="local staff" alt="local staff solutions tag" />
						</div>
						<div class="col-lg-4">
							<div class="inner-containers">
								<div class="row">
									<h4 class="primary-title"> TRAINING SESSION TITLE </h4>
								</div>
								<div class="row m-0">
									<div class="col-lg-6">
										<h5> STARTS </h5>
										<label> May 6, 12:00 AM</label>
									</div>
									<div class="col-lg-6">
										<h5> ENDS </h5>
										<label> May 6, 12:00 AM</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 titles-faint">
							<h5 class="primary-title"> KARIMJEE HALL </h5>
							<span>
								<h5> TRAINERS </h5>
								<label> Solutions Tag Staff </label>
							</span>
						</div>
						<div class="col-lg-2">
							<button class="btn btn-st btn-st-primary light"> Book Now </button>
						</div>
					</div>
				</a>
			</div>
			<div class="training-col">
				<a href="{{ url('view-training')}}">
					<div class="row m-0">
						<div class="col-lg-3">
							<img src="{{ asset('img/slide1.jpg')}}" class="event-img" role="img" title="local staff" alt="local staff solutions tag" />
						</div>
						<div class="col-lg-4">
							<div class="inner-containers">
								<div class="row">
									<h4 class="primary-title"> TRAINING SESSION TITLE </h4>
								</div>
								<div class="row m-0">
									<div class="col-lg-6">
										<h5> STARTS </h5>
										<label> May 6, 12:00 AM</label>
									</div>
									<div class="col-lg-6">
										<h5> ENDS </h5>
										<label> May 6, 12:00 AM</label>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 titles-faint">
							<h5 class="primary-title"> KARIMJEE HALL </h5>
							<span>
								<h5> TRAINERS </h5>
								<label> Solutions Tag Staff </label>
							</span>
						</div>
						<div class="col-lg-2">
							<button class="btn btn-st btn-st-primary light"> Book Now </button>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>

</section>


@endsection