
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
						<span class=<<<<<<< feature"hamburger-box">
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


                <!-- Row -->
                <div class="row">

                    <!-- Dashboard Box -->
                    <div class="col-xl-12">
                        <div class="dashboard-box margin-top-0">

                            <!-- Headline -->
                            <div class="headline">
                                <h3><i class="icon-material-outline-account-circle"></i> Expert Details</h3>
                            </div>

                            <div class="content with-padding padding-bottom-0">

                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar-wrapper" data-tippy-placement="bottom"
                                             title="Change Avatar">
                                            <img class="profile-pic"
                                                 src="{{ asset($expert->avator??'images/user-avatar-placeholder.png') }}"
                                                 alt=""/>

                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="row">

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>First Name</h5>
                                                    <input disabled type="text" class="with-border" name="firstname"
                                                           value="{{ $expert->firstname }}">
                                                </div>
                                            </div>

                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Last Name</h5>
                                                    <input disabled type="text" class="with-border" name="lastname"
                                                           value="{{ $expert->lastname }}">
                                                </div>
                                            </div>


                                            <div class="col-xl-6">
                                                <div class="submit-field">
                                                    <h5>Email</h5>
                                                    <input type="text" class="with-border"
                                                           value="{{ $expert->email }}" disabled>
                                                </div>
                                            </div>
                                            <div class="account-type">
                                                <div>
                                                    <h5>About Expert (maximum 100 words) </h5>
                                                    <div class="col-xl-12">

                                                        <textarea maxlength="600" disabled rows="5"
                                                                  name="about">{{$expert->about}}  </textarea>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                  <!--Skills -->

                    <div class="margin-top-30 margin-left-30">
                        <h3><i class="icon-material-outline-business "></i> Expert Skills List </h3>
                        <ol class="list-group list-group-numbered">
                            @foreach($skills  as $skill)
                                <li class="list-group-item">{{$skill->skill}}</li>
                            @endforeach
                        </ol>
                    </div>


                    <!-- Added Education -->
                    @if(!auth::user()->education->isEmpty())
                        <div class="container-lg-stag">
                            <div class="boxed-list margin-bottom-60">
                                <div class="boxed-list-headline">
                                    <h3><i class="icon-material-outline-business"></i> Education List </h3>
                                </div>
                                <ul class="boxed-list-ul">
                                    @foreach ($educations as $edu )
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


            @if(!$educations->isEmpty())
                <div class="container-lg-stag">
                    <div class="boxed-list margin-bottom-60">
                        <div class="boxed-list-headline">
                            <h3><i class="icon-material-outline-business"></i> Education List </h3>
                        </div>
                        <ul class="boxed-list-ul">
                            @foreach ($educations as $edu )
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



        <!-- Added Education -->
            @if(!$experiences->isEmpty())
                <div class="container-lg-stag">
                    <div class="boxed-list margin-bottom-60">
                        <div class="boxed-list-headline">
                            <h3><i class="icon-material-outline-business"></i> Experience List </h3>
                        </div>
                        <ul class="boxed-list-ul">
                            @foreach ($experiences as $exp )
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
            <div class=" container-lg-stag">
                <div class="row">
                    <div class="col-8">
                        <form method="post" action="{{ url('expertShortDescription') }}">
                            @csrf
                            <h5>Short Expert Description (maximum 50 words) </h5>
                            <input type="hidden" name="expert_id" value="{{$expert->id}}">
                            <textarea maxlength="300" rows="5"
                                      name="short_description">{{$expert->short_description}}  </textarea>

                            <h5>Expert years of experience</h5>
                                <input type="number" name="experience_years" value="{{$expert->experience_years}}">

                            <button class="button ripple-effect big margin-top-30" type="submit"> Update</button>
                        </form>
                    </div>
                    <div class="col-4 form-check mt-3">

                        @if($expert->feature)Approve
                        <a href="{{url('update-feature/'.$expert->id)}}" class="button gray ripple-effect ico"
                           title="Activate">
                            <i class="{{'icon-feather-unlock' }}"></i>

                        </a>
                        @else
                            <a href="{{url('update-feature/'.$expert->id)}}" class="button gray ripple-effect ico"
                               title="Deactivate">
                                <i class="{{'icon-feather-lock' }}"></i>

                            </a>
                        @endif
                    </div>
                </div>

            </div>

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


@endsection

