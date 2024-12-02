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
    <body class="bodybg">
    <section class="loginsec">
        <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="loginseclogo"> 
                <a href="{{url('/')}}" class="loginlogo">
                    <img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt="">
                    <!--<span class="logotext">jobgetr.ai</span> -->
                    <!--        <span class="logobg">-->
                    <!--            <ul>-->
                    <!--              <li><i class="la la-star"></i></li>-->
                    <!--              <li><i class="la la-star"></i></li>-->
                    <!--              <li><i class="la la-star"></i></li>-->
                    <!--              <li><i class="la la-star"></i></li>-->
                    <!--              <li><i class="la la-star"></i></li>-->
                    <!--            </ul>-->
                    <!--            <label>Really great</label>-->
                    <!--          </span>-->
                    </a>
                </div>
                <div class="loginpage">
                <div class="logindesign">
                                <div class="logindesign-heading">
                            <h2>Create an account</h2>
                            <p>Create a FREE Account to Download your Document</p>
                        </div>
                        <form method="post" action="{{ route('user.create') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="First Name" id="fname">
                                @error('first_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="Last Name" id="lname">
                                @error('last_name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            </div>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address" id="email">
                                @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <div class="eye-button">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" id="pwd">
                                    <button id="eye_btn" type="button"> <i class="fa fa-eye" aria-hidden="true"></i></button>
                                </div>
                               
                                @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            <div class="form-group form-check checkdesign">
                                <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" required>By signing up you agree to our <a href="{{route('terms-of-use')}}">Terms of Service</a> and <a href="{{route('privacy-policy')}}">Privacy Policy</a>
                                </label>
                            </div>
                            <div class="form-group signinmodalbtn">
                                <button type="button" style="display:none" name="otp_popup" class="btn btn-info" id="otp_popup_model" class="fade" data-bs-toggle="modal" data-bs-target="#OTPModal"  >Create Account</button>
                                <button type="submit" class="btn btn-info">Create Account</button>
                            </div>
                            </form>
                            <div class="form-group signinaccount">
                                <p>Already have an account? <a href="{{route('login')}}">Sign in</a></p>
                            </div>
                            <div class="signinoption">
                                <ul>
                                <li><a href="#"><i class="la la-facebook"></i></a></li>
                                <li><a href="#"><i class="la la-google"></i></a></li>
                                <!--  <li><a href="#"><i class="la la-linkedin"></i></a></li> -->
                                </ul>
                            </div>
            </div>
            </div>
            </div>
            </div>
        </div>
    </section>
<div class="modal fade modaldesign"  id="OTPModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Complete Email Verification</h5>
        
      </div>
      <form action="{{route('validate-user-otp')}}" method="post">
        @csrf
        <input type="hidden" name="email" value="{{old('email')}}">
        <div class="modal-body">
            <p id="otp_text_message" >We have sent you an OTP to your email address. Please check your inbox and enter the OTP below to verify your email.</p>
          <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                  <label for="email_otp">OTP</label>
                  <input type="number" class="form-control" name="email_otp" id="email_otp" placeholder="OTP" autofocus>
                  @if(session('error'))
                    <span class="invalid-feedback" style="display:block" role="alert">
                        <strong id="">{{session('error')}}</strong>
                    </span>
                  @endif
              </div>
              <div class="reset_otplink"><button type="button" class="btn btn-primary" id="reset_otp">Click here to reset OTP</button></div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="otp_close_popup">Close</button>
          <button type="submit" class="btn btn-primary" id="validate_otp">Validate</button>
          
        </div>
      </form>
    </div>
  </div>
</div>

    </body>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script src= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
integrity= "sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
crossorigin="anonymous"> 
    </script> 

@if(session('model-open'))
  <script>
      $(document).ready(function() {
        $('#otp_popup_model').click();
      });
  </script>
@endif
<script>

    $(document).ready(function(){
        $('#eye_btn').click(function(){
            var pwdField = $('#pwd');
            var pwdFieldType = pwdField.attr('type');
            
            // Toggle between password and text types
            if(pwdFieldType == 'password') {
                pwdField.attr('type', 'text');
                $('#eye_btn i').removeClass('fa-eye').addClass('fa-eye-slash');
            } else {
                pwdField.attr('type', 'password');
                $('#eye_btn i').removeClass('fa-eye-slash').addClass('fa-eye');
            }
        });
    });
  $('body').delegate('#reset_otp', 'click', function(){
    let email = $('#email').val();
    let csrfToken = $('meta[name="csrf-token"]').attr('content');
    let formData = new FormData();
    formData.append('email', email);
    $.ajax({
        url: '{{route("resend-otp")}}',
        type: 'POST',
        data: formData,
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        processData: false, 
        contentType: false, 
        success: function(response) {
            if(response.status == 200){
                $('#otp_text_message').html('');
                $('#otp_text_message').html('OTP Resent Successfully');
            }
        },
        error: function (xhr, status, error) {
            console.error('Error:', error);
            if (xhr.status === 422) {
                // If validation fails, update the UI to display errors
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    $('#' + key + '_err').html(value[0]);
                });
                btn_element.val('Next');
            }
        }
    });
  });
</script>


</html>



  

