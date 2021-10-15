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
					<span class="hamburger hamburger--collapse" >
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
		<div class="dashboard-content-inner" >
			
			<!-- Dashboard Headline -->
			<div class="dashboard-headline">
				<h3>All Employers</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
						<li>All Employers </li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-material-outline-business-center"></i> Employers List </h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
                                @foreach ($employers as $employer  )
						<li>
							<!-- Job Listing -->
							<div class="job-listing">

								<!-- Job Listing Details -->
								<div class="job-listing-details">

									<!-- Details -->
									<div class="job-listing-description">
										<h5 class="job-listing-title">
                                            <a href="">
                                                @if(isset($employer->firstname))
                                                {{ $employer->firstname ." ".$employer->lastname }}
                                                @else
                                                {{ $employer->name }}
                                                @endif
                                        </a> 
                                        </h5>
									</div>

								</div>
							</div>

							<!-- Buttons -->
							{{-- <div class="buttons-to-right always-visible">
								<a href="{{ url('view-job/'.$job->id)}}" class="button ripple-effect"><i class="icon-material-outline-feedback"></i> View job description </a>
								@if($isAdmin)
								@php
									$action = $job->active ? 'deactivate' : 'activate'; 
									$icon   = $job->active ? 'icon-feather-unlock' : 'icon-feather-lock'
								@endphp
								<a href="{{ url('job-visibility/'.$job->id) }}" class="button gray ripple-effect ico" title="{{ $action }}" data-tippy-placement="top"><i class="{{ $icon }}"></i></a>
								<a href="{{ url('edit-job/'.$job->id) }}" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
								<a href="{{ url('delete-job/'.$job->id) }}" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
								@endif
							</div> --}}
						</li>
                                @endforeach
							</ul>
						</div>
					</div>
				</div>

			</div>
			<!-- Row / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

@endsection