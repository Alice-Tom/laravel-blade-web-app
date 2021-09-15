@if(auth::user()->account_type == 'admin')
@include('includes.navigations.dashboard_menu_super-admin')
@elseif(auth::user()->account_type == 'expert')
@include('includes.navigations.dashboard_menu_expert')
@else
@include('includes.navigations.dashboard_menu_admin')
@endif