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
				<h2 class="title"> The Team <span class="circle"></span> </h2>
			</div>
		</div>
	</div>
</div>

<!-- Page Content
================================================== -->

<section class="container-lg-stag">

	<div class="center-cols train-section">
		<div class="row mt-5 mb-5">
            <div class="col-lg-4">
                <img src="url('img/slide1.jpg')" style="width: 100%">
                <h4> John Doe </h4>
                <label> Research Expert </label>
                <hr>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium aliquam repellendus quo, neque in accusamus? Sequi maiores veritatis alias neque eos nisi dolor. Nemo soluta sit sunt laudantium doloribus ratione. </p>
			</div>
			<div class="col-lg-4">
                <img src="url('img/slide1.jpg')" style="width: 100%">
                <h4> John Doe </h4>
                <label> Research Expert </label>
                <hr>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium aliquam repellendus quo, neque in accusamus? Sequi maiores veritatis alias neque eos nisi dolor. Nemo soluta sit sunt laudantium doloribus ratione. </p>
			</div>
			<div class="col-lg-4">
                <img src="url('img/slide1.jpg')" style="width: 100%">
                <h4> John Doe </h4>
                <label> Research Expert </label>
                <hr>
                <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium aliquam repellendus quo, neque in accusamus? Sequi maiores veritatis alias neque eos nisi dolor. Nemo soluta sit sunt laudantium doloribus ratione. </p>
			</div>
		</div>
	</div>

</section>


@endsection