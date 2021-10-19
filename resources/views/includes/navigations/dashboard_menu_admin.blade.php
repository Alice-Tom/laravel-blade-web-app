<ul data-submenu-title="Your Dashboard">
	<li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a href="{{ url('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
	<!--<li><a href="#"><i class="icon-material-outline-question-answer"></i> Messages <span class="nav-tag">2</span></a></li>-->
	<li class="{{ (request()->is('manage-jobs', 'add-job')) ? 'active' : '' }}"><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
		<ul>
			<li class="{{ (request()->is('manage-jobs')) ? 'active' : '' }}"><a href="{{ url('manage-jobs')}}">- Manage Jobs & Applicants </a></li>
			<li class="{{ (request()->is('add-job')) ? 'active' : '' }}"><a href="{{ url('add-job')}}">- Post a Job</a></li>
		</ul>	
	</li>
</ul>

<ul data-submenu-title="Account">
	<li class="{{ (request()->is('settings')) ? 'active' : '' }}"><a href="{{ url('settings')}}"><i class="icon-material-outline-settings"></i>Settings</a></li>
	<li>
			<a  href="{{ route('logout') }}"
			   onclick="event.preventDefault();
							 document.getElementById('logout-form').submit();">
							 <i class="icon-material-outline-power-settings-new"></i>
				{{ __('Logout') }}
			</a>

			<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
				@csrf
			</form>
	</li>
</ul>