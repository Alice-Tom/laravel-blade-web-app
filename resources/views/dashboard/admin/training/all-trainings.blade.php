
@extends('layouts.app-dashboard')

@section('content')

<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard Container -->
<div class="dashboard-container">

	<!-- Dashboard Sidebar
	================================================== -->
	<div class="dashboard-sidebar">
		<div class="dashboard-sidebar-inner" data-simplebar>
			<div class="dashboard-nav-container">

				<!-- Responsive Navigation Trigger -->
				<a href="#" class="dashboard-responsive-nav-trigger">
					<span class="hamburger hamburger--collapse">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</span>
					<span class="trigger-title">Dashboard Navigation</span>
				</a>

				<!-- Navigation -->
				<div class="dashboard-nav">
					<div class="dashboard-nav-inner">
						@include('includes.navigations.index')
					</div>
				</div>
				<!-- Navigation / End -->

			</div>
		</div>
	</div>
	<!-- Dashboard Sidebar / End -->


	<!-- Dashboard Content
	================================================== -->
    <div class="dashboard-content-container" data-simplebar>
		<div class="dashboard-content-inner">
            <div class="row m-0 training-container">
                <!-- Training -->
                @foreach( $trainings as $training )
                    <div class="training-col">
                        <a href="{{ url('edit-training/'. $training->id)}}">
                            <div class="row m-0">
                                <div class="col-lg-3">
                                    <img src="{{ $training->cover }}" class="event-img" role="img" title="local staff" alt="local staff solutions tag" />
                                </div>
                                <div class="col-lg-4">
                                    <div class="inner-containers">
                                        <div class="row">
                                            <h4 class="primary-title">{{$training->title}}</h4>
                                        </div>
                                        <div class="row m-0">
                                            <div class="col-lg-6">
                                                <h5> STARTS </h5>
                                                <label> {{$training->start_day . "," . $training->start_time}} </label>
                                            </div>
                                            <div class="col-lg-6">
                                                <h5> ENDS </h5>
                                                <label>{{$training->end_day . "," . $training->end_time}} </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 titles-faint">
                                    <h5 class="primary-title"> {{$training->venue}} </h5>
                                    <span>
                                        <h5> TRAINERS </h5>
                                        <label> {{$training->trainer}} </label>
                                    </span>
                                </div>
                                <div class="col-lg-2">
                                    <!-- <button class="btn btn-st btn-st-primary light"> Book Now </button> -->
                                </div>
                               
                            </div>
                        </a>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
	
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->

@endsection