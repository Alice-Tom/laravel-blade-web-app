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

                <!-- Dashboard Headline -->
                <div class="dashboard-headline">
                    <h3>Settings</h3>

                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                            <li>CV-Profile</li>
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
                                <h3><i class="icon-material-outline-account-circle"></i> My Account</h3>
                            </div>

                            <div class="content with-padding padding-bottom-0">
                                <form method="post" action="{{ route('update-profile') }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-auto">
                                            <div class="avatar-wrapper" data-tippy-placement="bottom"
                                                 title="Change Avatar">
                                                <img class="profile-pic"
                                                     src="{{ asset(auth::user()->avator??'images/user-avatar-placeholder.png') }}"
                                                     alt=""/>
                                                <div class="upload-button"></div>
                                                <input class="file-upload" type="file" name="avator" accept="image/*"/>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="row">

                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>First Name</h5>
                                                        <input type="text" class="with-border" name="firstname"
                                                               value="{{ auth::user()->firstname }}">
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Last Name</h5>
                                                        <input type="text" class="with-border" name="lastname"
                                                               value="{{ auth::user()->lastname }}">
                                                    </div>
                                                </div>


                                                <div class="col-xl-6">
                                                    <div class="submit-field">
                                                        <h5>Email</h5>
                                                        <input type="text" class="with-border"
                                                               value="{{ auth::user()->email }}" disabled>
                                                    </div>
                                                </div>
                                                <div class="account-type">
                                                    <div>
                                                        <h5>About me (maximum 100 words) </h5>
                                                        <div class="col-xl-12">

                                                            <textarea maxlength="600" rows="5"
                                                                      name="about">{{auth::user()->about}}  </textarea>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 pb-2">
                                        <button class="button ripple-effect big margin-top-30" type="submit"> Update
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <form method="post">
                        @csrf
                        <div class="col-xl-12">
                            <div id="education" class="dashboard-box">

                                <!-- Headline -->
                                <div class="headline">
                                    <h3><i class="icon-material-outline-lock"></i> Skills </h3>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Checked checkbox
                                    </label>
                                </div>


                                        <button class="button ripple-effect big margin-top-30" type="submit"> Submit
                                        </button>


                    </form>

                    <hr>

                    <!-- Added Skills -->

                    <!-- Skills list end -->
                </div>
            </div>


            <!-- Education  -->
            <form method="post" action="{{ route('update-education') }}" enctype="multipart/form-data">
                @csrf
                <div class="col-xl-12">
                    <div id="education" class="dashboard-box">

                        <!-- Headline -->
                        <div class="headline">
                            <h3><i class="icon-material-outline-lock"></i> Education </h3>
                        </div>

                        <div class="content with-padding">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Course Title</h5>
                                        <input type="text" class="with-border" name="title">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Qualification</h5>
                                        <select class="selectpicker with-border" data-size="7"
                                                name="qualification" title="Select Job Type"
                                                data-live-search="true">
                                            <option>Secondary / High School</option>
                                            <option>Certificate</option>
                                            <option>Advanced Diploma</option>
                                            <option>Higher National Diploma</option>
                                            <option>Degree</option>
                                            <option>Post Graduate Degree</option>
                                            <option>Masters</option>
                                            <option>Doctorate (Phd)</option>
                                            <option>Professorship</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Institution</h5>
                                        <input type="text" class="with-border" name="institution">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Institution Country</h5>
                                        <input type="text" class="with-border" name="country">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>Start Date</h5>
                                        <!--<input type="text" class="with-border">-->
                                        <input type="date" class="form-control" data-toggle="datepicker"
                                               name="start_date">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="submit-field">
                                        <h5>End Date</h5>
                                        <!--<input type="text" class="with-border">-->
                                        <input type="date" class="form-control" data-toggle="datepicker"
                                               name="end_date">
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-12">
                                <button class="button ripple-effect big margin-top-30" type="submit"> Add
                                </button>
                            </div>
                        </div>
            </form>

            <hr>

            <!-- Added Education -->
            @if(!auth::user()->education->isEmpty())
                <div class="container-lg-stag">
                    <div class="boxed-list margin-bottom-60">
                        <div class="boxed-list-headline">
                            <h3><i class="icon-material-outline-business"></i> Education List </h3>
                        </div>
                        <ul class="boxed-list-ul">
                            @foreach (auth::user()->education as $edu )
                                <li>
                                    <div class="boxed-list-item">
                                        <div class="item-content">
                                            <h4>{{ $edu->course_title }}</h4>
                                            <div class="item-details margin-top-7">
                                                <div class="detail-item"><a href="#"><i
                                                            class="icon-material-outline-business"></i> {{$edu->institution }}
                                                        /{{ $edu->country }}</a></div>
                                                <div class="detail-item"><i
                                                        class="icon-material-outline-date-range"></i> {{ $edu->start_date }}
                                                    - {{ $edu->end_date }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        @endif
        <!-- Education list end -->
        </div>
    </div>


    <!-- Experience  -->
    <form method="post" action="{{ route('update-experience') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-xl-12">
            <div id="work-experience" class="dashboard-box">

                <!-- Headline -->
                <div class="headline">
                    <h3><i class="icon-material-outline-lock"></i> Work Experience / Portfolio </h3>
                </div>

                <div class="content with-padding">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="submit-field">
                                <h5>Job Title</h5>
                                <input type="text" class="with-border" name="title">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="submit-field">
                                <h5>Position Level</h5>
                                <select class="selectpicker with-border" name="level" data-size="7"
                                        title="Select Job Type" data-live-search="true">
                                    <option>Entry</option>
                                    <option> Junior</option>
                                    <option> Intermediate</option>
                                    <option> Volunteer</option>
                                    <option> Management</option>
                                    <option> Senior Management</option>
                                    <option> Advisory</option>
                                    <option> Head of department</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="submit-field">
                                <h5>Company/Organization</h5>
                                <input type="text" class="with-border" name="organization">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="submit-field">
                                <h5>Company/Organization Country</h5>
                                <input type="text" class="with-border" name="country">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="submit-field">
                                <h5>Start Date</h5>
                                <!--<input type="text" class="with-border">-->
                                <input required type="date" class="form-control" data-toggle="datepicker"
                                       name="start_date">
                            </div>
                        </div>

                        <div class="col-xl-6">
                            <div class="submit-field">
                                <h5>End Date</h5>
                                <!--<input type="text" class="with-border">-->
                                <input type="date" class="form-control" id="exp-end-date"
                                       data-toggle="datepicker" name="end_date">
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="submit-field">
                                <h5>Attachments (if any)</h5>
                                <div class="uploadButton margin-top-30">
                                    <input class="uploadButton-input" name="attachment" type="file"
                                           accept="image/*, application/pdf" id="upload" multiple/>
                                    <label class="uploadButton-button ripple-effect" for="upload">Upload
                                        Files</label>
                                    <span class="uploadButton-file-name"> Attach related documents </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12">
                            <div class="checkbox">
                                <input type="checkbox" id="currently-working" name="currently"
                                       value="currently-working" onclick="working()">
                                <label for="currently-working"><span class="checkbox-icon"></span> I am
                                    currently working in this position </label>
                            </div>
                        </div>

                    </div>
                    <div class="col-xl-12">
                        <button type="submit" class="button ripple-effect big margin-top-30"> Add</button>
                    </div>
                </div>
    </form>

    <hr>


    <!-- Added Education -->
    @if(!auth::user()->experiences->isEmpty())
        <div class="container-lg-stag">
            <div class="boxed-list margin-bottom-60">
                <div class="boxed-list-headline">
                    <h3><i class="icon-material-outline-business"></i> Experience List </h3>
                </div>
                <ul class="boxed-list-ul">
                    @foreach (auth::user()->experiences as $exp )
                        <li>
                            <div class="boxed-list-item">
                                <!-- Content -->
                                <div class="item-content">
                                    <h4>{{ $exp->job_title }}</h4>
                                    <div class="item-details margin-top-7">
                                        <div class="detail-item"><a href=""><i
                                                    class="icon-material-outline-business"></i>{{ $exp->company }}
                                            </a></div>
                                        <div class="detail-item"><i
                                                class="icon-material-outline-date-range"></i> {{ $exp->start_date }}
                                            - {{ $exp->end_date }}</div>
                                    </div>

                                    <ul class="boxed-list-ul attached-docs">
                                        @if($exp->attachment != '')
                                            <li><a href="{{ asset($exp->attachment) }}" target="_blank">attachment </a>
                                            </li>
                                        @endif
                                    </ul>

                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <!-- Education list end -->
    </div>
    </div>
    </div>
    <!-- Row / End -->

    </div>
    </div>
    <!-- Dashboard Content / End -->

    </div>
    <!-- Dashboard Container / End -->
    <script>
        function working() {
            var ischecked = document.getElementById("currently-working").checked;
            if (ischecked) {
                document.getElementById("exp-end-date").disabled = true;
            } else {
                document.getElementById("exp-end-date").disabled = false;
            }
        }
    </script>

@endsection
