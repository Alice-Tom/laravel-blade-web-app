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
                <ul>
                    @foreach($clients as $client)
                        <div class="mb-4">
                            <div class="avatar-wrapper">
                                <img src="{{$client->cover}}" class="profile-pic" role="img"
                                     alt="solutionstag clients" title="client"/>

                            </div>

                            <a href={{'delete-client/'.$client->id}}>
                                <button class="btn btn-danger">delete {{$client->name}}</button>
                            </a>
                        </div>
                    @endforeach

                </ul>


            </div>
        </div>
        <!-- Dashboard Content / End -->

    </div>
    <!-- Dashboard Container / End -->

    </div>
    <!-- Wrapper / End -->

@endsection
