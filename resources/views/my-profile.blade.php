@include('layouts/resume-header')
<style>
        .remark-content {
            max-width: 300px; /* Adjust as needed */
            overflow: hidden;
        }
        .full-text {
            display: none;
        }
    </style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<div class="mainbody containeruse innerpage">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="progilesidebar">
                    <h2>Tools</h2>
                        <div class="progilesidebar-resume">
                            <h3><a href="{{route('my-profile')}}" >My Profile</a></h3>
                            <h3><a href="{{route('message.index')}}" >Message</a></h3>
                            <h3><a href="{{route('create-resume')}}" target="_blank">Edit Existing Resume</a></h3>
                            <h3><a href="{{route('download.pdf')}}" target="_blank">Download Resume</a></h3>
                        </div>
                    <h2>Feed</h2>
                    <div class="progilesidebar-resume progileblog">
                         {!! $setting->value !!}
                    </div>
                </div>
            </div> 
            <div class="col-md-9">
              <div class="progileright"> 
                <div class="innerpage-heading">
                 <h2>Welcome, {{auth()->guard('web')->user()->first_name}}</h2>
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
                            {!! $youtube_video_desc->value !!}
                      </div>
                  </div>
                </div>
                
                <div class="resumeupload-list">
                    <h2>Resumes <span>
                    <button type="button" class="btn btn-upload" data-toggle="modal" data-target="#uploadmodal"><i class="la la-cloud-upload"></i></button>
                    <a href="{{route('final-resume', auth()->guard('web')->user()->slug)}}" target="_blank"><button type="button" class="btn btn-view"><i class="la la-eye"></i></button></a>
                        <!--@if(auth()->guard('web')->user()->project_url)-->
                        <!--  <a href="{{auth()->guard('web')->user()->project_url}}" target="_blank"><button type="button" class="btn pending-resumep">Live</button></a>-->
                        <!--@else-->
                        <!--  <button type="button" class="btn pending-resumep">Pending...</button></span></h2>-->
                        <!--@endif-->
                    </span></h2>


                    <ul class="resumepdflist">
                        @if(count($user_resume) > 0)
                            @foreach($user_resume as $key => $value)
                                <li>
                                    <button type="button" class="deletebtn" id="resume_delete" data-id="{{$value->id}}">
                                        <i class="fa fa-trash delete_icon" aria-hidden="true"></i>
                                    </button>
                                    <a href="{{$value->file_path ? url('/').'/'.$value->file_path : ''}}" target="_blank">
                                        <div class="resumepdflist-card">
                                            <i class="la la-file-text-o"></i>
                                            <span>{{$value->title}}</span>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        @else
                            <li><span class="noresume">No Reusme Uploaded</span></li>
                        @endif
                    </ul>
                </div>    
                
                <div class="extrablog-row">
                  {!! $profile_text_block->value !!}
                </div>
                
                <div class="applied-jobs tabledesign">
                  <div class="innerpage-heading">
                     <h2>Applied Jobs</h2>
                  </div>
                  <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="min-width: 40px;">#</th>
                                    <th style="min-width: 130px;">Job Title</th>
                                    <th style="min-width: 170px;">Company Name</th>
                                    <th style="min-width: 230px;">Remark</th>
                                    <th style="min-width: 230px;">Link</th>
                                    <th style="min-width: 90px;">Date</th>
                                </tr>
                            </thead>
                             <tbody>
                                @if(!is_null($JobApplyManagement) && count($JobApplyManagement) > 0)
                                    @foreach($JobApplyManagement as $key => $JobApply)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $JobApply->job_title }}</td>
                                            <td>{{ $JobApply->company_name }}</td>
                                             <td>
                                                <div class="remark-content">
                                                    @if(strlen($JobApply->remark) > 50)
                                                        <span class="truncated-text">
                                                            {{ \Illuminate\Support\Str::limit($JobApply->remark, 50, '') }}
                                                            <a href="#" class="read-more">...</a>
                                                        </span>
                                                        <span class="full-text" style="display: none;">
                                                            {{ $JobApply->remark }}
                                                            <a href="#" class="read-less">...</a>
                                                        </span>
                                                    @else
                                                        {{ $JobApply->remark }}
                                                    @endif
                                                </div>
                                            </td>
                                            <td>{{ $JobApply->link ?? '' }}</td>
                                            <td>{{ $JobApply->date }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="text-center">
                                        <td colspan="6">No data found</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
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
                  <form action="{{route('upload-resume')}}" id="upload_resume_frm" method="post" enctype='multipart/form-data'>
                    @csrf
                        <div class="form-group">
                            <label>Resume Title</label>
                            <input type="text" required  id="title" name="title" class="form-control">
                            <span class="error" id="title_err"></span>

                        </div>
                        <div class="form-group upload-mess">
                            <label>Resume Upload</label>
                            <div class="box">
                              <input type="file"  multiple accept=".csv, .doc, .docx, .pdf, .xls, .xlsx, image/*" required name="user_resume" id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
                              <label for="file-5">
                                <figure><img src="{{asset('assets/images/fileup.png')}}"></figure>   
                                <span id="resume_name">Upload Resume</span></label>
                            </div>
                            <span id="resume_err" class="error"></span>
                          </div>
                          <button type="button" id="form_submit" class="btn btn-info">Upload Resume</button>
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
                  
                <iframe width="775" height="409" src="{{ $youtube_video->value }}" title="How Basecamp Works - A Quick Overview" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
          </div>
        </div>        
      </div>
    </div>
</div>
    </div>
</div>
@include('layouts/footer')
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('.table').DataTable({
            "paging": true,
            "ordering": true,
            "pageLength": 10
        });
    });
    $(document).ready(function() {
            $('.read-more').on('click', function(e) {
                e.preventDefault();
                $(this).closest('.remark-content').find('.truncated-text').hide();
                $(this).closest('.remark-content').find('.full-text').show();
            });

            $('.read-less').on('click', function(e) {
                e.preventDefault();
                $(this).closest('.remark-content').find('.full-text').hide();
                $(this).closest('.remark-content').find('.truncated-text').show();
            });
        });
