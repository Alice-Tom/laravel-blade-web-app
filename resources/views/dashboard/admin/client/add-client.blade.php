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
                    <h4> ADD CLIENT  </h4>
                </div>

                <form method="post"  action="{{ url('new-client') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Segment -->
                    <div class="dashboard-box mt-3 mb-3">
                        <!-- Headline -->


                        <div class="content with-padding padding-bottom-10">
                            <div class="row m-0">
                                <label> Client Name </label>
                                <input class="with-border" name="name" value="">
                            </div>



                            <div class="row mt-2">
                                <div class="col-xl-12">
                                    <label> Client Logo</label>
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
