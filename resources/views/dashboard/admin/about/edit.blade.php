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
				<h4> EDIT ABOUT US  </h4>
			</div>

			<form method="post"  action="{{ url('about/update') }}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="about_id" value ="{{$about->id ?? ''}}" />
				<!-- Segment -->
				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> INTRODUCTION </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="intro_title" value="{{$about->intro_title ?? ''}}">
						</div>

						<div class="row m-0">
							<label> Video Link </label>
							<input class="with-border" name='intro_link' value="{{$about->intro_link ?? ''}}">
						</div>

						<div class="row mt-2"> 
							<div class="col-xl-12">
								<label> Description </label>
								<textarea rows="5" name="intro_description">{{$about->intro_description ?? ''}}</textarea>
							</div>
						</div>
						
						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Segment Image </label>
								<div class="submit-field">
									<div class="avatar-wrapper" data-tippy-placement="bottom">
										<img class="profile-pic" src="" alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" type="file" name="intro_image" accept="image/*" />
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> WHO WE ARE </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row mt-2"> 
							<div class="col-xl-12">
								<label> Description </label>
								<textarea rows="5" name="who_are_we">{{$about->who_are_we ?? ''}}</textarea>
							</div>
						</div>
					</div>
				</div>

				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> MISSION & VISION </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="mission1_title" value="{{$about->mission1_title ?? '' }}">
						</div>

						<div class="row mt-2"> 
							<div class="col-xl-12">
								<label> Description </label>
								<textarea rows="5" name="mission1_description"> {{$about->mission1_description ?? '' }}</textarea>
							</div>
						</div>
						
						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Icon </label>
								<input class="with-border icon-select" placeholder="select icon" name="mission1_icon" value="{{$about->mission1_icon ?? '' }}">
							</div>
						</div>

					</div>

					<hr>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="mission2_title" value="{{$about->mission2_title ?? '' }}">
						</div>

						<div class="row mt-2"> 
							<div class="col-xl-12">
								<label> Description </label>
								<textarea rows="5" name="mission2_description">{{$about->mission2_description ?? '' }}</textarea>
							</div>
						</div>
						
						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Icon </label>
								<input class="with-border" placeholder="select icon" name="mission2_icon" value="{{$about->mission2_icon ?? '' }}">
							</div>
						</div>

					</div>

				</div>

				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> OUR CULTURE </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="culture_title" value="{{$about->culture_title ?? '' }}">
						</div>

						<div class="row mt-2"> 
							<div class="col-xl-12">
								<label> Description Main Section  </label>
								<textarea rows="10" name="culture_description">{{$about->culture_description ?? '' }}</textarea>
							</div>
						</div>
						
						<div class="row mt-2"> 
							<div class="col-xl-12">
								<label> Description Blockquote  </label>
								<textarea rows="5" name="culture_description_blockquote">{{$about->culture_description_blockquote ?? '' }}</textarea>
							</div>
						</div>

					</div>

				</div>

				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> VALUE PROPOSITION </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="proposition_title" name="{{$about->proposition_title ?? ''}}">
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Icon </label>
								<input class="with-border icon-select" placeholder="select icon" name="proposition_icon" name="{{$about->proposition_icon ?? ''}}">
							</div>
						</div>

					</div>

				</div>

				<div class="row m-0 mt-5 mb-5">
					<button type="submit" class="button btn-outline-primary ripple-effect" > SUBMIT </button>
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