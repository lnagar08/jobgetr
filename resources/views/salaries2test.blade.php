@include('layouts/resume-header')


<div class="mainbody containeruse innerpage">
    <div class="container">
         
        
        
        <div class="row">
            <div class="col-md-3">
                <div class="progilesidebar">
                    <h2>Tools</h2>
                        <div class="progilesidebar-resume">
                            <h3><a href="#">Edit Existing Resume</a></h3>
                            <h3><a href="#">Download Resume</a></h3>
                        </div>
                    <h2>Feed</h2>
                    <div class="progilesidebar-resume progileblog">
                        <h3>Politics</h3>
                        <ul class="progilesidebar-list">
                            <li><h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4> 
                            <span class="updated-time">Updated 15m ago</span></li>
                            <li><h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4> 
                            <span class="updated-time">Updated 15m ago</span></li>
                        </ul>
                        <h3>Deals</h3>
                        <ul class="progilesidebar-list">
                            <li><h4><a href="#">David Ellison Makes Offer for Redstone Family's Media Empire</a></h4> 
                            <span class="updated-time">24m ago</span></li>
                            <li><h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4> 
                            <span class="updated-time">Updated 15m ago</span></li>
                        </ul>
                        <h3>Economics</h3>
                        <ul class="progilesidebar-list">
                            <li><h4><a href="#">Thai Finance Deputy Says Key Rate 'Too High' Restrainig Growth</a></h4> 
                            <span class="updated-time">24m ago</span></li>
                            <li><h4><a href="#">Lorem Ipsum is simply dummy text of the printing</a></h4> 
                            <span class="updated-time">Updated 15m ago</span></li>
                        </ul>
                    </div>
                    
                    
                    
                </div>
            </div> 
            <div class="col-md-9">
              <div class="progileright"> 
                <div class="innerpage-heading">
                 <h2>Welcome, Ravi</h2>
                </div>
                <div class="row">
                  <div class="col-lg-5 col-md-12">
                   <div class="welcometop-sec">      
                    <div class="videobox" data-toggle="modal" data-target="#myModal2">
                        <div class="videoboximgbg">
                          <div class="videoboximg">
                            <img src="{{asset('assets/images/choose1.jpg')}}" class="img-fluid" alt="">
                            <i class="la la-play"></i>
                          </div>
                            <div class="videobox-text">
                              <p>Watch how <strong>a team of two organized and managed a company offsite for 80 people</strong> — all within Basecamp!</p>
                            </div>
                        </div>
                    </div>
                   </div>    
                  </div>
                  <div class="col-lg-7 col-md-12">
                      <div class="welcometop-right"> 
                         <h2>Lorem Ipsum is simply dummy</h2>
                         <ul>
                             <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                             <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                             <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                             <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                             <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                             <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                             <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                         </ul>
                      </div>
                  </div>
                </div>
                
                <div class="resumeupload-list">
                    <h2>Resumes <span>
                        <button type="button" class="btn btn-upload" data-toggle="modal" data-target="#uploadmodal"><i class="la la-cloud-upload"></i></button>
                        <button type="button" class="btn btn-view"><i class="la la-eye"></i></button>
                        <button type="button" class="btn pending-resumep">Pending..</button></span></h2>
                    <ul class="resumepdflist">
                        <li><a href="#"><div class="resumepdflist-card"><i class="la la-file-pdf-o"></i><span>Lorem Ipsum is simply</span></div></a></li>
                        <li><a href="#"><div class="resumepdflist-card"><i class="la la-file-pdf-o"></i><span>Lorem Ipsum is simply</span></div></a></li>
                        <li><a href="#"><div class="resumepdflist-card"><i class="la la-file-pdf-o"></i><span>Lorem Ipsum is simply</span></div></a></li>
                        <li><a href="#"><div class="resumepdflist-card"><i class="la la-file-pdf-o"></i><span>Lorem Ipsum is simply</span></div></a></li>
                        <li><a href="#"><div class="resumepdflist-card"><i class="la la-file-pdf-o"></i><span>Lorem Ipsum is simply</span></div></a></li>
                    </ul>
                </div>    
                
            </div>
            </div> 
        </div> 
        
        
