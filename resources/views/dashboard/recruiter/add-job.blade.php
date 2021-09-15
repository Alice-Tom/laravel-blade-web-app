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
				<h3>Post a Job</h3>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="{{ url('/') }}">Home</a></li>
						<li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
						<li>Post a Job</li>
					</ul>
				</nav>
			</div>
	
			<!-- Row -->
			<form method="post"  action="{{ route('add-job') }}" enctype="multipart/form-data">
				@csrf
			<div class="row">

				<!-- Dashboard Box -->
				<div class="col-xl-12">
					<div class="dashboard-box margin-top-0">

						<!-- Headline -->
						<div class="headline">
							<h3><i class="icon-feather-folder-plus"></i> Job Submission Form</h3>
						</div>

						<div class="content with-padding padding-bottom-10">
							<div class="row">

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Job Title</h5>
										<input type="text" class="with-border" name="title">
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Job Type</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Job Type" name="type">
											<option>Full Time</option>
											<option>Freelance</option>
											<option>Part Time</option>
											<option>Internship</option>
											<option>Temporary</option>
										</select>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Job Category</h5>
										<select class="selectpicker with-border" data-size="7" title="Select Category" name="category">
											<option>Accounting and Finance</option>
											<option>Clerical & Data Entry</option>
											<option>Counseling</option>
											<option>Court Administration</option>
											<option>Human Resources</option>
											<option>Investigative</option>
											<option>IT and Computers</option>
											<option>Law Enforcement</option>
											<option>Management</option>
											<option>Miscellaneous</option>
											<option>Public Relations</option>
										</select>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Location</h5>
										<div class="input-with-icon">
											<div id="autocomplete-container">
												<input id="autocomplete-input" class="with-border" type="text" placeholder="Type Address" name="location">
											</div>
											<i class="icon-material-outline-location-on"></i>
										</div>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Salary</h5>
										<div class="row">
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" type="text" placeholder="Min" name="min_salary">
													<i class="currency">USD</i>
												</div>
											</div>
											<div class="col-xl-6">
												<div class="input-with-icon">
													<input class="with-border" type="text" placeholder="Max" name="max_salary">
													<i class="currency">USD</i>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4">
									<div class="submit-field">
										<h5>Tags <span>(optional)</span>  <i class="help-icon" data-tippy-placement="right" title="Maximum of 10 tags"></i></h5>
										<div class="keywords-container">
											<div class="keyword-input-container">
												<input type="text" class="keyword-input with-border" placeholder="e.g. job title, responsibilites" name="tags"/>
												<button class="keyword-input-button ripple-effect"><i class="icon-material-outline-add"></i></button>
											</div>
											<div class="keywords-list"><!-- keywords go here --></div>
											<div class="clearfix"></div>
										</div>

									</div>
								</div>

								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Job Description</h5>
										<textarea cols="30" rows="5" class="with-border" name="description"></textarea>
										<div class="uploadButton margin-top-30">
											<input class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" name="attachment" multiple/>
											<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
											<span class="uploadButton-file-name">Images or documents that might be helpful in describing your job</span>
										</div>
									</div>
								</div>

								<div class="col-xl-12">
									<div class="submit-field">
										<h5>Deadline </h5>
										<div class="keywords-container">
											<div class="keyword-input-container">
												<input type="date" class="form-control" data-toggle="datepicker" name="dead_line" required>
											</div>
										</div>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<div class="col-xl-12">
					<button type="submit" class="button ripple-effect big margin-top-30"><i class="icon-feather-plus"></i> Post a Job</button>
				</div>

			</div>
		</form>
			<!-- Row / End -->

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

@endsection