@include('layouts/resume-header')
<head>

<title>How much does a {{@$_GET['job_title'] }} in {{@$_GET['location']}}? - Jobgetr</title>
</head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="mainbody containeruse innerpage">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="innerpage-heading">
                    <h2>Salaries Calculator</h2>
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-lg-3 col-md-4">    
                <div class="salaries-calculator salaries-calculator-form">
                    <form action="{{route('get-salaries-data')}}" method="get">
                        @csrf
                        <div class="form-group">
                            <label>Job Title</label>
                            <input type="text" required name="job_title" placeholder="i.e. Data Engineer, Project Manager, ..." class="form-control" name="" id="">
                        </div>
                        <div class="form-group">
                            <label>Job Location</label>
                            <input type="text" required name="location" placeholder="i.e. Atlanta, GA" class="form-control" name="" id="">
                        </div>
                        <div class="form-group recaptcha-design">
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
                        <div class="form-group salaries-btn">
                            <input  type="submit" value="Calculate Salary" name="salary_btn" class="btn btn-info">
                        </div>
                    </form>
                </div>
             </div> 
            <div class="col-lg-9 col-md-8"> 
            
              <div class="calculator-result">
                  <div class="innerpage-heading">
                     <h2>{{$data['job_title']}} Salaries</h2>
                  </div>
                 
                  
                    <div class="calculator-result-col">
                        <h2>How much does a {{$data['job_title']}} make in {{$data['location']}}?</h2>
                        <h4>Confident</h4>
                        <div class="row">
                        <div class="col-md-7">
                        <ul class="calculator-result-col-list">
                              <li>
                                  <div class="calculator-result-coldata">
                                  <h3>Total Pay Range</h3>
                                  <h5><span class="salaryspan1">{{$data['salary_currency'] == 'USD' ?  '$' : '₹'}}{{round($data['min_salary'])}}K</span>-<span class="salaryspan1">{{$data['salary_currency'] == 'USD' ?  '$' : '₹'}}{{round($data['max_salary'])}}k</span><span class="salaryspan2">{{$data['salary_period'] == 'YEAR' ? '/yr' : 'm'}}</span></h5>
                                  </div>
                              </li>
                          </ul>
                          </div>
                          <div class="col-md-5">
                              <div class="progressdesign">
                                  <div class="progressdesign-center">{{$data['salary_currency'] == 'USD' ?  '$' : '₹'}}{{round($data['median_salary'])}}K<span>{{$data['salary_period'] == 'YEAR' ? '/yr' : 'm'}}</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>
                                  <div class="progressdesign-div">
                                      <span class="progressdesign-div1">{{$data['salary_currency'] == 'USD' ?  '$' : '₹'}}{{round($data['min_salary'])}}K</span>
                                      <span class="progressdesign-div2">{{$data['salary_currency'] == 'USD' ?  '$' : '₹'}}{{round($data['max_salary'])}}K</span> 
                                      <div class="progress">
                                          <div class="progress-bar" style="width:100%"></div>
                                      </div>
                                  </div>
                                  <div class="progressdesign-check">Most Likely Range</div>
                              </div>    
                          </div>
                        </div>
                    </div>
              </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>
<script>
    $(document).ready(function() {
        var url = window.location.href;
        var newUrl = removeURLParameter(url, 'submit_btn');
        newUrl = removeURLParameter(newUrl, 'g-recaptcha-response');
        window.history.replaceState({}, document.title, newUrl);
    });

    function removeURLParameter(url, parameter) {
        // Use regex to remove the parameter and its value from the URL
        var urlParts = url.split('?');
        if (urlParts.length >= 2) {
            var prefix = encodeURIComponent(parameter) + '=';
            var pars = urlParts[1].split(/[&;]/g);

            // Reverse iteration to safely remove elements while iterating
            for (var i = pars.length; i-- > 0;) {
                // If the parameter is found, remove it from the array
                if (pars[i].lastIndexOf(prefix, 0) !== -1) {
                    pars.splice(i, 1);
                }
            }

            // Join the array back into a single string and reconstruct the URL
            url = urlParts[0] + '?' + pars.join('&');
            return url;
        } else {
            return url;
        }
    }
</script>