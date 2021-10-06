
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
            <div class="center-cols train-section">
                <div class="row cols-resources m-0 mt-5 mb-5">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 .blog-item-to-click" style="background-image: url('{{$blog->cover}}'); margin-bottom: 16px!important;">
                            <span class="overlay-inner"></span>
                            <div class="col-top-item-type">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.3301L9 16.6603L9 8L15 12.3301Z" fill="currentColor" />
                                </svg>
                            </div>
                            <div class="title-resources">
                                <h4> {{$blog->title}}</h4>
                                <a href="{{'edit-blog/' . $blog->id }}"><button class="btn btn-st btn-st-primary button-read-more"> Edit </button></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

	<!-- Dashboard Content / End -->

</div>
<!-- Dashboard Container / End -->

</div>
<!-- Wrapper / End -->

@endsection
