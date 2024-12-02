<footer class="footernewsec">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footernew">
          <div class="row">
          <div class="col-md-6">
            <div class="footerblog">
               <img src="{{ asset('assets/images/footerimg.png')}}" class="img-fluid" alt="">
               <p>"My name is Kace bio. This platform is born from my pain of spending hours applying for jobs one-by-one. We are building the best job-getting platform in the world. Discrete mathematics is like poetry to me."</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="footerright">
              <div class="footerrightlogo"><a href="#"><img src="{{asset('assets/images/logo.png')}}" class="img-fluid" alt=""></a></div>
              <h6>2870 Peachtree Rd<br> Atlanta GA 30305<br> (770) 609-4928</h6>
              <ul class="supportul">       
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>support@resumegpt.co</a></li>
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>investors@resumegpt.co</a></li>
                <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>info@resumegpt.co</a></li>
                 <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>+1 456-987-9879</a></li>
              </ul>
              <!--<div class="pnumber">+1 456-987-9879</div>-->
             <!--  <ul class="contantul">
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="copyright copyrightnew">
    <img src="{{ asset('assets/images/top-home-banner.svg')}}" class="img-fluid templatessecway" alt="">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p>ResumeGPT © All rights reserved</p>
        </div>
        <div class="col-md-4">
          <ul>
            <li><a href="{{ route('terms-of-use')}}">Terms of Use</a></li>
            <li><a href="{{ route('privacy-policy')}}">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
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
          items: 1
        },
        768: {
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