</script>
<script>
$(document).ready(function() {
   
    


  $('#form_submit').on('click', function(e){
    e.preventDefault();
    let title = $('#title').val();
    let resumeFileInput = $('#file-5')[0];
    let resumeFile = resumeFileInput.files[0];
    let allowedExtensions = ['csv', 'doc', 'docx', 'pdf', 'xls', 'xlsx'];
    let resumeExtension = '';

    if (title.trim() === '') {
      $('#title_err').html('This field is required.');
      return false;
    } else {
      $('#title_err').html('');
    }
    

    if (!resumeFile) {
      $('#resume_err').html('Please select a file.');
      return false;
    } else {
      resumeExtension = resumeFile.name.split('.').pop().toLowerCase();
      if (allowedExtensions.indexOf(resumeExtension) === -1 && !resumeFile.type.startsWith('image/')) {
        $('#resume_err').html('Please select a valid file type (csv, doc, docx, pdf, xls, xlsx, image).');
        return false;
      } else {
        $('#resume_err').html('');
      }
    }

    $('#upload_resume_frm').submit();
  });
});

$('body').delegate('#resume_delete', 'click', function(){
    let resume_id = $(this).data('id');
    let element = $(this);
    $.ajax({
        url: '{{route("delete-upload-resume")}}?resume_id='+resume_id,
        type: 'GET',
        processData: false, 
        contentType: false, 
        success: function(response) {
            if(response.status == 200){
                element.closest('li').remove();
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



$('body').delegate('#file-5', 'change', ()=>{
  let resumeFileInput = $('#file-5')[0];
  let resumeFile = resumeFileInput.files[0]; 
  $('#resume_name').html(resumeFile.name);
});
</script>
