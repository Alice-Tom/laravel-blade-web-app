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
				<h3>Manage Applicants</h3>
				<span class="margin-top-7">Job Applications for <a href="{{ url('view-job/'.$job->id)}}">{{ $job->title }}</a></span>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
						<li>Manage Applicants</li>
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
							<h3><i class="icon-material-outline-supervisor-account"></i> {{ $job->applicants->count() }} Applicants</h3>
						</div>

						<div class="content">
							<ul class="dashboard-box-list">
								@foreach ($job->applicants as $applicant )
								<li>
									<!-- Overview -->
									<div class="freelancer-overview manage-Applicants">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<div class="verified-badge"></div>
												<a href="{{ url('view-applicant/'.$applicant->id)}}"><img src="{{ asset($applicant->avator??'')}}" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="{{ url('view-applicant/'.$applicant->id)}}">{{ $applicant->name }} <img class="flag" src="images/flags/au.svg" alt="" title="Australia" data-tippy-placement="top"></a></h4>

												<!-- Details -->
												<span class="freelancer-detail-item"><a href=""><i class="icon-feather-mail"></i> {{ $applicant->email }}</a></span>
												{{-- <span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+61) 123-456-789</span> --}}

												<!-- Rating -->
												<div class="freelancer-rating">
													<div class="star-rating" data-rating="5.0"></div>
												</div>

												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="" class="button ripple-effect"><i class="icon-feather-file-text"></i> Download CV</a>
													<a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li>
								@endforeach
							

								{{-- <li>
									<!-- Overview -->
									<div class="freelancer-overview manage-Applicants">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<a href="{{ url('view-applicant')}}"><img src="{{ asset('img/members/member2.jpg')}}" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="{{ url('view-applicant')}}">Sebastiano Piccio <img class="flag" src="images/flags/it.svg" alt="" title="Italy" data-tippy-placement="top"></a></h4>
											

												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> sebastiano@example.com</a></span>
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+39) 123-456-789</span>

												<!-- Rating -->
												<br>
												<span class="company-not-rated">Minimum of 3 votes required</span>

												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="#" class="button ripple-effect"><i class="icon-feather-file-text"></i> Download CV</a>
													<a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
									</div>
								</li> --}}

								{{-- <li>
									<!-- Overview -->
									<div class="freelancer-overview manage-Applicants">
										<div class="freelancer-overview-inner">

											<!-- Avatar -->
											<div class="freelancer-avatar">
												<a href="{{ url('view-applicant')}}"><img src="{{ asset('img/members/member2.jpg')}}" alt=""></a>
											</div>

											<!-- Name -->
											<div class="freelancer-name">
												<h4><a href="{{ url('view-applicant')}}">Nikolay Azarov <img class="flag" src="images/flags/ru.svg" alt="" title="Russia" data-tippy-placement="top"></a></h4>

												<!-- Details -->
												<span class="freelancer-detail-item"><a href="#"><i class="icon-feather-mail"></i> nikolay@example.com</a></span>
												<span class="freelancer-detail-item"><i class="icon-feather-phone"></i> (+7) 123-456-789</span>

												<!-- Rating -->
												<br>
												<span class="company-not-rated">Minimum of 3 votes required</span>

												<!-- Buttons -->
												<div class="buttons-to-right always-visible margin-top-25 margin-bottom-5">
													<a href="#" class="button ripple-effect"><i class="icon-feather-file-text"></i> Download CV</a>
													<a href="#" class="button gray ripple-effect ico" title="Remove Candidate" data-tippy-placement="top"><i class="icon-feather-trash-2"></i></a>
												</div>
											</div>
										</div>
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

</div>
<!-- Wrapper / End -->


<!-- Send Direct Message Popup
================================================== -->
<div id="small-dialog" class="zoom-anim-dialog mfp-hide dialog-with-tabs">

	<!--Tabs -->
	<div class="sign-in-form">

		<ul class="popup-tabs-nav">
			<li><a href="#tab">Send Message</a></li>
		</ul>

		<div class="popup-tabs-container">

			<!-- Tab -->
			<div class="popup-tab-content" id="tab">
				
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>Direct Message To Sindy</h3>
				</div>
					
				<!-- Form -->
				<form method="post" id="send-pm">
					<textarea name="textarea" cols="10" placeholder="Message" class="with-border" required></textarea>
				</form>
				
				<!-- Button -->
				<button class="button full-width button-sliding-icon ripple-effect" type="submit" form="send-pm">Send <i class="icon-material-outline-arrow-right-alt"></i></button>

			</div>

		</div>
	</div>
</div>
<!-- Send Direct Message Popup / End -->

@endsection