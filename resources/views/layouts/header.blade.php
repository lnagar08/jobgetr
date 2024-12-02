<!DOCTYPE html>
<html lang="en">
<head>
  <title>Resume Builder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}"> 
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/line-awesome.min.css')}}">  
</head>
<body>
  <!--  <div class="topbar">-->
  <!--  <a href="#">Small runs circles around big. Watch our latest video <strong>Old vs. New</strong> championing the underdogs, like you!</a>-->
  <!--</div>-->
<header class="header-sec">
  <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{url('/')}}">
        <img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="">
      <!--  <span class="logotext">jobgetr.ai</span>-->
      <!--  <span class="logobg">-->
      <!--  <ul>-->
      <!--    <li><i class="la la-star"></i></li>-->
      <!--    <li><i class="la la-star"></i></li>-->
      <!--    <li><i class="la la-star"></i></li>-->
      <!--    <li><i class="la la-star"></i></li>-->
      <!--    <li><i class="la la-star"></i></li>-->
      <!--  </ul>-->
      <!--  <label>Really great</label>-->
      <!--</span>-->
        </a>
   
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto" id="myNavbar"> 

            <li class="nav-item">
            <a class="nav-link" href="{{route('create-resume')}}">Build my resume</a>
            </li>  
            <li class="nav-item">
                @if(auth()->guard('web')->user())
                <a class="nav-link" href="{{route('upload-my-resume.index')}}">Upload my Resume</a>
                @else
                <a class="nav-link" href="#">Upload my Resume</a>
                @endif
            </li>
            <li class="nav-item">
            <!--<a class="nav-link" href="{{route('blog')}}">Blog</a>-->
            </li> 
            @if(auth()->guard('web')->user())
                
              <li class="nav-item dropdown dropdownprofile">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" aria-expanded="false">
                  <span>{{auth()->guard('web')->user()->first_name}}</span>
                  <img src="{{auth()->guard('web')->user()->profile_image ? auth()->guard('web')->user()->profile_image  : asset('assets/images/no-preview.jpeg')}}" class="img-fluid" alt="">
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
                    <li class="dropdown-menu-list"><a href="{{route('job-preference.index')}}"><i class="la la-umbrella"></i>Job Preference</a></li>
                    <li class="dropdown-menu-list"><a href="{{route('message.index')}}"><i class="la la-sms"></i>Message @if($unreadmsg > 0) <span class="float-right">(<b class="text-danger"> {{$unreadmsg}} </b>)</span>@endif</a></li>
                    <li class="dropdown-menu-list"><a href="{{route('mysubscriptions.index')}}"><i class="la la-dollar-sign"></i>Manage Payment</a></li>
                    @else
                    
                        <li class="dropdown-menu-list"><a href="{{route('create-resume')}}"><i class="la la-user"></i>My Profile</a></li>    
                        <li class="dropdown-menu-list"><a href="{{route('create-resume', auth()->guard('web')->user()->slug)}}" target="_blank"><i class="la la-file"></i>My Resume</a></li>
                        <li class="dropdown-menu-list"><a href="{{route('create-resume')}}"><i class="la la-file-text-o"></i>Design</a></li>
                        <li class="dropdown-menu-list"><a href="{{route('create-resume')}}"><i class="la la-lock"></i>Reset Password</a></li>
                        <!--<li class="dropdown-menu-list"><a href="{{route('switch-interview')}}"><i class="la la-exchange"></i>Switch To Interview</a></li>-->
                        <li class="dropdown-menu-list"><a href="{{route('message.index')}}"><i class="la la-sms"></i>Message @if($unreadmsg > 0) <span class="float-right">(<b class="text-danger"> {{$unreadmsg}} </b>)</span>@endif</a></li>
                        <li class="dropdown-menu-list"><a href="{{route('job-preference.index')}}"><i class="la la-umbrella"></i>Job Preference</a></li>
                        <li class="dropdown-menu-list"><a href="{{route('mysubscriptions.index')}}"><i class="la la-dollar-sign"></i>Manage Payment</a></li>
                    @endif
                    <li class="dropdown-menu-list"><a href="{{route('logout')}}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="la la-sign-out"></i>Logout</a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                      </form>
                    </li>
                  </ul>             
                </div>
              </li> 
            @else
              <li class="nav-item linkbtn">
              <a class="nav-link" href="{{route('login')}}">Log in</a>
              </li> 
            @endif    
                
              
            
        </ul>
    </div>  
    </nav>
    </div>
    </div>
    </div>
</header>

</body>
</html>