<ul data-submenu-title="Frontend">
	<li class="{{ (request()->is('dashboard*')) ? 'active' : '' }}"><a href="{{ url('dashboard')}}"><i class="icon-material-outline-dashboard"></i> Dashboard</a></li>
	
	<li class="{{ (request()->is('all-pages*')) ? 'active' : '' }}"><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Pages </a>
		<ul>
			<li class="{{ (request()->is('all-pages*')) ? 'active' : '' }}"> <i class="fas fa-clipboard-list"></i><a href="{{ url('all-pages')}}">- All Pages </a></li>
			<!--<li><a href="{{ url('jobs')}}"> Add New Page</a></li>-->
		</ul>
	</li>

	<li class="{{ (request()->is('jobs', 'add-job')) ? 'active' : '' }}"><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Menu Categories </a>
		<ul>
			<li><a href="{{ url('jobs')}}">- List </a></li>
			<li><a href="{{ url('add-job')}}">- Add New </a></li>
		</ul>
	</li>

	<li class="{{ (request()->is('new-service', 'all-services', 'services-categories', 'service-item-list', 'new-service-item')) ? 'active' : '' }}"><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Services </a>
		<ul>
			<li class="{{ (request()->is('new-service')) ? 'active' : '' }}"><a href="{{ url('new-service')}}">- Add New </a></li>
			<li class="{{ (request()->is('all-services')) ? 'active' : '' }}"><a href="{{ url('all-services')}}">- List </a></li>
			<li class="{{ (request()->is('services-categories')) ? 'active' : '' }}"><a href="{{ url('services-categories')}}">- Services Categories </a></li>
			<li class="{{ (request()->is('services-categories')) ? 'active' : '' }}"><a href="{{ url('services-categories')}}">- Service Items </a>
				<ul>
					<li class="{{ (request()->is('service-item-list')) ? 'active' : '' }}"><a href="{{ url('service-item-list')}}">- List </a></li>
					<li class="{{ (request()->is('new-service-item')) ? 'active' : '' }}"><a href="{{ url('new-service-item')}}">- Add New </a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li class="{{ (request()->is(' ', 'edit-service', 'new-service')) ? 'active' : '' }}"><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Solutions </a>
		<ul>
			<li class="{{ (request()->is('all-experts')) ? 'active' : '' }}"><a href="{{ url('all-experts')}}">- List </a></li>
			<li class="{{ (request()->is('edit-service')) ? 'active' : '' }}"><a href="{{ url('edit-service')}}">- Services Categories </a></li>
			<li class="{{ (request()->is('new-service')) ? 'active' : '' }}"><a href="{{ url('new-service')}}">- Add New </a></li>
		</ul>
	</li>

	<li class="{{ (request()->is('all-training', 'new-training')) ? 'active' : '' }}"><a href="{{ url('jobs')}}"> <i class="icon-material-outline-business-center"></i> Training </a>
		<ul>
			<li class="{{ (request()->is('all-training')) ? 'active' : '' }}"><a href="{{ url('all-training')}}">- Calendar </a></li>
			<li class="{{ (request()->is('new-training')) ? 'active' : '' }}"><a href="{{ url('new-training')}}">- Add New </a></li>
		</ul>
	</li>

	<li class="{{ (request()->is('all-blog', 'new-blog')) ? 'active' : '' }}"><a href="{{ url('all-blog')}}"> <i class="icon-material-outline-business-center"></i>Resources </a>
		<ul>
			<li class="{{ (request()->is('all-blog')) ? 'active' : '' }}"><a href="{{ url('all-blog')}}">- List </a></li>
			<li class="{{ (request()->is('new-blog')) ? 'active' : '' }}"><a href="{{ url('new-blog')}}">- Add New </a></li>
		</ul>
	</li>
</ul>

<ul data-submenu-title="Jobs Portal">
	<li class="{{ (request()->is('show-employers*')) ? 'active' : '' }}"><a href=""><i class="icon-material-outline-file-copy"></i> Employers Management </a>
		<ul>
			<li><a href="{{ url('show-employers')}}">- All Employers </a></li>
			{{-- <li><a href="{{ url('jobs')}}"> Add new employer </a></li> --}}
		</ul>
	</li>

	<li class="{{ (request()->is('jobs', 'add-job')) ? 'active' : '' }}"><a href=""><i class="icon-material-outline-file-copy"></i> Jobs Management </a>
		<ul>
			<li class="{{ (request()->is('jobs')) ? 'active' : '' }}"><a href="{{ url('jobs')}}">- All Jobs </a></li>
			<li class="{{ (request()->is('add-job')) ? 'active' : '' }}"><a href="{{ url('add-job')}}">- Add new job </a></li>
		</ul>
	</li>

	<li class="{{ (request()->is('all-experts*')) ? 'active' : '' }}"><a href=""><i class="icon-material-outline-file-copy"></i> Experts Management </a>
		<ul>
			<li><a href="{{ url('all-experts')}}">- All Experts </a></li>
		</ul>
	</li>

</ul>

<ul data-submenu-title="Account">
	<li class="{{ (request()->is('settings*')) ? 'active' : '' }}"><a href="{{ url('settings')}}"><i class="icon-material-outline-settings"></i> Settings</a></li>
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
