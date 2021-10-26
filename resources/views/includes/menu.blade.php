<li class="has-chevron" id="company-dropdown-nav"> The company
    <svg class="chevdown" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M6.34317 7.75732L4.92896 9.17154L12 16.2426L19.0711 9.17157L17.6569 7.75735L12 13.4142L6.34317 7.75732Z"
            fill="currentColor"/>
    </svg>

    <ul class="dropmenu" id="company-dropdown">
        <li><a href="{{ url('about') }}"> About us </a></li>
        		<li> <a href="{{ url('team')}}#team"> The team </a></li>
        {{--		<li> <a href="{{ url('projects')}}"> Projects </a></li>--}}
    </ul>
</li>


<li class="has-chevron" id="services-drop-nav"> Services
    <svg class="chevdown" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M6.34317 7.75732L4.92896 9.17154L12 16.2426L19.0711 9.17157L17.6569 7.75735L12 13.4142L6.34317 7.75732Z"
            fill="currentColor"/>
    </svg>
    <ul id="services-dropdown" class="dropmenu">


         @foreach (App\Models\Service::all()->chunk(10) as $service )
            @php
                session(['counterServiceClass' => 1]);
            @endphp
            @foreach ($service as $service )
                @php
                    $service_slug = str_slug($service->title, '-');

                @endphp
                <li id="{{Session::get('counterServiceClass')}}" >
                    <a href='{{ url('service/'.$service->id.'/'.$service_slug) }}'>{{ $service->title }}</a>

                    <ul id="subservice-subtab">
                        @foreach ($service->subService as $sub )
                            @php
                                $sub_slug = str_slug($sub->title, '-');
                            @endphp
                            <li>
                                <a href="{{ url('service-child/'.$sub->id.'/'.$sub_slug) }}"> {{ $sub->title }}</a>
                            </li>
                        @endforeach


                    </ul>

                </li>
                @php
                    //updating service class for next service
                    session()->put('counterServiceClass', Session::get('counterServiceClass')+1);

                @endphp
            @endforeach

        @endforeach
    </ul>

</li>

<li class="has-chevron" id="solution-drop-nav"> Solutions
    <svg class="chevdown" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M6.34317 7.75732L4.92896 9.17154L12 16.2426L19.0711 9.17157L17.6569 7.75735L12 13.4142L6.34317 7.75732Z"
            fill="currentColor"/>
    </svg>
    <ul class="dropmenu" id="solution-dropdown">
        <li><a href="{{ url('/expert')}}"> Experts </a></li>
        <li><a href="{{ url('#')}}"> Job Vacancies </a></li>
        {{-- <li><a href="{{ url('#')}}"> Experts </a></li>
        <li><a href="{{ url('#')}}"> Experts </a></li> --}}

    </ul>
</li>

<li class="">
    <a href="{{ url('training')}}"> Training </a>
</li>
<li class="">
    <a href="{{ url('resources')}}"> Resources </a>
</li>
<li class="mobile-show">
    <hr>
    @guest
        <a href="{{ url('login')}}">
            <button class="btn btn-st btn-st-primary magic-hover magic-hover__square"> Login/Register</button>
        </a>
    @else
        <a href="{{ url('dashboard')}}">
            <button class="btn btn-st btn-st-primary magic-hover magic-hover__square"> Dashboard</button>
        </a>

    <!-- <a  href="{{ route('logout') }}"
	onclick="event.preventDefault();
				  document.getElementById('logout-form').submit();">
				  <button class="btn btn-st btn-st-primary"> Dashboard</button>
	</a> -->

    <!-- <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
        </form> -->
    @endguest
</li>

<div class="floating-search" style="display: none;">
    <input class="with-border">
    <a class="srch-btn">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M18.319 14.4326C20.7628 11.2941 20.542 6.75347 17.6569 3.86829C14.5327 0.744098 9.46734 0.744098 6.34315 3.86829C3.21895 6.99249 3.21895 12.0578 6.34315 15.182C9.22833 18.0672 13.769 18.2879 16.9075 15.8442C16.921 15.8595 16.9351 15.8745 16.9497 15.8891L21.1924 20.1317C21.5829 20.5223 22.2161 20.5223 22.6066 20.1317C22.9971 19.7412 22.9971 19.1081 22.6066 18.7175L18.364 14.4749C18.3493 14.4603 18.3343 14.4462 18.319 14.4326ZM16.2426 5.28251C18.5858 7.62565 18.5858 11.4246 16.2426 13.7678C13.8995 16.1109 10.1005 16.1109 7.75736 13.7678C5.41421 11.4246 5.41421 7.62565 7.75736 5.28251C10.1005 2.93936 13.8995 2.93936 16.2426 5.28251Z"
                  fill="currentColor"/>
        </svg>
    </a>
</div>
