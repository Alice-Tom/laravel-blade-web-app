@extends('layouts.app')

@section('content')
    <section class="mainhero stag-container-main">
        <div class="mainslider">
            <div class="slider-item">
                <span class="overlay-inner"></span>
                <img src="{{ asset($home->image1 ?? 'img/slide1.jpg')}}" role="img" title="solutions tag"
                     alt="slide image"/>
                <span class="caption-container">
				<h2 class="hero-title caption-animation-1"> {{$home->title1 ?? 'A BETTER TOMMOROW THROUGH OIL AND GAS'}} </h2>
				<p class="caption-animation-2 description-title">{{$home->description1 ?? 'We are integrated oil and gas company specialized in providing technical (engineering, geophysical, consultance) services and trainings.'}}  </p>
				<a href="{{ url('about')}}"
                   class="btn-type-1 magic-hover magic-hover__square light-text caption-animation-3">
{{--					<span>--}}
                    {{--						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path--}}
                    {{--                                d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"--}}
                    {{--                                fill="currentColor"/></svg>--}}
                    {{--					</span>--}}
                    {{--					<label> <em> Read more </em></label>--}}
				</a>
			</span>
            </div>
            <div class="slider-item">
                <span class="overlay-inner"></span>
                <img src="{{ asset($home->image2 ?? 'img/slide2.jpg')}}" role="img" title="solutions tag"
                     alt="slide image"/>
                <span class="caption-container">
				<h2 class="hero-title caption-animation-1"> {{$home->title2 ?? 'A BETTER TOMMOROW THROUGH OIL AND GAS'}} </h2>
				<p class="caption-animation-2 description-title"> {{$home->description2 ?? 'We are integrated oil and gas company specialized in providing technical (engineering, geophysical, consultance) services and trainings.'}} </p>
				<a href="{{ url('about')}}"
                   class="btn-type-1 magic-hover magic-hover__square light-text caption-animation-3">
{{--					<span>--}}
                    {{--						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path--}}
                    {{--                                d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"--}}
                    {{--                                fill="currentColor"/></svg>--}}
                    {{--					</span>--}}
                    {{--					<label> <em> Read more </em></label>--}}
				</a>
			</span>
            </div>
            <div class="slider-item">
                <span class="overlay-inner"></span>
                <img src="{{ asset($home->image3 ?? 'img/slide2.jpg')}}" role="img" title="solutions tag"
                     alt="slide image"/>
                <span class="caption-container">
				<h2 class="hero-title caption-animation-1"> {{$home->title3 ?? 'A BETTER TOMMOROW THROUGH OIL AND GAS'}} </h2>
				<p class="caption-animation-2 description-title"> {{$home->description3 ?? 'We are integrated oil and gas company specialized in providing technical (engineering, geophysical, consultance) services and trainings.'}} </p>
				<a href="{{ url('about')}}"
                   class="btn-type-1 magic-hover magic-hover__square light-text caption-animation-3">
{{--					<span>--}}
                    {{--						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path--}}
                    {{--                                d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"--}}
                    {{--                                fill="currentColor"/></svg>--}}
                    {{--					</span>--}}
                    {{--					<label> <em> Read more </em></label>--}}
				</a>
			</span>
            </div>
        </div>

        <div class="hero-intro-section">
            <div class="hero-intro-container bg-light">
                <div class="innerfullrow">
                    <div class="half">
                        <div class="half-inner">
                            <div class="row m-0">
                                <h2 class="title_01"> {{$home->intro_title ?? ''}} </h2>
                                <span class="empty_space_1"></span>
                                <p class="introduction-section"> {{$home->intro_content ?? 'Oil and gas sector requires fresh, innovative and disruptive minds that are motivated by the future rather than the present. The minds that are committed to present their ulttimate thoughts and providing the best solutions for the better tomorrow of the sector in Tanzania.'}} </p>
                                <a href="{{ url('about')}}" class="btn-type-1 magic-hover magic-hover__square">
                                    {{--								<span>--}}
                                    {{--									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
                                    {{--                                         xmlns="http://www.w3.org/2000/svg"><path--}}
                                    {{--                                            d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"--}}
                                    {{--                                            fill="currentColor"/></svg>--}}
                                    {{--								</span>--}}
                                    {{--                                    <label> <em> Read more </em></label>--}}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="half-video">
                        <div class="video-container">
                            {!! $home->intro_video ?? '' !!}


                            {{--                            <video playsinline="playsinline" id="videostag" poster="{{$home->intro_video ?? '' }}">--}}
                            {{--                                <source src="{{$home->intro_video ?? '' }}" type="video/mp4">--}}
                            {{--                                <iframe width="560" height="315" src="https://www.youtube.com/embed/gIWH5b1_bRY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
                            {{--                            </video>--}}
                            {{--                            <a href="{{$home->intro_link ?? '' }}"--}}
                            {{--                               class="btn-type-1 magic-hover magic-hover__square light-text">--}}
                            {{--								<span>--}}
                            {{--									<svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
                            {{--                                         xmlns="http://www.w3.org/2000/svg"><path--}}
                            {{--                                            d="M15 12.3301L9 16.6603L9 8L15 12.3301Z" fill="currentColor"/></svg>--}}
                            {{--								</span>--}}
                            {{--                                <label> <em> Watch our story </em></label>--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="container-lg-stag">

        <div class="after-hero">
            <div class="squash">
                <div class="row w-100 m250">
                    <div class="col-lg-6">
                        <img src="{{ asset($home->sec3_image ?? 'img/staff.png')}}" class="leftimage" role="img"
                             title="local staff" alt="local staff solutions tag"/>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="title_01"> {{$home->sec3_title ?? ''}} </h2>
                        <p class="m40"> {{$home->sec3_content ?? 'With creative minds and disruptive thinking, we are able to deliver higher values to our clients. This is attributed by our readiness as local expertise to make difference in the industry for the better tomorrow'}} </p>
                        <a href="{{$home->sec3_link ?? ''}}" class="btn-type-1 magic-hover magic-hover__square">
                            {{--						<span>--}}
                            {{--							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"--}}
                            {{--                                 xmlns="http://www.w3.org/2000/svg"><path--}}
                            {{--                                    d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"--}}
                            {{--                                    fill="currentColor"/></svg>--}}
                            {{--						</span>--}}
                            {{--                            <label> <em> Read more </em></label>--}}
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="featuresmain bgprimary-main">
        <div class="container-lg-stag">
            <div class="row m-0">
                <div class="col-lg-6 p40">
                    <h2 class="title_01"> WE PROVIDE TECHNICAL SERVICES IN THE OIL AND GAS INDUSTRY IN TANZANIA </h2>
                    <p class="m40">
                        Oil and gas industry being one high risk industry, require specialized technical support for
                        smooth operations. Yet, cost optimization is the key in running a profitable business.
                    </p>
                    <a href="{{ url('services')}}">
                        <button class="btn btn-st btn-st-primary light"> Read more</button>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="inner-container-ovr">
                        <img src="{{ asset('img/largeImg.jpg')}}" class="img-side" role="img" title="local staff"
                             alt="local staff solutions tag"/>
                    </div>
                </div>
            </div>

            <div class="row m-0 p40 service-items">
                @foreach ($subService as $service )
                    @php
                        $service_slug = str_slug($service->title, '-');
                    @endphp
                    <div class="col-lg-3 service-item"
                         onclick="location.href='{{ url('service-child/'.$service->id.'/'.$service_slug) }}'">
                        <div class="icon-item">

                            <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                 viewBox="0 0 512 512" width="512" height="512">
                                <path
                                    d="M492.59,115.84h.02a5.656,5.656,0,0,0,2.051-.345,6.031,6.031,0,0,0,3.331-8.338,64.281,64.281,0,0,0-116.166,2.183H356.385A24.4,24.4,0,0,0,318.2,90.651a24.576,24.576,0,0,0-8.791-11.6,23.666,23.666,0,0,0-9.45-4.076,24.385,24.385,0,0,0-17.634,3.253A24.518,24.518,0,0,0,271.614,62.6a22.993,22.993,0,0,0-7.625-3.227,24.429,24.429,0,0,0-23.4,7.146,24.4,24.4,0,0,0-23.752-8.629,23.527,23.527,0,0,0-9.166,3.9A24.385,24.385,0,0,0,197.21,81.84v27.5H130.174a64.272,64.272,0,0,0-116.061-2.372,6.1,6.1,0,0,0-.522,4.185,6.011,6.011,0,0,0,5.839,4.6H49.472a39.169,39.169,0,0,1-.942,39.979l-29.15-.1a6.01,6.01,0,0,0-5.837,4.59,6.106,6.106,0,0,0,.516,4.184,64.274,64.274,0,0,0,116.116-2.284h7.875v56.43a37.79,37.79,0,0,0,11.057,26.683l9.72,9.72a74.346,74.346,0,0,1,21.686,46.987H176.8a19.15,19.15,0,0,0-19.15,19.15v39.43a19.14,19.14,0,0,0,19.14,19.14h88.58a112.708,112.708,0,0,0,38.366,52.508A111.669,111.669,0,1,0,370.83,231.26a112.292,112.292,0,0,0-14.4.932V162.12h25.395a64.266,64.266,0,0,0,116.113,2.27,6.006,6.006,0,0,0-1.282-7.077,6.273,6.273,0,0,0-4.312-1.6H462.527a39.137,39.137,0,0,1,.942-39.969ZM261.931,367.66H176.8a7.17,7.17,0,0,1-7.15-7.15V321.08a7.14,7.14,0,0,1,7.14-7.14h86.2a112.059,112.059,0,0,0-1.056,53.72Zm108.9-124.4a99.6,99.6,0,0,1,99.65,99.65,99.655,99.655,0,1,1-193.873-32.544c.042-.1.082-.2.118-.31a100.164,100.164,0,0,1,24.469-38.43,6,6,0,1,0-8.386-8.583,112.339,112.339,0,0,0-25.854,38.9H192.543a86.275,86.275,0,0,0-25.23-55.473L157.847,237a26.659,26.659,0,0,1-4.555-5.95,25.746,25.746,0,0,1-3.242-12.5V162.12h8.032a6.167,6.167,0,0,0,6.249-5.815,6,6,0,0,0-6-6.185H126.16a5.949,5.949,0,0,0-5.594,3.828A52.485,52.485,0,0,1,71.58,187.99a51.947,51.947,0,0,1-41.394-20.323l21.523.073a6.027,6.027,0,0,0,4.962-2.595l.485-.706a51.144,51.144,0,0,0,.633-58.068,5.959,5.959,0,0,0-4.959-2.621H30.23A51.948,51.948,0,0,1,71.58,83.48a52.482,52.482,0,0,1,48.986,34.032,5.949,5.949,0,0,0,5.594,3.828h71.05v28.78H177.919a6.167,6.167,0,0,0-6.249,5.815,6,6,0,0,0,6,6.185H197.21l-.044,4.291c-.609,14.1-10.295,26.889-24.128,31.827l-.388.141a6.134,6.134,0,0,0-4,7.04,6,6,0,0,0,7.894,4.312l.555-.2c18.645-6.656,31.228-23.378,32.058-42.608l.055-85.083a12.4,12.4,0,0,1,12.851-12.4,12.665,12.665,0,0,1,11.949,12.8v62.446a6.166,6.166,0,0,0,5.815,6.248,6,6,0,0,0,6.185-6V83.548a12.665,12.665,0,0,1,11.78-12.782,12.322,12.322,0,0,1,9.193,3.418,12.912,12.912,0,0,1,3.837,9.367v61.127a6.166,6.166,0,0,0,5.816,6.249,6,6,0,0,0,6.184-6V99.356c0-7.056,5.7-13.027,12.754-12.831a12.318,12.318,0,0,1,8.239,3.447,12.919,12.919,0,0,1,3.817,9.349V138.93a6,6,0,0,0,12,0V111.151a12.918,12.918,0,0,1,3.834-9.365,12.332,12.332,0,0,1,9.192-3.421,12.655,12.655,0,0,1,11.774,12.772V234.416a110.649,110.649,0,0,0-29.974,12.1,6,6,0,1,0,6.065,10.353A99.547,99.547,0,0,1,370.83,243.26Zm84.5-136.934-.485.7a51.109,51.109,0,0,0-.666,58.008,6,6,0,0,0,4.992,2.672h22.6a51.943,51.943,0,0,1-41.351,20.28,52.487,52.487,0,0,1-48.959-33.969,6,6,0,0,0-5.621-3.9H356.43V121.34h29.41a6,6,0,0,0,5.621-3.9A52.295,52.295,0,0,1,481.819,103.8l-21.529-.073A5.874,5.874,0,0,0,455.329,106.326Z"/>
                                <path
                                    d="M223.405,168.067a6,6,0,0,0-6.828,5.038,55.506,55.506,0,0,1-30.842,41.47,6,6,0,1,0,5.25,10.791A67.506,67.506,0,0,0,228.443,174.9,6,6,0,0,0,223.405,168.067Z"/>
                                <path
                                    d="M223.21,149.79a6,6,0,0,0-6,6v2.74a6,6,0,0,0,12,0v-2.74A6,6,0,0,0,223.21,149.79Z"/>
                                <path
                                    d="M421.835,100.051a40.218,40.218,0,0,0-19.136,21.59,6,6,0,1,0,11.242,4.2,28.241,28.241,0,0,1,13.444-15.15,6,6,0,1,0-5.55-10.638Z"/>
                                <path
                                    d="M444.593,95.691a41.127,41.127,0,0,0-4.173-.211,6,6,0,1,0,0,12,28.885,28.885,0,0,1,2.947.149,6.19,6.19,0,0,0,.62.032,6,6,0,0,0,.606-11.97Z"/>
                                <path
                                    d="M316.71,366.43A54.113,54.113,0,1,0,417.517,339.1l-41.51-70.86a6,6,0,0,0-5.177-2.967h0a6,6,0,0,0-5.177,2.967L324.132,339.1A54.159,54.159,0,0,0,316.71,366.43Zm17.777-21.267,36.342-62.024,36.333,62.023a42.137,42.137,0,0,1-6.565,51.066h0a42.111,42.111,0,0,1-66.109-51.066Z"/>
                                <path
                                    d="M377.909,392.731a6,6,0,0,0,1.948-.326,32.8,32.8,0,0,0,21.456-24.516,6,6,0,1,0-11.766-2.358,20.8,20.8,0,0,1-13.584,15.524,6,6,0,0,0,1.946,11.676Z"/>
                            </svg>
                        </div>
                        <h3> {{$service->title}} </h3>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    <section class="container-lg-stag">

        <div class="center-cols train-section">
            <div class="row w-100 m200">
                <div class="col-lg-6 ">
                    <h2 class="title_01"> {{$home->sec4_title ?? ''}} </h2>
                    <p class="m40"> {{$home->sec4_content ?? 'In Tanzania oil and gas industry, technical skills gap, awareness, and sensitization to local community are mentioned as some of the key challenges.'}} </p>
                    <a href="{{$home->sec4_link ?? '' }}" class="btn-type-1 magic-hover magic-hover__square">
					<span>
{{--						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path--}}
                        {{--                                d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"--}}
                        {{--                                fill="currentColor"/></svg>--}}
					</span>
                        <label> <em> </em></label>
                    </a>
                </div>
                <div class="col-lg-6   ">
                    <div class="training-img-container">
                        <img src="{{ asset($home->sec4_image ?? 'img/training.jpg')}}" class="leftimage" role="img"
                             title="local staff" alt="local staff solutions tag"/>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="full-type-2">
        <div class="container-lg-stag">
            <div class="row m-0">
                <div class="col-lg-2">
                    <h1 class="title_03"><span class="decor"> BLOG & RESOURCES </span></h1>
                </div>
                <div class="col-lg-10">
                    <div class="blogs">
                        @foreach($trainings as $training)
                            <div class="blog-item">
                                <figure>
                                    <img src="{{$training->cover}}" title="article" alt="blog solutionstag"
                                         role="img"/>
                                    <figcaption>
                                        {{$training->title}}
                                    </figcaption>
                                    <div class="card-footer-items">
                                        <div class="row m-0">
                                            <div class="col-lg-6">
                                                <h5 class="date-blog"><span
                                                        class="decor"> {{  \Carbon\Carbon::parse($training->start_day)->shortEnglishDayOfWeek .", ". \Carbon\Carbon::parse($training->start_day)->format('d/m/Y') }} </span>
                                                </h5>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="{{'view-training/'.$training->id}}" class="float-right rdmore">

                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.0378 6.34317L13.6269 7.76069L16.8972 11.0157L3.29211 11.0293L3.29413 13.0293L16.8619 13.0157L13.6467 16.2459L15.0643 17.6568L20.7079 11.9868L15.0378 6.34317Z"
                                                            fill="currentColor"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        @endforeach
                        @foreach($blogs as $blog)
                            <div class="blog-item">
                                <figure>
                                    <img src="{{ $blog->cover }}" title="article" alt="blog solutionstag"
                                         role="img"/>
                                    <figcaption>
                                        {{$blog->title}}
                                    </figcaption>
                                    <div class="card-footer-items">
                                        <div class="row m-0">
                                            <div class="col-lg-6">
                                                <h5 class="date-blog"><span class="decor"> Read More </span></h5>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="#" class="float-right rdmore">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M15.0378 6.34317L13.6269 7.76069L16.8972 11.0157L3.29211 11.0293L3.29413 13.0293L16.8619 13.0157L13.6467 16.2459L15.0643 17.6568L20.7079 11.9868L15.0378 6.34317Z"
                                                            fill="currentColor"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recruit-members-home-view">
        <div class="container-lg-stag">
            <div class="m200">
                <div class="row m-0">
                    <div class="@if($featured->isEmpty()) col-lg-12 @else col-lg-6  @endif  br-bb pb-5">
                        <h2 class="title_01"><span class="decor"> {{$home->staff_title ?? 'TECHNICAL STAFFING'}} </span>
                        </h2>
                        <p class="p40"> {{$home->staff_content ?? 'At SolutionsTag we are determined to promote local Tanzanian experts in the oil and gas industry. We offer staffing solutions for our clients.'}} </p>

                        @if($home->staff_link)
                            <a href="{{$home->staff_link ?? ''}}" class="btn-type-1 magic-hover magic-hover__square">
						<span>

							<svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"><path
                                    d="M12 4C11.4477 4 11 4.44772 11 5V11H5C4.44772 11 4 11.4477 4 12C4 12.5523 4.44772 13 5 13H11V19C11 19.5523 11.4477 20 12 20C12.5523 20 13 19.5523 13 19V13H19C19.5523 13 20 12.5523 20 12C20 11.4477 19.5523 11 19 11H13V5C13 4.44772 12.5523 4 12 4Z"
                                    fill="currentColor"/></svg>
						</span>
                                <label>
                                    <em> Read more </em>
                                </label>
                            </a>
                        @endif

                    </div>
                    @if(!$featured->isEmpty())
                        <div class="col-lg-6">
                            <div class="members-seg-container">
                                <div class="row m-0">
                                    <div class="col-lg-6">
                                        <h1 class="title_03"> FEATURED EXPERTS </h1>
                                    </div>
                                    <div class="col-lg-6">
                                        {{--                                        <a href="#" class="float-right"><h1 class="title_03"><span class="decor"> VIEW ALL </span>--}}
                                        {{--                                            </h1></a>--}}
                                    </div>
                                </div>
                                <div class="row m-0 pt-3 pb-3">
                                    @foreach($featured as $f)
                                        <div class="col-lg-4 experts-items"
                                             style="background-image: url('{{ asset($f->avator)}}');"
                                             onclick="window.location.href='#'">
                                            <div class="member-names">
                                                <span class="expt-name">
                                                    @if(isset($f->firstname))
                                                        {{ $f->firstname ." ".$f->lastname }}
                                                    @else
                                                        {{ $f->name }}
                                                    @endif
                                                </span>
                                                {{-- <span class="expt-profession">
                                                    Software engineer
                                                </span> --}}
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-lg-6 cta-col-2 pt-5 pb-5">
                        <h2 class="title_01"><span
                                class="light-text"> {{$home->bottom1_title ?? 'LOOKING FOR PROFESSIONALS IN THE OIL & GAS INDUSTRY IN TANZANIA?'}} </span>
                        </h2>
                        <p class="p40">
                            {{$home->bottom1_description ?? 'It takes just a few steps to create an account and view profiles of local Tanzanian experts to hire.'}}
                        </p>
                        <a href="{{$home->bottom1_link ?? ''}}" class="btn btn-st btn-st-primary light-btn"> Discover
                            more </a>
                    </div>
                    <div class="col-lg-6 cta-col-1 pt-5 pb-5">
                        <h2 class="title_01"><span
                                class="light-text"> {{$home->bottom2_title ?? 'ARE YOU AN EXPERT IN THE OIL & GAS INDUSTRY?'}} </span>
                        </h2>
                        <p class="p40">
                            {{$home->bottom2_description ?? 'We welcome local Tanzanian experts in the oil & gas industry to join our expert network, create an account and make yourself visible to prospective employers.'}}
                        </p>
                        <a href="{{$home->bottom2_link ?? ''}}" class="btn btn-st btn-st-primary light-btn"> Discover
                            more </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="client-logos-section">
        <div class="container-lg-stag ">
            <div class="m200">
                <div class="row m-0">
                    <h2 class="title_01"><span class="light-text"> CLIENTS </span></h2>
                </div>
                <div class="client-logos">
                    @foreach($clients as $client)
                        <div>
                            <div class="inner-logo-container" style="background-image: url('{{$client->cover}}') ;">

                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>

@endsection
