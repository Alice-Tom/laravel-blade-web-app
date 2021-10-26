@extends('layouts.app')
@section('styles_login_register')
<link href="{{ asset('css/icons.css') }}" rel="stylesheet">
<link href="{{ asset('css/orange.css') }}" rel="stylesheet">
@stop

@section('content')

<!-- Titlebar
================================================== -->
<div class="soltag-header-single" style="background-image: url('img/largeImg.jpg');">
	<div class="container-lg-stag inner-title">
		<div class="row m-0 w-100">
			<div class="col-lg-6">
				<h2 class="title "> The Company </h2>
			</div>
		</div>
	</div>
</div>

<!-- Page Content
================================================== -->
<section class="fullwidthbg bgprimary-main">
	<div class="container-lg-stag ">
        <div class="">
            <div class="row m-2 py-5">
                <div class="col-lg-4">
                    <div class="title-big-icon">
                        <i class="icon-line-awesome-question"></i>
                        <h1> {{$about->intro_title ?? ''}} </h1>
                    </div>
                </div>
                <div class="col-lg-8">
                    <p> {{$about->intro_description ?? 'Oil and gas sector requires fresh, innovative and disruptive minds that are motivated by the future rather than the present. The minds that are committed to present their ulttimate thoughts and providing the best solutions for the better tomorrow of the sector in Tanzania.'}} </p>
                </div>
            </div>
        </div>

	</div>
</section>

<section class="whoweare">
	<div class="forcetocenter">
		<div class="videolg-container container-lg-stag">
			<div class="video-container">
                {!! $about->intro_link ?? '' !!}
{{--				<video playsinline="playsinline" id="videostag" poster="{{ asset('img/stagvideo.jpg') }}">--}}
{{--					<source src="{{ asset('video/stagvideo.mp4') }}" type="video/mp4">--}}
{{--				</video>--}}
{{--				<a href="{{$about->intro_link ?? ''}}" target="_blank" class="btn-type-1 magic-hover magic-hover__square light-text">--}}
{{--						<span>--}}
{{--							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 12.3301L9 16.6603L9 8L15 12.3301Z" fill="currentColor" /></svg>--}}
{{--						</span>--}}
{{--						<label> <em> Watch our story </em></label>--}}
{{--				</a>--}}
			</div>
	</div>
	</div>
</section>

<section class="container-lg-stag">
	<div class="row m-0">
		<div class="whowearesegment m40">
			<h2 class="title_01 text-center"> WHO <span class=""> WE ARE </span> </h2>
			<div class="row m-0 p40">
				<p class="text-center">
					{{$about->who_are_we ?? 'We are integrated oil and gas company specialized in providing technical (engineering, geophysical, consultance) services and trainings. We are motivated by the better oil and gas industry we want to see each tomorrow. We believe, we, local experts in collaboration with value chain stakeholders, are the one responsible for better tomorrow of the industry we want to see.
					We are therefore focusing to bring up innovative solutions as the industry is seeking every way possible to optimize costs while improving performance and complying with environmental regulations and other regulatory requirements.'}}
				</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 cta-col-2 pt-4 pb-4">
			<i class="icon-feather-sun abs-inner-item"></i>
			<h2 class="title_01"> <span class="light-text"> OUR MISSION </span> </h2>
			<p >
				{{$about->mission1_title ?? 'To engage collaboratively in creating better oil and gas sector through which, companies, government and local citizens will benefit from the sector.'}}
			</p>
		</div>
		<div class="col-lg-6 cta-col-1 pt-4 pb-4">
			<i class="icon-feather-target abs-inner-item"></i>
			<h2 class="title_01"> <span class="light-text"> OUR VISION </span> </h2>
			<p >
			{{$about->mission2_title ?? 'To engage collaboratively in creating better oil and gas sector through which, companies, government and local citizens will benefit from the sector.'}}
			</p>
		</div>
	</div>

	<div class="p40">
		<div class="row m-0">
			<div class="col-lg-4 greybg">
				<!--<div class="lg-icon-cont">

				</div>-->
				<p class="quot1">
					{{$about->culture_description_blockquote ?? ''}}
				</p>
			</div>
			<div class="col-lg-8">
				<h2 class="title_01 text-center"> OUR CULTURE </h2>
				<p class="cols2"> {{$about->culture_description ?? ''}}</p>
			</div>
		</div>
	</div>

</section>

<section class="bgtxt">
	<div class="container-lg-stag bgcutout">
		<h1 class="lg-txt"> Creating A better tomorrow </h1>
	</div>
</section>

<section class="container-lg-stag">
	<div class="smbox bgprimary-main">
		<h2 class="title_01 text-center"> {{$about->tag_title ?? ''}} </h2>
		<div class="row m-0">
			<ul class="listPrimary">
				<li> {{$about->tag_description1 ?? ''}}</li>
				<li> {{$about->tag_description2 ?? ''}}</li>
				<li>{{$about->tag_description3 ?? ''}}</li>
			</ul>
		</div>
	</div>
</section>

<section class="container-lg-stag p90">
	<div class="row m-0">
		<h2 class="title_01 text-center pb-5"> {{$about->proposition_title ?? ''}} </h2>
	</div>
	<div class="row m-0">
		<div class="col-lg-4">
			<i class="icon-material-outline-account-balance-wallet s-icon"></i>
			<h3 class="title_03"> {{$about->proposition_name1 ?? ''}} </h3>
			<p>
				{{$about->proposition_description1 ?? ''}}
			</p>
		</div>
		<div class="col-lg-4">
			<i class="icon-material-outline-explore s-icon"></i>
			<h3 class="title_03">  {{$about->proposition_name2 ?? ''}} </h3>
			<p>
				{{$about->proposition_description2 ?? ''}}</p>
		</div>
		<div class="col-lg-4">
			<i class="icon-material-outline-beach-access s-icon"></i>
			<h3 class="title_03">   {{$about->proposition_name3 ?? ''}} </h3>
			<p>
				{{$about->proposition_description3 ?? ''}}	</div>
	</div>
</section>


<section class="container-lg-stag p90" id="team" >
    <div class="row m-0">
        <h2 class="title_01 text-center pb-5">{{$about->team_title ?? ''}}   </h2>
    </div>
    <div class="row m-0">
        <div class="col-lg-4">

            <p>
               {{$about->team_description ?? ''}}
            </p>
        </div>

    </div>

    <div class="">
        @foreach($team as $t)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src=" {{URL::asset($t->avator)}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$t->name}}</h5>
                            <p class="card-text">{{$t->position}}</p>
                            <p class="card-text"><small class="text-muted">{{$t->link}}</small></p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>


@endsection
