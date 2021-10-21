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
                <div class="col-lg-12">
                    <h2 class="title">{{ $service->service->title }} </h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Content
    ================================================== -->
    <section class="fullwidthbg bgprimary-main">
        <div class="container-lg-stag">
            <div class="row m-0">
                <div class="col-lg-4">
                    <div class="title-big-icon">
                        <i class="icon-line-awesome-question"></i>
                        <h1> {{ $service->top_title }} </h1>
                    </div>
                </div>
                <div class="col-lg-8">
                    <p>{{ $service->top_description }} </p>
                </div>
            </div>
        </div>
    </section>

    <section class="whoweare">
        <div class="forcetocenter">
            <div class="videolg-container container-lg-stag">
                <div class="subservice-image" style="background-image: url('{{URL::asset($service->image)}}') ;">
                    {{--				<img src="{{ asset($service->image)}}" role="img" class="img-page-subservice" alt="Oil and Gas">--}}
                </div>
            </div>
        </div>
    </section>

    <section class="container-lg-stag pt-5 pb-5">
        {{-- <div class="row m-0">
            <h2 class="title_01 text-center pb-5"> {{ $service->bottom_title }} </h2>
        </div> --}}
        <div class="row m-0">
            <div class="col-lg-4">

                <h3 class="title_03"> Others: </h3>
                <div class="list-group">
                    @foreach($subServices as $subService)
                        <button type="button" class="list-group-item list-group-item-action"><a href="/service-child/{{$subService->id."/".$subService->title}}">{{$subService->title}}</a></button>


                    @endforeach

                </div>

            </div>
            <div class="col-lg-8">
                <i class="icon-material-outline-account-balance-wallet s-icon"></i>
                <h3 class="title_03"> {{ $service->bottom_title }} </h3>
                <p style=" text-align: justify;">
                    {{ $service->bottom_description }}

                </p>
            </div>


        </div>
    </section>

@endsection
