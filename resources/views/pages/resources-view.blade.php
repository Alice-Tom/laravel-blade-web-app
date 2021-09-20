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

	<div class="row m-0 p40 resorces-header">
		<h2 class="title"> {{$blog->title}} </h2>
	</div>

	<div class="row m-0">
		<img src="{{URL::asset($blog->cover)}}" role="img" class="img-page-main" alt="">
	</div>

	<div class="row m40">
	    <p>
            {{$blog->description}}
        </p>
	</div>

</section>


@endsection
