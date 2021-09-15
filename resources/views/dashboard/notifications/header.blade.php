@foreach (auth::user()->unreadNotifications as $notification)
    @if($notification->type=='App\Notifications\NewJob')
        <li class="notifications-not-read">
            <a href="">
                <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
                <span class="notification-text">
                    <strong>  New Job To Activate</strong>  <span class="color">{{$notification->data['title']}}</span>
                </span>
            </a>
        </li>
    @endif

    @if($notification->type=='App\Notifications\ActivatedJob')
    <li class="notifications-not-read">
        <a href="">
            <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
            <span class="notification-text">
                <strong>Job Approved</strong>  <span class="color">{{$notification->data['title']}}</span>
            </span>
        </a>
    </li>
    @endif
    @if($notification->type == 'App\Notifications\NewJobExpert')
    <li class="notifications-not-read">
        <a href="">
            <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
            <span class="notification-text">
                <strong>New Job</strong>  <span class="color">{{$notification->data['title']}}</span>
            </span>
        </a>
    </li>
    @endif
@endforeach