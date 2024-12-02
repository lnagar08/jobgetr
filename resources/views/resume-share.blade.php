@include('layouts/resume-header')
<div class="mainbody containeruse sharepage">
   <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heading">
        <h2>Share your <span>resume</span></h2>
        <p>hare your resume with potential employers & friends.</p>
        <div class="input-group">
          <input type="text" class="form-control" readonly id="copy_link" value="{{$resume_link}}" placeholder="https://abcresume.co/@UWtgAkyeu4qHwg1uqry2?password=JiVomVigTasCe">
          <div class="input-group-append">
            <button class="btn btn-info" id="textToCopy" type="button" onclick="copyToClipboard('#copy_link')">Copy link</button>
          </div>
        </div>
        <p class="sharepagesubscribe"><a href="#">Subscribe now</a> to customize the sharing link.</p>
        <div class="signinoption">
            <ul>
                <li><a href="#"><i class="la la-facebook"></i></a></li>
                <li><a href="#"><i class="la la-google"></i></a></li>
                <li><a href="#"><i class="la la-linkedin"></i></a></li>
            </ul>
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
  function copyToClipboard(element) {
  
    if ($(element).is("input") || 
        $(element).is('textarea')) {
      $(element).select();
      $(element).focus();
      document.execCommand("copy");
    }
    else {
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).text()).select();
      document.execCommand("copy");
      $temp.remove();
    }
  }

  
</script>