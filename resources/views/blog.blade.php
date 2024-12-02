@include('layouts/header') 
<section class="innerbanner" style="background: url('{{asset('assets/images/inresume.jpg')}}');">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="innerheading">
          <h2>Blog</h2>
          <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li>Blog</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="inner-sec ">
  <div class="container">
   
   <div class="row">
      <div class="col-md-12">
        <h2 class="blogheading">Recent blog posts</h2>
      </div>
      <div class="col-lg-6 col-md-12">
        <div class="blogcard">
           <div class="blogcard-img">
           <a href="#"><img src="{{asset('assets/images/blog.jpg')}}" class="img-fluid" alt=""></a>
           </div>
           <div class="blogcard-desc">
             <h5>Olivia Rhye • 20 Jan 2024</h5>
             <a href="#"><h2>Lorem IPsum</h2></a>
             <p>How do you create compelling presentations that wow your colleagues and impress your managers?</p>
           </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 blogcardright">
        <div class="blogcard">
           <div class="blogcard-img">
           <a href="#"><img src="{{asset('assets/images/blog2.jpg')}}" class="img-fluid" alt=""></a>
           </div>
           <div class="blogcard-desc">
             <h5>Phoenix Baker • 19 Jan 2024</h5>
             <a href="#"><h2>Lorem IPsum</h2></a>
             <p>Linear helps streamline software projects, sprints, tasks, and bug tracking. Here’s how to get...</p>
           </div>
        </div>
        <div class="blogcard">
           <div class="blogcard-img">
           <a href="#"><img src="{{asset('assets/images/blog2.jpg')}}" class="img-fluid" alt=""></a>
           </div>
           <div class="blogcard-desc">
             <h5>Lana Steiner • 18 Jan 2024</h5>
             <a href="#"><h2>Lorem IPsum</h2></a>
             <p>The rise of RESTful APIs has been met by a rise in tools for creating, testing, and manag...</p>
           </div>
        </div>
      </div>
    </div>
    <div class="row allblog">
      <div class="col-md-12">
        <h2 class="blogheading">All blog posts</h2>
      </div>
      <div class="col-md-4">
        <div class="blogcard">
           <div class="blogcard-img">
           <a href="#"><img src="{{asset('assets/images/blog.jpg')}}" class="img-fluid" alt=""></a>
           </div>
           <div class="blogcard-desc">
             <h5>Alec Whitten • 17 Jan 2024</h5>
             <a href="#"><h2>Lorem IPsum</h2></a>
             <p>Like to know the secrets of transforming a 2-14 team into a 3x Super Bowl winning Dynasty?</p>
           </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blogcard">
           <div class="blogcard-img">
           <a href="#"><img src="{{asset('assets/images/blog.jpg')}}" class="img-fluid" alt=""></a>
           </div>
           <div class="blogcard-desc">
             <h5>ODemi WIlkinson • 16 Jan 2024</h5>
             <a href="#"><h2>Lorem IPsum</h2></a>
             <p>Mental models are simple expressions of complex processes or relationships.</p>
           </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blogcard">
           <div class="blogcard-img">
           <a href="#"><img src="{{asset('assets/images/blog.jpg')}}" class="img-fluid" alt=""></a>
           </div>
           <div class="blogcard-desc">
             <h5>Candice Wu • 15 Jan 2024</h5>
             <a href="#"><h2>Lorem IPsum</h2></a>
             <p>Introduction to Wireframing and its Principles. Learn from the best in the industry.</p>
           </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="pagination-list">
        <ul>
          <li><a href="#" class="previous"><img src="{{asset('assets/images/arrow-left.svg')}}" class="img-fluid" alt="">Previous</a></li>
          <li><a href="#" class="active">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">...</a></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><a href="#">10</a></li>
          <li><a href="#" class="next">Next<img src="{{asset('assets/images/arrow-right.svg')}}" class="img-fluid" alt=""></a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
</section>
@include('layouts/footer') 