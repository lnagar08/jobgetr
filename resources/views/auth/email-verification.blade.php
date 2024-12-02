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
                                    <h2>Complete Email Verification!</h2>
                                    <p id="otp_text_message">We have sent you an OTP to your email address. Please check your inbox and enter the OTP below to verify your email.</p>
                                    
                                </div>
                                  
                                <form method="post" action="{{ route('register') }}">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{$user->id}}">
                                    <input type="hidden" name="first_name" value="{{$user->first_name}}">
                                    <input type="hidden" name="last_name" value="{{$user->last_name}}">
                                    <input type="hidden" name="email" id="email" value="{{$user->email}}">
                                    <div class="form-group">
                                        <label>OTP</label>
                                        <input type="number" name="email_otp" class="form-control" required placeholder="OTP" id="">
                                        @if(session('error'))
                                          <span class="invalid-feedback" role="alert" style="display:block;">
                                              <strong>{{ session('error') }}</strong>
                                          </span>
                                        @endif
                                    </div>
                                    <div class="row">
                                      <div class="col-md-6">
                                        <div class="form-group signinmodalbtn">
                                          <button type="submit" class="btn btn-info">Verify OTP</button>
                                        </div>
                                      </div>
                                      <div class="col-md-6">
                                        <div class="form-group signinmodalbtn">
                                          <button type="button" class="btn btn-info" id="reset_otp">Resend OTP</button>
                                        </div>
                                      </div>
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



  
