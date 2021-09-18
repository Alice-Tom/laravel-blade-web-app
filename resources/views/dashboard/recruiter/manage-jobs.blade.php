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
				<h3>Manage Jobs</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Dashboard</a></li>
						<li>Manage Jobs</li>
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
							<h3><i class="icon-material-outline-business-center"></i> My Job Listings</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								@foreach ( auth::user()->jobs as $job )
								<li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">
											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">{{ $job->title }}</a> 
												<span class="dashboard-status-button green"> 
													@if ($job->active)
														Approved
													@else
														Pending Approval
													@endif
													
												</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on {{ $job->created_at->format('j F, Y') }}</li>
														<li><i class="icon-material-outline-date-range"></i> Expiring on {{ \Carbon\Carbon::parse($job->dead_line)->format('j F, Y') }}</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="{{ url('manage-applicants/'.$job->id)}}" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Applicants <span class="button-info">{{ $job->applicants->count() }}</span></a>
										<a href="{{ url('edit-job-recruiter/'.$job->id) }}" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="{{ url('delete-job/'.$job->id) }}" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li>
								@endforeach
								

								{{-- <li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">Full Stack PHP Developer</a> <span class="dashboard-status-button yellow">Expiring</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on 28 June, 2018</li>
														<li><i class="icon-material-outline-date-range"></i> Expiring on 28 July, 2018</li>
													</ul>
												</div>
											</div>

										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="{{ url('manage-applicants')}}" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Applicants <span class="button-info">3</span></a>
										<a href="#" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li> --}}

								{{-- <li>
									<!-- Job Listing -->
									<div class="job-listing">

										<!-- Job Listing Details -->
										<div class="job-listing-details">

											<!-- Details -->
											<div class="job-listing-description">
												<h3 class="job-listing-title"><a href="#">Node.js Developer</a> <span class="dashboard-status-button red">Expired</span></h3>

												<!-- Job Listing Footer -->
												<div class="job-listing-footer">
													<ul>
														<li><i class="icon-material-outline-date-range"></i> Posted on 16 May, 2018</li>
													</ul>
												</div>
											</div>
										</div>
									</div>

									<!-- Buttons -->
									<div class="buttons-to-right always-visible">
										<a href="{{ url('manage-applicants')}}" class="button ripple-effect"><i class="icon-material-outline-supervisor-account"></i> Manage Applicants <span class="button-info">7</span></a>
										<a href="#" class="button dark ripple-effect"><i class="icon-feather-rotate-ccw"></i> Refresh</a>
										<a href="#" class="button gray ripple-effect ico" title="Edit" data-tippy-placement="top"><i class="icon-feather-edit"></i></a>
										<a href="#" class="button gray ripple-effect ico" title="Remove" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
									</div>
								</li> --}}

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