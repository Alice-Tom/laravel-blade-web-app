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
            @foreach($blogs as $blog)


                     <div class="col-lg-4 blog-item-to-click" style="background-image: url('{{$blog->cover}}'); margin-bottom: 16px!important;">
                        <span class="overlay-inner"></span>
                        <div class="col-top-item-type">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.3301L9 16.6603L9 8L15 12.3301Z" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="title-resources">
                            <h4> {{$blog->title}}</h4>
                            <a href="{{'view-blog/' . $blog->id }}"><button class="btn btn-st btn-st-primary button-read-more"> Read More </button></a>
                        </div>
                    </div>



            @endforeach


		</div>
	</div>

</section>


@endsection
