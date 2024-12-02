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
                                <h2>Create New Password</h2>
                                <p>Your new password must be different from previous used passwords.</p>

                                
                            </div>
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">   
                                <input id="email" type="hidden"  name="email" value="{{ isset($_GET['email']) ? $_GET['email'] : '' }}" required autocomplete="email">

                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" name="password" class="form-control" required placeholder="Enter New Password" id="pwd">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert" style="display:block;">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" required class="form-control" placeholder="Enter Confirm password" id="pwd">
                                </div>
                                <div class="form-group signinmodalbtn">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </form>
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
</html>



  


