@include('layouts/header') 
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<section class="newbanner">
  <img src="{{ asset('assets/images/paperplane.png')}}" class="img-fluid paperplane" alt="">
  <div class="container">

    <div class="row centerrow">
      <div class="col-md-6">
            <div class="newstep-text">
              <h3>It all starts with a resume.</h3>
            </div>
            <img src="{{ asset('assets/images/1111.png')}}" class="img-fluid png bounce-1" alt="">
      </div>
      <div class="col-md-6">
             <div class="newstepimg">
              <img src="{{ asset('assets/images/1.jpg')}}" class="img-fluid" alt="">
            </div>
             
      </div>
    </div>
    <div class="row centerrow">
      <div class="col-md-6">
             <div class="newstepimg">
              <img src="{{ asset('assets/images/2.jpg')}}" class="img-fluid" alt="">
            </div>
             
      </div>
      <div class="col-md-6">
            <div class="newstep-text">
              <h3>Tell us the job titles, salary, and location you want.</h3>
            </div>
            <img src="{{ asset('assets/images/11.png')}}" class="img-fluid png2 bounce-1" alt="">
      </div>      
    </div>
    <div class="row centerrow">
      <div class="col-md-6">
            <div class="newstep-text">
              <h3>ResumeGPT scans 1000’s of jobs and applies to the best matches.</h3>
            </div>
             <img src="{{ asset('assets/images/1111.png')}}" class="img-fluid png bounce-1" alt="">
      </div>
      <div class="col-md-6">
             <div class="newstepimg">
              <img src="{{ asset('assets/images/3.jpg')}}" class="img-fluid" alt="">
            </div>
            
      </div>
    </div>
    <div class="row centerrow">
      <div class="col-md-6">
             <div class="newstepimg">
              <img src="{{ asset('assets/images/4.jpg')}}" class="img-fluid" alt="">
            </div>
             
      </div>
      <div class="col-md-6">
            <div class="newstep-text">
              <h3>You receive interview requests from employers.</h3>
            </div>
            <img src="{{ asset('assets/images/11.png')}}" class="img-fluid png2 bounce-1" alt="">
      </div>      
    </div>
    <div class="row centerrow">
      <div class="col-md-6">
            <div class="newstep-text">
              <h3>Interview and accept the position you choose.</h3>
            </div>
            <img src="{{ asset('assets/images/111111.png')}}" class="img-fluid pnglast bounce-1" alt="">
      </div>
      <div class="col-md-6">
             <div class="newstepimg">
              <img src="{{ asset('assets/images/5.jpg')}}" class="img-fluid" alt="">
            </div>
             
      </div>
    </div>


  </div>
</section>



<section class="pricetable">
  <img src="{{ asset('assets/images/shape_2.svg')}}" class="img-fluid shape_3" alt="">
  <img src="{{ asset('assets/images/shape_2.svg')}}" class="img-fluid shape_2" alt="">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
           <div class="pricetable-heading">
            <h2>Start Here</h2>
           </div>
      <div class="table-width">
      <div class="table-responsive">
            @php 
                $plan = App\Models\Plan::get();                                        
            @endphp
           <table class="table">
              <thead>
                <tr>
                  <th style="min-width: 120px;"></th>
                  @foreach($plan as $pname)
                  <th style="min-width: 120px;">{{$pname->name}}</th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Price</td>
                    @foreach($plan as $pprice)
                        <td><h4>${{ number_format($pprice->price, 0) }}</h4></td>
                    @endforeach
                </tr>
                <tr>
                  <td>Jobs <i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" title="Total number of jobs applied for."></i></td>
                   @foreach($plan as $jobapp)
                    <td>{{ $jobapp->number_of_job_applications }}</td>
                    @endforeach
                </tr>
                <tr>
                  <td>Time <i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" title="ResumeGPT will apply for jobs within this time period. Longer time periods equals more job opportunities."></i></td>
                  <td>30 days</td>
                  <td>60 days</td>
                  <td>90 days</td>
                </tr>
                <tr>
                  <td>Extras <i class="fa fa-question-circle" aria-hidden="true" data-toggle="tooltip" title="Free partnership offers."></i></td>
                  <td></td>
                  <td>Complimentary <strong>openinterview.me</strong> profile ($50 value)</td>
                  <td>Complimentary <strong>openinterview.me</strong> profile ($50 value)</td>
                </tr>
                <tr>
                  <td></td>
                  <td><a href="{{ Auth::check() ? route('mysubscriptions.index') : route('register') }}" class="btn btn-info">Get My Job!</a></td>
                  <td><a href="{{ Auth::check() ? route('mysubscriptions.index') : route('register') }}" class="btn btn-info">Get My Job!</a></td>
                  <td><a href="{{ Auth::check() ? route('mysubscriptions.index') : route('register') }}" class="btn btn-info">Get My Job!</a></td>
                </tr>
              </tbody>
            </table>
        </div> 
        </div> 



      </div>
    </div>
  </div>
</section>






<section class="infosec" style="background: url('assets/images/inresume.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="infosecbg">
          <h2>Don’t Overthink It.</h2>
          <p>Be the first to apply to open positions instead of the 100th. Use AI to your advantage and get the job you deserve.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="s-calculator">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
         <div class="s-calculator-left">
          <h2>Know Your Worth.</h2>
          <div class="s-calculator-in">
            <h3>Salary Calculator</h3>
            <p>Leave the guesswork behind. Tell us a little bit about yourself, and we'll calculate what you could be making based on real salaries from other in your position.</p>
            <form action="{{route('get-salaries-data')}}" method="get">
              @csrf
              <div class="form-group">            
                <input type="text" required name="email" placeholder="abc@gmail.com" class="form-control" id="">
                @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input type="text" required name="location" placeholder="i.e. Atlanta, GA" class="form-control"  id="">
                @if ($errors->has('location'))
                  <span class="text-danger">{{ $errors->first('location') }}</span>
                @endif              
              </div>
              <div class="form-group">
                <input type="text" required name="job_title" placeholder="i.e. Data Engineer, Project Manager, ..." class="form-control"  id="">
                @if ($errors->has('job_title'))
                  <span class="text-danger">{{ $errors->first('job_title') }}</span>
                @endif              
              </div>
              <div class="form-group recaptchadesign">
                <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                    @if(session('g-recaptcha-response'))
                      <span class="text-danger">{{ session('g-recaptcha-response') }}</span>
                    @endif
                    @if(session('error'))
                        <span class="text-danger">
                            {{ session('error') }}
                        </span>
                    @endif
              </div>
              <div class="form-group signbtn">
                 <button type="submit" value="Calculate Salary" name="submit_btn" class="btn btn-info w100">Calculate Salary</button>
              </div>
            </form>
          </div>
         </div>
      </div>
      <div class="col-md-6">
          <div class="s-calculator-right">
            <img src="{{ asset('assets/images/book.png')}}" class="img-fluid" alt="">
            <a href="#" class="btn btn-info w100">Free Download</a>
          </div>
      </div>
    </div>
  </div>
</section>

@include('layouts/footer')
