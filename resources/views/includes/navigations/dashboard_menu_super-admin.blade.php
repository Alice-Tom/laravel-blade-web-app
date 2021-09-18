<ul data-submenu-title="Frontend">
	<li class="active"><a href="{{ url('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
	<li><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Pages </a>
		<ul>
			<li><a href="{{ url('all-pages')}}"> All Pages </a></li>
			<!--<li><a href="{{ url('jobs')}}"> Add New Page</a></li>-->
		</ul>
	</li>
	<li><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Menu Categories </a>
		<ul>
			<li><a href="{{ url('jobs')}}"> List </a></li>
			<li><a href="{{ url('jobs')}}"> Add New </a></li>
		</ul>
	</li>
	<li><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Services </a>
		<ul>
			<li><a href="{{ url('new-service')}}"> Add New </a></li>
			<li><a href="{{ url('all-services')}}"> List </a></li>
			<li><a href="{{ url('services-categories')}}"> Services Categories </a></li>
			<li><a href="{{ url('services-categories')}}"> Service Items </a>
				<ul>
					<li><a href="{{ url('service-item-list')}}"> List </a></li>
					<li><a href="{{ url('new-service-item')}}"> Add New </a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Solutions </a>
		<ul>
			<li><a href="{{ url('jobs')}}"> List </a></li>
			<li><a href="{{ url('jobs')}}"> Services Categories </a></li>
			<li><a href="{{ url('jobs')}}"> Add New </a></li>
		</ul>
	</li>
	<li><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Training </a>
		<ul>
			<li><a href="{{ url('all-training')}}"> Calendar </a></li>
			<li><a href="{{ url('new-training')}}"> Add New </a></li>
		</ul>
	</li>
	<li><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i>Resources </a>
		<ul>
			<li><a href="{{ url('jobs')}}"> List </a></li>
			<li><a href="{{ url('jobs')}}"> Add New </a></li>
		</ul>
	</li>
</ul>

<ul data-submenu-title="Jobs Portal">
	<li><a href=""><i class="icon-material-outline-file-copy"></i> Employers Management </a>
		<ul>
			<li><a href="{{ url('show-employers')}}"> All Employers </a></li>
			{{-- <li><a href="{{ url('jobs')}}"> Add new employer </a></li> --}}
		</ul>
	</li>
	<li><a href=""><i class="icon-material-outline-file-copy"></i> Jobs Management </a>
		<ul>
			<li><a href="{{ url('jobs')}}"> All Jobs </a></li>
			<li><a href="{{ url('add-job')}}"> Add new job </a></li>
		</ul>
	</li>
	<li><a ><i class="icon-material-outline-file-copy"></i> Applicants Management </a>
		<ul>
			<li><a href="{{ url('show-applicants')}}"> All Applicants </a></li>
		</ul>
	</li>

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