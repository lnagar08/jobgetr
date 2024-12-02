@include('layouts/header') 

@php
    // Fetch the content from the database
    $ContactUs = App\Models\PageManager::where('key', 'ContactUs')->first();  
@endphp

@if($ContactUs->status == 1)
<section class="innerbanner" style="background: url('{{asset('assets/images/inresume.jpg')}}');">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
            <div class="innerheading">
            <h2>Contact Us</h2>
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Contact Us</li>
            </ul>
            </div>
            <h1 style="text-align: center;color: red;font-weight: bold;">This Page is not available</h1>
        </div>
        </div>
    </div>
</section>
@else
{!! $ContactUs->content !!}
<section class="inner-sec faq-sec">
  <div class="container">
   
   <div class="row">
      <div class="col-md-12">
          <div class="boxdesign contact-form cvform">
            <div class="heading">
              <h2>Get in <span>touch with</span> us</h2>
              <p>Fill up the form and our team will get back to you within 24 hours</p>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
             
            <form  action="{{route('save-contact-us')}}" method="post">
               @csrf
               <div class="row">
                   <div class="col-lg-6">
                       <div class="form-group">
                         <label>First Name<span class="error">*</span></label>
                         <input type="text" name="first_name" required  class="form-control" id="fname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group">
                         <label>Last Name<span class="error">*</span></label>
                         <input type="text"  name="last_name" required  class="form-control" id="lname" placeholder="Last Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col-lg-6">
                         <div class="form-group">
                            <label>Email Address<span class="error">*</span></label>
                           <input type="email"  name="email" required  class="form-control" id="email" placeholder="Email Address">
                          </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group">
                         <label>Subject<span class="error">*</span></label>
                         <input type="text"  name="subject" required  class="form-control" id="lname" placeholder="Subject">
                        </div>
                    </div>                    
                </div>
                
                <div class="row">
                   <div class="col-lg-12">
                       <div class="form-group">
                             <label for="comment">Your Message<span class="error">*</span></label>
                            <textarea  name="message" required  class="form-control" rows="5" id="comment" placeholder="Your Message"></textarea>
                         </div>
                    </div>
                </div>
                
                <div class="row">
                   <div class="col-lg-12">
                       <div class="form-group">
                             <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </div>


            </form>      

        </div>
      </div>
    </div>

  </div>
</section>
@endif
@include('layouts/footer') 


