<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{@$page_title ? @$page_title : 'Resume Builder' }}</title>
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
<div class="dashboardheader">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="dashboard-col navbar">
          <div class="dashboardleft">
          <a href="{{url('/')}}" class="dashboardlogo">
              <img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="">
              <!--<span class="logotext">jobgetr.ai</span>-->
              </a>
          @php 
            $url =  Route::current()->getName(); 

          @endphp
            <ul class="header_btn_li">
                @if($url != "upload-my-resume.index")
                  <li class="{{$url == 'create-resume'? 'active':'' }}" id="write_li"><a href="{{route('create-resume')}}"><img src="{{asset('assets/images/resumestab1.png')}}" class="img-fluid" alt="">Write</a></li> 
                    @if(auth()->guard('web')->user())
                        @php 
                            $currentPlan = App\Models\Userplan::where('user_id', auth()->guard('web')->user()->id)->first();  
                        @endphp
                        @if( $currentPlan)
                          <li id="design_li" class="{{$url == 'design-resume'? 'active':'' }}"><a href="{{route('design-resume')}}"><img src="{{asset('assets/images/resumestab2.png')}}" class="img-fluid" alt="">Design</a></li>
                              @php 
                                  $user_template = App\Models\UserResumeTemplate::where('user_id', auth()->guard('web')->user()->id)->first();
                              @endphp
                            
                          <li class="{{$url == 'improve' ? 'active' : ''}}" style="display:{{$user_template ? 'inline-block' : 'none'}}" id="improve_li"><a href="{{route('improve')}}"><img src="{{asset('assets/images/resumestab3.png')}}" class="img-fluid" alt="">Share</a></li>
                          @endif
                    @else
                    <li id="design_li" class="{{$url == 'design-resume'? 'active':'' }}"><a href="{{route('create-resume')}}"><img src="{{asset('assets/images/resumestab2.png')}}" class="img-fluid" alt="">Design</a></li>
                    @endif
                @else
                 <li id="write_li"><a href="{{route('create-resume')}}"><img src="{{asset('assets/images/resumestab1.png')}}" class="img-fluid" alt="">Build my resume</a></li>
                @endif
            </ul>
          </div>
          <ul class="navbar-nav ml-auto" id="ul_content"> 
            @include('layouts/resume-header-ul')
          </ul>
        </div>
      </div>
    </div>
  </div>  
</div>
<div class="mobilenav">
  <div class="dashboardleft">
    <ul class="header_btn_li">

        <li class="{{$url == 'create-resume'? 'active':'' }}" id="write_li"><a href="{{route('create-resume')}}"><img src="{{asset('assets/images/resumestab1.png')}}" class="img-fluid" alt="">Write</a></li> 
        @if(auth()->guard('web')->user())
            @php 
                $currentPlan = App\Models\Userplan::where('user_id', auth()->guard('web')->user()->id)->first();  
            @endphp
            @if( $currentPlan)
                <li class="{{$url == 'design-resume'? 'active':'' }}"  id="design_li"><a href="{{route('design-resume')}}"><img src="{{asset('assets/images/resumestab2.png')}}" class="img-fluid" alt="">Design</a></li>
                @php 
                  $user_template = App\Models\UserResumeTemplate::where('user_id', auth()->guard('web')->user()->id)->first();
                @endphp
                <li class="{{$url == 'improve' ? 'active' : ''}}" id="improve_li" style="display:{{$user_template ? 'inline-block' : 'none'}}" ><a href="{{route('improve')}}" id="improve_li"><img src="{{asset('assets/images/resumestab3.png')}}" class="img-fluid" alt="">Share</a></li>
            @endif
        @else
            <li id="design_li" class="{{$url == 'design-resume'? 'active':'' }}"><a href="{{route('create-resume')}}"><img src="{{asset('assets/images/resumestab2.png')}}" class="img-fluid" alt="">Design</a></li>
        @endif
    </ul>
  </div>
</div>



</body>
</html>