<div class="modal fade uploadmodal" id="uploadmodal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Resumes Upload</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
       
        <div class="modal-body">
          <div class="uploadmodal-body">
                  <form>
                        <div class="form-group">
                            <label>Resume Title</label>
                            <input type="text" required="" class="form-control">
                        </div>
                        <div class="form-group upload-mess">
                            <label>Resume Upload</label>
                            <div class="box">
                              <input type="file" name="file-5[]" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                              <label for="file-5">
                                <figure><img src="{{asset('assets/images/fileup.png')}}"></figure>   
                                <span>Upload Resume</span></label>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-info">Upload Resume</button>
                  </form>
          </div>
        </div>        
        
      </div>
    </div>
</div>    
        
        
<div class="modal fade modalimg" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
       
        <div class="modal-body">
          <div class="modalimgshow">
              <div class="container">
                  
                <iframe width="775" height="409" src="https://www.youtube.com/embed/HMBtyE0wL60" title="How Basecamp Works - A Quick Overview" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
          </div>
        </div>        
        
      </div>
    </div>
</div>
        
        
        
        <!--<div class="row">-->
        <!--    <div class="col-lg-3 col-md-4">    -->
        <!--       <div class="salaries-calculator salaries-calculator-form">-->
        <!--        <form action="{{route('get-salaries-data')}}" method="get">-->
        <!--          @csrf-->
        <!--          <div class="form-group">-->
        <!--              <label>Job Title</label>-->
        <!--            <input type="text" name="job_title" placeholder="Current or Desired Job Title" class="form-control" name="" id="">-->
        <!--          </div>-->
        <!--          <div class="form-group">-->
        <!--              <label>Job Location</label>-->
        <!--            <input type="text" name="location" placeholder="Location" class="form-control" name="" id="">-->
        <!--          </div>-->
        <!--          <div class="form-group salaries-btn">-->
        <!--            <input  type="submit" value="Calculate Salary" class="btn btn-info" name="submit_btn">-->
        <!--          </div>-->
        <!--        </form>-->
        <!--      </div>-->
        <!--     </div> -->
        <!--    <div class="col-lg-9 col-md-8"> -->
            
        <!--      <div class="calculator-result">-->
        <!--          <div class="innerpage-heading">-->
        <!--             <h2>PHP Developer Salaries</h2>-->
        <!--          </div>-->
                 
                  
        <!--            <div class="calculator-result-col">-->
        <!--                <h2>How much does a PHP Developer make in Atlanta, GA?</h2>-->
        <!--                <p>Glassdoor</p> -->
        <!--                <h4>Confident</h4>-->
        <!--                <div class="row">-->
        <!--                <div class="col-md-7">-->
        <!--                <ul class="calculator-result-col-list">-->
        <!--                      <li>-->
        <!--                          <div class="calculator-result-coldata">-->
        <!--                          <h3>Total Pay Range</h3>-->
        <!--                          <h5><span class="salaryspan1">$458353K</span>-<span class="salaryspan1">$458353K</span><span class="salaryspan2">/yr</span></h5>-->
        <!--                          </div>-->
        <!--                      </li>-->
        <!--                  </ul>-->
        <!--                  </div>-->
        <!--                  <div class="col-md-5">-->
        <!--                      <div class="progressdesign">-->
        <!--                          <div class="progressdesign-center">$122K<span>/yr</span><i class="fa fa-caret-down" aria-hidden="true"></i></div>-->
        <!--                          <div class="progressdesign-div">-->
        <!--                              <span class="progressdesign-div1">$102K</span>-->
        <!--                              <span class="progressdesign-div2">$146K</span> -->
        <!--                              <div class="progress">-->
        <!--                                  <div class="progress-bar" style="width:100%"></div>-->
        <!--                              </div>-->
        <!--                          </div>-->
        <!--                          <div class="progressdesign-check">Most Likely Range</div>-->
        <!--                      </div>    -->
        <!--                  </div>-->
        <!--                </div>-->
        <!--            </div>-->
                 
                      
                   
                  
                  
        <!--      </div>-->
             
        <!--    </div>-->
            
            
            
        <!--</div>-->
    </div>
</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.js')}}"></script>