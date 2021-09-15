<ul data-submenu-title="Your Dashboard">
	<li class="active"><a href="{{ url('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
	<li><a href="#"><i class="icon-material-outline-business-center"></i> Jobs</a>
		<ul>
			<li><a href="{{ url('my-applications')}}">My Applications <span class="nav-tag">{{ auth::user()->applications->count() }}</span></a></li>
			<li><a href="{{ url('jobs')}}">Job</a></li>
		</ul>	
	</li>
</ul>

<ul data-submenu-title="Your Profile & CV">
	<li><a href="{{ url('cv-profile')}}"><i class="icon-material-outline-file-copy"></i> CV & Profile </a></li>

</ul>

<ul data-submenu-title="Account">
	<li><a href="{{ url('settings')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
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