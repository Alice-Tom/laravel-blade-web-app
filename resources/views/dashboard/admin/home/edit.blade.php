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
				<h4> EDIT HOME </h4>
			</div>
			<form method="post"  action="{{ url('home/update') }}" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="home_id" value ="{{$home->id ?? '' }}" />
				<!-- Segment -->
				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> SLIDES </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Slide 1 Title </label>
							<input class="with-border" name='title1' value="{{$home->title1 ?? ''}}">
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Slide 1 Link </label>
								<input type ="url" class="with-border" name="link1" value="{{$home->link1 ?? ''}}">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Description </label>
								<textarea rows="2" name="description1">{{$home->description1 ?? ''}}</textarea>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Slide Image </label>
								<div class="submit-field">
									<div class="avatar-wrapper" data-tippy-placement="bottom">
										<img class="profile-pic" src="" alt="" />
										<div class="upload-button"></div>
										<input class="file-upload" type="file" name="image1" accept="image/*" />
									</div>
									<!-- <input class="file-upload" type="file" name="image1" accept="image/*" /> -->

								</div>
							</div>

						</div>
					</div>
					<hr>
					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Slide 2 Title </label>
							<input class="with-border" name="title2" value="{{$home->title2 ?? ''}}">
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Slide 2 Link </label>
								<input type="url" class="with-border" name="link2" value="{{$home->link2 ?? ''}}" >
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Description </label>
								<textarea rows="2" name="description2">{{$home->description2 ?? '' }}</textarea>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Slide Image  </label>
								<div class="submit-field">
									<div class="avatar-wrapper" data-tippy-placement="bottom">
										<img class="profile-pic1" src="" alt="" />
										<div class="upload-button1"></div>
										<input class="file-upload1" type="file" name="image2" accept="image/*" />
									</div>
								</div>
							</div>

						</div>
					</div>
					<hr>
					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Slide 3 Title </label>
							<input class="with-border" name="title3" value="{{$home->title3 ?? '' }}" >
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Slide 3 Link </label>
								<input type="url" class="with-border" name="link3" value="{{$home->link3 ?? ''}}">
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Description </label>
								<textarea rows="2" name="description3">{{$home->description3 ?? ''}}</textarea>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Slide Image </label>
								<div class="submit-field">
									<div class="avatar-wrapper" data-tippy-placement="bottom">
										<img class="profile-pic2" src="" alt="" />
										<div class="upload-button2"></div>
										<input class="file-upload2" type="file" name="image3" accept="image/*" />
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
						<h3><i class="icon-feather-folder-plus"></i> INTRODUCTION </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="intro_title" value="{{$home->intro_title ??''}}">
						</div>

						<div class="row m-0">
							<label> Description Link </label>
							<input type="url" class="with-border" name="intro_link" value="{{$home->intro_link ??''}}">
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Content </label>
								<textarea rows="5" name="intro_content">{{$home->intro_content ??''}}</textarea>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Segment Image </label>
								<div class="submit-field">
									<div class="avatar-wrapper" data-tippy-placement="bottom">
										<img class="profile-pic3" src="" alt="" />
										<div class="upload-button3"></div>
										<input class="file-upload3" type="file" name="intro_image" accept="image/*" />
									</div>
								</div>
							</div>

						</div>

						<div class="row m-0">
							<label> Video Link </label>
							<input  type="text" class="with-border" name="intro_video" value="{{$home->intro_video ??''}}">
						</div>

					</div>
				</div>


				<!-- Segment -->
				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> SECTION 3 </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="sec3_title" value="{{$home->sec3_title ??''}}">
						</div>

						<div class="row m-0">
							<label> Description Link </label>
							<input type="url" class="with-border" name="sec3_link" value="{{$home->sec3_link ??''}}">
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Content </label>
								<textarea rows="5" name="sec3_content">{{$home->sec3_content ??''}}</textarea>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Segment Image </label>
								<div class="submit-field">
									<div class="avatar-wrapper" data-tippy-placement="bottom">
										<img class="profile-pic4" src="" alt="" />
										<div class="upload-button4"></div>
										<input class="file-upload4" type="file" name="sec3_image" accept="image/*" />
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
						<h3><i class="icon-feather-folder-plus"></i> SECTION 4 </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="sec4_title" value="{{$home->sec4_title ??''}}">
						</div>

						<div class="row m-0">
							<label> Description Link </label>
							<input type="url" class="with-border" name="sec4_link" value="{{$home->sec4_link ??''}}">
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Content </label>
								<textarea rows="5" name="sec4_content">value="{{$home->sec4_content ??''}}"</textarea>
							</div>
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Segment Image </label>
								<div class="submit-field">
									<div class="avatar-wrapper" data-tippy-placement="bottom">
										<img class="profile-pic5" src="" alt="" />
										<div class="upload-button5"></div>
										<input class="file-upload5" type="file" name="sec4_content" accept="image/*" />
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
						<h3><i class="icon-feather-folder-plus"></i> STAFFING </h3>
					</div>

					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Title </label>
							<input class="with-border" name="staff_title" value="{{$home->staff_title ??''}}">
						</div>

						<div class="row m-0">
							<label> Description Link </label>
							<input type="url" class="with-border" name="staff_link" value="{{$home->staff_link??''}}">
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Content </label>
								<textarea rows="5" name="staff_content">{{$home->staff_content ??''}} </textarea>
							</div>
						</div>

					</div>
				</div>

				<!-- Segment -->
				<div class="dashboard-box mt-3 mb-3">
					<!-- Headline -->
					<div class="headline">
						<h3><i class="icon-feather-folder-plus"></i> BOTTOM CTA </h3>
					</div>
					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Segment 1 Title </label>
							<input class="with-border" name="bottom1_title" value="{{$home->bottom1_title ??''}}">
						</div>

						<div class="row m-0">
							<label> Segment 1 Description Link </label>
							<input type="url" class="with-border" name="bottom1_link" value="{{$home->bottom1_link ??''}}">
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Segment 1 Description </label>
								<textarea rows="5" name="bottom1_description">{{$home->bottom1_description ??''}}</textarea>
							</div>
						</div>

					</div>
					<hr>
					<div class="content with-padding padding-bottom-10">
						<div class="row m-0">
							<label> Segment 2 Title </label>
							<input class="with-border" name="bottom2_title" value="{{$home->bottom2_title ??''}}">
						</div>

						<div class="row m-0">
							<label> Segment 2 Description Link </label>
							<input type="url" class="with-border" name="bottom2_link" value="{{$home->bottom2_link ??''}}">
						</div>

						<div class="row mt-2">
							<div class="col-xl-12">
								<label> Segment 2 Description </label>
								<textarea rows="5" name="bottom2_description">{{$home->bottom2_description ??''}} </textarea>
							</div>
						</div>

					</div>
				</div>

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
