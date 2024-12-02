<!DOCTYPE html>
<html lang="en">
<head>
  <title>jobgetr</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<body>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body {
    font-family: 'Montserrat', sans-serif;
    margin: 0px;
    background: #fff;
}
</style>
<div class="mail-messages-body-top" style="width: 640px;margin: 50px auto;">
  <div class="mail-messages-body" style="padding: 20px;background: #eaeaea;">

    <div class="mail-messages" style="background: #FFFFFF;padding: 30px;">
    <div class="mail-logo" style="margin-bottom: 20px;">
      {{-- <a href="#" style="display: inline-block; width: 160px;"><img src="{{$message->embed(public_path('assets/images/logo.jpg'))}}" class="img-fluid" alt="" style="max-width: 100%; height: auto;"></a> --}}
      <a href="#" style="display: inline-block; width: 160px;"><img src="{{ asset('assets/images/logo.jpg')}}" class="img-fluid" alt="" style="max-width: 100%; height: auto;"></a>
    </div>
    <div class="mail-docu" style="padding: 28px 36px 36px 36px;border-radius: 2px;background: #002d6b;text-align: center;margin-bottom: 20px;">
      <img src="assets/images/unnamed.png" class="img-fluid" alt="" style="max-width: 100%;height: auto;width: 100px;margin-bottom: 20px;">
      <h2 style="font-weight: 700;font-size: 20px;line-height: 24px;color: #fff;margin-bottom: 22px;margin-top: 0px;">Hello {{ucfirst($data['first_name'])}},</h2>
      <p style="font-weight: 400;font-size: 16px;line-height: 24px;color: #fff;margin-bottom: 22px;margin-top: 0px;">Thank you for registering on our platform. To complete the email verification process, please use the following OTP (One-Time Password):</p>
      <p style="font-weight: 400;font-size: 16px;line-height: 24px;color: #fff;margin-bottom: 22px;margin-top: 0px;">OTP: {{$data['otp']}}</p>
    </div>
    <div class="namemail">
      <p style="font-size: 14px;margin: 0px 0px 17px 0px;color: #000;">This OTP is valid for a limited time. Do not share it with anyone. If you did not request this verification, please ignore this email.</p>
      <h3 style="margin: 0px 0px 5px 0px;font-weight: 500;font-size: 16px;color: #000;">Regards,</h3>
      <h3 style="margin: 0px 0px 5px 0px;font-weight: 500;font-size: 14px;color: #000;">Team jobgetr,</h3>
    </div>  
    </div>
</div>
</div>
</body>
</html>




