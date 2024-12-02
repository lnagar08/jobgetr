<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Resume Builder</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}"> 
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/line-awesome.min.css')}}">  
    </head>
    <body class="bodybg">
        <section class="loginsec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="loginseclogo"> 
                        <a href="{{url('/')}}" class="loginlogo">
                            <img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="">
                            <!--<span class="logotext">jobgetr.ai</span> -->
                            <!--<span class="logobg">-->
                            <!--    <ul>-->
                            <!--      <li><i class="la la-star"></i></li>-->
                            <!--      <li><i class="la la-star"></i></li>-->
                            <!--      <li><i class="la la-star"></i></li>-->
                            <!--      <li><i class="la la-star"></i></li>-->
                            <!--      <li><i class="la la-star"></i></li>-->
                            <!--    </ul>-->
                            <!--    <label>Really great</label>-->
                            <!--  </span>-->
                            </a> 
                        </div>
                        <div class="loginpage">
                        <div class="logindesign">
                                    
                                <div class="logindesign-heading">
                                    <h2>Welcome back!</h2>
                                    <p>Log in to your account</p>
                                </div>
                                 @if(isset($error))
                                  <div class="alert alert-danger">
                                      {{ $error }}
                                  </div>
                                  @endif
                                  @if($errors->has('email'))
                                      <div class="alert alert-danger">
                                          {{ $errors->first('email') }}
                                      </div>
                                  @endif
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required autocomplete="email" autofocus placeholder="Email Address" id="email">
                                        @if(session('email'))
                                          <span class="invalid-feedback" role="alert" style="display:block;">
                                              <strong>{{ session('email') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" id="pwd">
                                         @if(session('password'))
                                          <span class="invalid-feedback" role="alert" style="display:block;">
                                              <strong>{{ session('password') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                    <div class="form-group forgotpassword">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">Forgot your Password?</a>
                                        @endif
                                    </div>
                                    <div class="form-group signinmodalbtn">
                                        <button type="submit" class="btn btn-info">Sign In</button>
                                    </div>
                                    </form>
                                    <div class="form-group signinaccount">
                                        <p>Don't have a Resumebuilder account? <a href="{{route('register')}}">Register for free</a></p>
                                    </div>
                                    <div class="signinoption">
                                        <ul>
                                        <!--<li><a href="#"><i class="la la-facebook"></i></a></li>-->
                                        <li><a href="#"><i class="la la-google"></i></a></li>
                                        <!-- <li><a href="#"><i class="la la-linkedin"></i></a></li> -->
                                        </ul>
                                    </div>
                    </div>
                </div>
                </div>
                </div>
            </div>
        </section>

    </body>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script>
  jQuery(document).ready(function($) {
    $('.loop').owlCarousel({
      center: true,
      items: 1,
      loop: true,
      margin: 20,
      responsive: {
        500: {
          items: 2
        },
        900: {
          items: 2
        },
        1200: {
          items: 4
        }
      }
    });
    $( ".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $( ".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
  });
</script>
<script>
  jQuery(document).ready(function($) {
    $('#owl-demo1').owlCarousel({
      center: true,
      items: 1,
      loop: true,
      margin: 20,
      responsive: {
        500: {
          items: 2
        },
        900: {
          items: 2
        },
        1200: {
          items: 3
        }
      }
    });
    $( ".owl-prev").html('<i class="fa fa-angle-left" aria-hidden="true"></i>');
    $( ".owl-next").html('<i class="fa fa-angle-right" aria-hidden="true"></i>');
  });
</script>
</html>



  
