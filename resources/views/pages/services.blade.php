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
				<h2 class="title"> Services <span class="circle"></span> </h2>
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

	<div class="center-cols train-section services-solutionstag">
		<div class="row w-100 m200">
			<div class="col-lg-6">
				<div class="training-img-container">
					<img src="{{ asset('img/slide1.jpg')}}" class="leftimage" role="img" title="local staff" alt="local staff solutions tag" />
				</div>
			</div>
			<div class="col-lg-6">
				<h2 class="title_01"> Upstream </h2>
				<p class="m40">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem.
				</p>
				<a href="{{ url('service-parent')}}"> <button class="btn btn-st btn-st-primary light"> Read more </button> </a>
			</div>
		</div>
		<div class="row w-100 m200">
			<div class="col-lg-6">
				<div class="training-img-container">
					<img src="{{ asset('img/slide1.jpg')}}" class="leftimage" role="img" title="local staff" alt="local staff solutions tag" />
				</div>
			</div>
			<div class="col-lg-6">
				<h2 class="title_01"> Downstream </h2>
				<p class="m40">
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem.
				</p>
				<a href="{{ url('service-parent')}}"> <button class="btn btn-st btn-st-primary light"> Read more </button> </a>
			</div>
		</div>
	</div>

</section>


@endsection