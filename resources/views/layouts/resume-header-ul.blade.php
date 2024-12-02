@if(auth()->guard('web')->user())
<li class="nav-item dropdown profiledrop">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false">
    <span>{{auth()->guard('web')->user()->first_name}}</span>
    <img src="{{auth()->guard('web')->user()->profile_image ? auth()->guard('web')->user()->profile_image  : asset('assets/images/no-preview.jpeg')}}" id="user_image" class="img-fluid" alt="">
    </a>
    <div class="dropdown-menu">
    <ul>
        @php 
         $currentPlan = App\Models\Userplan::where('user_id', auth()->guard('web')->user()->id)->first();  
         $unreadmsg = App\Models\Message::where('receiver_id',auth()->guard('web')->user()->id)->where('read_status','false')->count();
        @endphp
        <li class="dropdown-menu-list"><a class="dropdown-item username" href="#">{{auth()->guard('web')->user()->first_name}} <span>{{auth()->guard('web')->user()->email}}</span></a></li>           
        @if($currentPlan)
        <li class="dropdown-menu-list"><a href="{{route('my-profile')}}"><i class="la la-user"></i>My Profile</a></li>    
        <li class="dropdown-menu-list"><a href="{{route('final-resume', auth()->guard('web')->user()->slug)}}" target="_blank"><i class="la la-file"></i>My Resume</a></li>
        <li class="dropdown-menu-list"><a href="{{route('design-resume')}}"><i class="la la-file-text-o"></i>Design</a></li>
        <li class="dropdown-menu-list"><a href="{{route('reset-password')}}"><i class="la la-lock"></i>Reset Password</a></li>
        <!--<li class="dropdown-menu-list"><a href="{{route('switch-interview')}}"><i class="la la-exchange"></i>Switch To Interview</a></li>-->
        <li class="dropdown-menu-list"><a href="{{route('message.index')}}"><i class="la la-sms"></i>Message @if($unreadmsg > 0) <span class="float-right">(<b class="text-danger"> {{$unreadmsg}} </b>)</span>@endif</a></li>
        <li class="dropdown-menu-list"><a href="{{route('job-preference.index')}}"><i class="la la-umbrella"></i>Job Preference</a></li>
        <li class="dropdown-menu-list"><a href="{{route('mysubscriptions.index')}}"><i class="la la-dollar-sign"></i>Manage Payment</a></li>
        @else
        <li class="dropdown-menu-list"><a href="{{route('create-resume')}}"><i class="la la-user"></i>My Profile</a></li>    
        <li class="dropdown-menu-list"><a href="{{route('create-resume', auth()->guard('web')->user()->slug)}}" target="_blank"><i class="la la-file"></i>My Resume</a></li>
        <li class="dropdown-menu-list"><a href="{{route('create-resume')}}"><i class="la la-file-text-o"></i>Design</a></li>
        <li class="dropdown-menu-list"><a href="{{route('create-resume')}}"><i class="la la-lock"></i>Reset Password</a></li>
        <!--<li class="dropdown-menu-list"><a href="{{route('switch-interview')}}"><i class="la la-exchange"></i>Switch To Interview</a></li>-->
        <li class="dropdown-menu-list"><a href="{{route('message.index')}}"><i class="la la-sms"></i>Message @if($unreadmsg > 0) <span class="float-right">(<b class="text-danger"> {{$unreadmsg}} </b>)</span>@endif</a></li>
        <li class="dropdown-menu-list"><a href="{{route('create-resume')}}"><i class="la la-umbrella"></i>Job Preference</a></li>
        <li class="dropdown-menu-list"><a href="{{route('mysubscriptions.index')}}"><i class="la la-dollar-sign"></i>Manage Payment</a></li>
        
        @endif
        
        <li class="dropdown-menu-list"><a href="{{route('logout')}}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"><i class="la la-sign-out"></i>Logout</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></li>
    </ul>             
    </div>
</li>
@else
<li class="nav-item">
    <a href="{{route('login')}}" class="nav-link">Log in</a>
</li>
@endif