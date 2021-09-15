@foreach (auth::user()->unreadNotifications as $notification)
    @if($notification->type=='App\Notifications\NewJob')
        <li>
            <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
            <span class="notification-text">
                <strong>New Job To Activate</strong>  <a href="">{{$notification->data['title']}}</a>
            </span>
            
            <div class="buttons-to-right">
                <a href="{{ url('job-visibility/'.$notification->data['id']) }}" class="button ripple-effect ico" title="Activate" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
            </div>
        </li>
    @endif

    @if($notification->type == 'App\Notification\ActivatedJob')
        @if($notification->type=='App\Notifications\NewJob')
        <li>
            <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
            <span class="notification-text">
                <strong>Job Approved</strong>  <a href="">{{$notification->data['title']}}</a>
            </span>
            
            <div class="buttons-to-right">
                <a href="{{ url('mark-as-read/'.$notification->id) }}" class="button ripple-effect ico" title="Activate" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
            </div>
        </li>
        @endif
    @endif

    @if($notification->type == 'App\Notifications\NewJobExpert')
    <li>
        <span class="notification-icon"><i class="icon-material-outline-group"></i></span>
        <span class="notification-text">
            <strong>New Job</strong>  <a href="">{{$notification->data['title']}}</a>
        </span>
        
        <div class="buttons-to-right">
            <a href="{{ url('mark-as-read/'.$notification->id) }}" class="button ripple-effect ico" title="Activate" data-tippy-placement="left"><i class="icon-feather-check-square"></i></a>
        </div>
    </li>
    @endif
@endforeach
