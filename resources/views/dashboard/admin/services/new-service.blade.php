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

			<!-- Fun Facts Container -->
			<div class="row m-0">
				<h4> NEW SERVICE </h4>
			</div>

			<form method="post"  action="{{ url('new-service') }}" enctype="multipart/form-data">
				@csrf
				<!-- Segment -->
				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> TOP SECTION </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Service Title </label>
							<input class="with-border" name="title" required>
						</div>

						<div class="row mt-2"> 
							<div class="col-xl-12">
								<label> Service Description </label>
								<textarea rows="10" name="description"></textarea>
							</div>
						</div>
						
						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Service Cover Image </label>
								<div class="submit-field">
									<div class="avatar-wrapper" data-tippy-placement="bottom">
										<img class="profile-pic" src="" alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" type="file" name="cover" accept="image/*" />
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				<!-- Segment -->
				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> BOTTOM SECTION </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="bottom_title">
						</div>

						<div class="row mt-2"> 
							<div class="col-xl-12">
								<label> Description </label>
								<textarea rows="10" name="bottom_description"></textarea>
							</div>
						</div>
						
						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Image </label>
								<div class="submit-field">
									<div class="avatar-wrapper" data-tippy-placement="bottom">
										<img class="profile-pic1" src="" alt="" />
										<div class="upload-button1"></div>
										<input class="file-upload1" type="file" name="bottom_cover" accept="image/*" />
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>

				{{-- <!-- Segment -->
				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> CATEGORY </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Sub-Services Category </label>
							<select class="with-border">
								<option> Category </option>
							</select>
						</div>

						<div class="row m-0">
							<label> Services Category </label>
							<select class="with-border">
								<option> Category </option>
							</select>
						</div>

					</div>

				</div> --}}

				<div class="row m-0 mt-5 mb-5">
					<button type="submit" class="button btn-outline-primary ripple-effect" title="submit"> SUBMIT </button>
				</div>
			</form>

		</div>
	</div>
	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->

@endsection