@include('layouts/resume-header')
<!-- Write Html -->
 <script src="https://www.google.com/recaptcha/api.js" async defer></script> 
<div class="mainbody"  id="write_content">

    <div class="sidebar">
        <div class="sidebarcol">
            @php 
                $user_data = auth()->guard('web')->user();
                $completion_status = @$user_data ? $user_data->completion_status : '';
            @endphp
            <ul id="progressbar" class="side_bar_lis" data-user="{{$user_data ? 1 : 0}}" data-expire="{{@$is_plan_expired}}" data-value="{{$completion_status}}">
                @php
                   $user =  auth()->guard('web')->user() ? true : false;
                @endphp
                <li class="active" data-user="{{$user ? 1 : 0}}" id="personalDetail"><strong>Personal details</strong></li>
                
                <li class="" data-user="{{$user ? 1 : 0}}"   id="contact_information"><strong>Contact information</strong></li>
                <li class=""  data-user="{{$user ? 1 : 0}}" id="professionalsummary"><strong>Professional summary</strong></li>
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}" id="side_employment_history"><strong>Employment history</strong></li>
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}"  id="side_education"><strong>Education</strong></li>
                @if($is_plan_expired == 1)
                    <li class="" data-user="{{$user ? 1 : 0}}" id="choosePlan"><strong>Choose Plan</strong></li>
                @endif
                @if(isset($skills) && count($skills) > 0)
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}"  id="side_skills"><strong>Skills</strong></li>
                @endif
                @if(isset($internships) && count($internships) > 0)
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}" id="side_internships"><strong>Internships</strong></li>
                @endif
                @if(isset($certificates) && count($certificates) > 0)
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}" id="side_certificates"><strong>Certificates</strong></li>
                @endif
                @if(isset($courses) && count($courses) > 0)
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}" id="side_courses"><strong>Courses</strong></li>
                @endif
                @if(isset($references) && count($references) > 0)
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}" id="side_references"><strong>References</strong></li>
                @endif
                @if(isset($links) && count($links) > 0)
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}" id="side_links"><strong>Links</strong></li>
                @endif
                @if(isset($languages) && count($languages) > 0)
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}" id="side_language"><strong>Languages</strong></li>
                @endif
                @if(auth()->guard('web')->user() && auth()->guard('web')->user()->hobbies != null)
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}" id="side_hobbies"><strong>Hobbies</strong></li>
                @endif
                @if(isset($customSections) && count($customSections) > 0)
                <li class=" check_exist" data-user="{{$user ? 1 : 0}}" id="side_custom_sections"><strong>Custom section</strong></li>
                @endif
                <li id="Additional_section" data-user="{{$user ? 1 : 0}}"><strong>Additional section</strong></li>
            </ul>
        </div>
    </div>
    <div class="rightbody">
        <form id="msform">
            <fieldset class="cvform" data-id="personalDetail" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="cvform-heading">
                          <h2>Personal Details</h2>
                          <p>{{ $Contantm && isset($Contantm->personal_details) ? $Contantm->personal_details : '' }}</p>
                        </div>
                    </div>                               
                </div>
                <div class="form-group profilediv">
                    <label>Profile Picture</label>
                    <div class="profile-img">
                        <div class="circle">
                            <img class="profile-pic" id="user_profile_image_preview" src="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->profile_image ? auth()->guard('web')->user()->profile_image  : asset('assets/images/no-preview.jpeg') :  asset('assets/images/no-preview.jpeg')}}">
                        </div>
                        <div class="p-image">
                            <i class="fa fa-camera upload-button"></i>
                            <input class="file-upload" id="profile_image" type="file" accept="image/*">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name<span class="error">*</span></label>
                            <input type="text" class="form-control" id="first_name" placeholder="First Name" id="fname" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->first_name ? auth()->guard('web')->user()->first_name  : '' :  ''}}">
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong id="first_name_err"></strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name<span class="error">*</span></label>
                            <input type="text" class="form-control" id="last_name" placeholder="Last Name" id="lname" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->last_name ? auth()->guard('web')->user()->last_name  : '' :  ''}}">
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong id="last_name_err"></strong>
                            </span>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email Address<span class="error">*</span></label>
                            <input type="email"  class="form-control" placeholder="Email Address" id="email" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->email ? auth()->guard('web')->user()->email  : '' :  ''}}"  {{auth()->guard('web')->user() ? 'readonly' : ''}}>
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong id="email_err"></strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" id="date_of_birth" class="form-control disable_future_date" placeholder="00/00/0000" id="dob" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->date_of_birth ? auth()->guard('web')->user()->date_of_birth  : '' :  ''}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Driver's License (Optional)</label>
                            <input type="text" id="driver_license" class="form-control" placeholder="D74837465" id="license" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->driver_license ? auth()->guard('web')->user()->driver_license  : '' :  ''}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="recaptchadsign">
                        <div class="form-group">
                             <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>
                            <span class="text-danger " id="g-recaptcha-response_err"></span>
                        </div>
                        </div>
                    </div>
                    
                </div>  
                @if(auth()->guard('web')->user())
                    <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" id="personal_detail_next_btn" value="Next" />
                    <a href="{{route('upload-my-resume.index')}}" class="btn btn-info Upload_my_Resume"> Upload my Resume</a>
                @else
                    <input type="button" style="display:none;" name="next" class="next action-button btn btn-info next_btn_data_save" id="personal_detail_next_btn" value="Next" />
                    <input type="button" name="login_validation" class="action-button btn btn-info" id="check_login" value="Next" />
                    <input type="button" style="display:none;" name="otp_popup" class="action-button btn btn-info" id="otp_popup_model" class="fade" data-bs-toggle="modal" data-bs-target="#OTPModal" value="Next" />
                @endif
            </fieldset>
            
            <fieldset class="cvform" data-id="contact_information" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="cvform-heading">
                            <h2>Contact information</h2>
                            <p>{{ $Contantm && isset($Contantm->contact_information) ? $Contantm->contact_information : '' }}</p>
                        </div>
                    </div>                               
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Country<span class="error">*</span></label>
                            <input type="text" class="form-control" placeholder="Country" id="country" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->country : '' }}">
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong id="country_err"></strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>City<span class="error">*</span></label>
                            <input type="text" class="form-control" placeholder="City" id="city" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->city : '' }}">
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong id="city_err"></strong>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Postal code" id="postal_code" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->postal_code : '' }}">
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong id="postal_code_err"></strong>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone Number" id="phone_number" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->phone_number : '' }}">
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong id="phone_number_err"></strong>
                            </span>
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Address<span class="error">*</span></label>
                            <textarea class="form-control" placeholder="Address" id="address" value="{{auth()->guard('web')->user() ? auth()->guard('web')->user()->address : '' }}">{{auth()->guard('web')->user() ? auth()->guard('web')->user()->address : '' }}</textarea>
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong id="address_err"></strong>
                            </span>
                        </div>
                    </div>
                </div>
                <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
            </fieldset>

            <fieldset class="cvform" data-id="professionalsummary" >
              
                <div class="row">
                    <div class="col-md-12">
                        <div class="cvform-heading">
                            <h2>Professional Summary</h2>
                            <p>{{ $Contantm && isset($Contantm->professional_summary) ? $Contantm->professional_summary : '' }}</p>
                        </div>
                    </div>                               
                </div> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="professional_summary">Summary<span class="error">*</span></label>
                            <p>Your professional summary is a short (255 characters), personalized introduction to a potential employer. It complements your resume by adding a human voice and personality, allowing you to highlight your accomplishment, relevant skills, and experiences that align with the job's requirements and set you apart.</p>
                            <textarea class="form-control" rows="5" id="professional_summary" placeholder="Rocket Scientist with 10 years of experience looking for a new opportunity.">{{auth()->guard('web')->user() ? auth()->guard('web')->user()->professional_summary : '' }}</textarea>
                            <span class="invalid-feedback" style="display:block" role="alert">
                                <strong id="professional_summary_err"></strong>
                            </span>
                            <!-- <div class="placeholder-overlay">Rocket Scientist with 10 years of experience looking for a new opportunity.</div> -->
                        </div>
                    </div>
                </div>                          
                <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
            </fieldset>
            
            <fieldset class="cvform" data-id="side_employment_history" >
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="cvform-heading">
                            <h2>Employment history <button type="button" class="deletestep"  ><i class="la la-trash"></i></button></h2>
                            <p>{{ $Contantm && isset($Contantm->employment_history) ? $Contantm->employment_history : '' }}</p>
                        </div>
                    </div>                               
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="errors_">
                            <p id="employment_err"></p>
                        </div>
                    </div>
                </div>
                <div class="work_history_bdy">
                    @if(isset($employmentHistories) && count($employmentHistories) > 0)
                        @foreach($employmentHistories as $key => $value)
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Job title<span class="error">*</span></label>
                                        <input type="text" class="form-control job_title_field" value="{{$value->job_title}}" placeholder="Job title" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company<span class="error">*</span></label>
                                        <input type="text" class="form-control company_field" value="{{$value->company}}" placeholder="Company" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Start Date<span class="error">*</span></label>
                                        <input type="date" class="form-control start_date_field disable_future_date compare_start_date" value="{{$value->start_date}}" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4 end_date_dv">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" class="form-control end_date_field disable_future_date compare_end_date" {{($value->is_current_working == 1) ? 'disabled' : ''}} value="{{$value->end_date}}" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4 workingstatus">
                                    <div class="form-group">
                                        <label>Working Status</label>
                                        <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_current_working checkbox_class" {{($value->is_current_working == 1) ? 'checked' : ''}} >Is Currently Working</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City<span class="error">*</span></label>
                                        <input type="text" class="form-control city_field" value="{{$value->city}}" placeholder="City" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State<span class="error">*</span></label>
                                        <select class="form-control state_field">
                                            <option value="">Please select you'r state.</option>
                                            @if($states && count($states) > 0)
                                                @foreach($states as $state_key => $state_value)
                                                    <option value="{{$state_value->id}}" {{($value->state_id == $state_value->id)  ? 'selected' : ''}}>{{$state_value->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label for="employment_history_summary_{{$key}}">Description<span class="error">*</span></label>
                                    <textarea class="form-control employment_history_summary" data-count="employment_history_summary_{{$key}}" rows="5" id="employment_history_summary_{{$key}}" placeholder="Description..">{{$value->description}}</textarea>
                                    </div>
                                </div>
                                
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                                <input type="hidden" class="employmentHistories_ids" value="{{$value->id}}">
                            </div>
                        @endforeach
                    @else
                        <div class="row addrow">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job title<span class="error">*</span></label>
                                    <input type="text" class="form-control job_title_field" id="" placeholder="Job title" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company<span class="error">*</span></label>
                                    <input type="text" class="form-control company_field" placeholder="Company" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Start Date<span class="error">*</span></label>
                                    <input type="date" class="form-control start_date_field disable_future_date compare_start_date" placeholder="00/00/0000" >
                                </div>
                            </div>
                            <div class="col-md-4 end_date_dv">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" class="form-control end_date_field disable_future_date compare_end_date"  disabled placeholder="00/00/0000" >
                                </div>
                            </div>
                            <div class="col-md-4 workingstatus">
                                <div class="form-group">
                                    <label>Working Status</label>
                                    <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_current_working checkbox_class" checked >Is Currently Working</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City<span class="error">*</span></label>
                                    <input type="text" class="form-control city_field"  placeholder="City" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State<span class="error">*</span></label>
                                    <select class="form-control state_field">
                                        <option value="">Please select you'r state.</option>
                                        @if($states && count($states) > 0)
                                            @foreach($states as $state_key => $state_value)
                                                <option value="{{$state_value->id}}" >{{$state_value->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                <label for="employment_history_summary_1">Description<span class="error">*</span></label>
                                <textarea class="form-control employment_history_summary" data-count="employment_history_summary_1" rows="5" id="employment_history_summary_1" placeholder="Description.."></textarea>
                                </div>
                            </div>
                            
                            <div class="addbtn">
                                <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                            </div>
                            <input type="hidden" class="employmentHistories_ids" value="">
                        </div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="addmore">
                            <a id="add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more</a>
                        </div>
                    </div>
                </div>
               
                <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
            </fieldset>
            
            <fieldset class="cvform" data-id="side_education" > 

                <div class="row">
                    <div class="col-md-12">
                        <div class="cvform-heading">
                            <h2>Education <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                            <p>{{ $Contantm && isset($Contantm->education) ? $Contantm->education : '' }}</p>
                        </div>
                    </div>                               
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="errors_">
                            <p id="education_err"></p>
                        </div>
                    </div>
                </div>
                <div class="education_history_bdy">
                     @if(isset($educations) && count($educations) > 0)
                        @foreach($educations as $key => $value)
                        <div class="row addrow">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Institution</label>
                                    <input type="text" value="{{$value->institution}}" class="form-control education_institution_field" placeholder="Institution" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Degree</label>
                                    <input type="text" value="{{$value->degree}}" class="form-control education_degree_field" placeholder="Degree" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" value="{{$value->start_date}}" class="form-control compare_start_date education_start_date_field disable_future_date" placeholder="00/00/0000" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" value="{{$value->end_date}}" {{($value->is_current_studying == 1) ? 'disabled' : ''}} class="form-control compare_end_date education_end_date_field disable_future_date" placeholder="00/00/0000" >
                                </div>
                            </div>
                            <div class="col-md-4 workingstatus">
                                <div class="form-group">
                                    <label>Studying Status</label>
                                    <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control education_is_current_studying checkbox_class" {{($value->is_current_studying == 1) ? 'checked' : ''}} >Is Currently Studying</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" value="{{$value->city}}" class="form-control education_city_field" placeholder="City" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="form-control education_state_field">
                                        <option value="">Please select you'r state.</option>
                                        @if($states && count($states) > 0)
                                            @foreach($states as $state_key => $state_value)
                                                <option @if($value->state_id == $state_value->id) selected @endif value="{{$state_value->id}}" >{{$state_value->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="education_history_summary_{{$key}}">Description</label>
                                    <textarea class="form-control education_history_summary" data-count="education_history_summary_{{$key}}" rows="5" id="education_history_summary_{{$key}}" placeholder="Description..">{!!$value->description!!}</textarea>
                                </div>
                            </div>
                            <input type="hidden" class="educationHistories_ids" value="{{$value->id}}">
                            <div class="addbtn">
                                <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                            </div>
                        </div>
                        @endforeach
                    @else
                    <div class="row addrow">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Institution</label>
                                    <input type="text" class="form-control education_institution_field" placeholder="Institution" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Degree</label>
                                    <input type="text" class="form-control education_degree_field" placeholder="Degree" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" class="form-control education_start_date_field disable_future_date compare_start_date" placeholder="00/00/0000" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" class="form-control education_end_date_field disable_future_date compare_end_date" disabled placeholder="00/00/0000" >
                                </div>
                            </div>
                            <div class="col-md-4 workingstatus">
                                <div class="form-group">
                                    <label>Studying Status</label>
                                    <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control education_is_current_studying checkbox_class"  checked >Is Currently Studying</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control education_city_field" placeholder="City" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="form-control education_state_field">
                                        <option value="">Please select you'r state.</option>
                                        @if($states && count($states) > 0)
                                            @foreach($states as $state_key => $state_value)
                                                <option value="{{$state_value->id}}" >{{$state_value->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="education_history_summary_1">Description</label>
                                    <textarea class="form-control education_history_summary" data-count="education_history_summary_1" rows="5" id="education_history_summary_1" placeholder="Description.."></textarea>
                                </div>
                            </div>
                            <input type="hidden" class="educationHistories_ids" value="">
                            <div class="addbtn">
                                <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                            </div>
                        </div>

                    @endif    
                </div>

             

                <div class="row">
                    <div class="col-md-12">
                    <div class="addmore">
                        <a id="education_add_more_btn"><i class="la la-plus"></i>Add one more</a>
                    </div>
                    </div>
                </div>
                <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" /> 
            </fieldset>
             @if($is_plan_expired == 1)
                <fieldset class="cvform" data-id="choosePlan" >
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="cvform-heading">
                                <h2>Choose Plans</h2>
                                <p>Some Text Here...</p>
                            </div>
                        </div>                              
                    </div>
                    
                    <div class="choosePlan">
                        <div class="row">
                            @foreach ($plan as $plans)
                                <div class="col-md-4">
                                    <div class="generic_content">
                                        <div class="generic_head_price">
                                            <div class="generic_head_content">
                                                    <span>{{ $plans->name }}</span>
                                            </div>
                                            <div class="generic_price_tag">
                                                    <span class="sign">$</span><span class="currency">{{ $plans->price }}</span><span class="month"></span>
                                            </div>
                                        </div>                            
                                        <div class="generic_feature_list">
                                            <ul>
                                                <li><span>{{ $plans->description }}</span></li>
                                            </ul>
                                        </div>
                                        <div class="generic_price_btn">
                                           <a href="{{  route('mysubscriptions.show', ['id'=> $plans->id ,'url_to' => 'chooseplan']) }}" class="btn btn-info">Select</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>	
                    </div>
                               
                    <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" />
                    <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                </fieldset>
            @endif
            
            @if(isset($skills) && count($skills) > 0)
            <fieldset class="cvform" data-id="side_skills" > 
              <div class="row">
                    <div class="col-md-12">
                        <div class="cvform-heading">
                            <h2>Skills <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                            <p>{{ $Contantm && isset($Contantm->skills) ? $Contantm->skills : '' }}</p>
                        </div>
                    </div>                               
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="errors_">
                            <p id="skill_err"></p>
                        </div>
                    </div>
                </div>
                <div class="skills_bdy">
                @if($skills && count($skills) > 0)
                    @foreach($skills as $key => $value)
                    <div class="row addrow">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Skill <span class="error">*</span></label></label>
                                <input type="text" value="{{$value->skill}}" class="form-control skill_name" placeholder="Skill" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Level</label>
                                <select class="form-control skill_level">
                                    <option @if($value->level == '') selected @endif value="">Select skill level</option>
                                    <option @if($value->level == 'Novice') selected @endif value="Novice">Novice</option>
                                    <option @if($value->level == 'Beginner') selected @endif value="Beginner">Beginner</option>
                                    <option @if($value->level == 'Skillful') selected @endif value="Skillful">Skillful</option>
                                    <option @if($value->level == 'Experienced') selected @endif value="Experienced">Experienced</option>
                                    <option @if($value->level == 'Expert') selected @endif value="Expert">Expert</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" class="skill_ids" value="{{$value->id}}">
                        <div class="addbtn">
                            <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)"><i class="la la-minus"></i></button>                      
                        </div>
    
                    </div>
                    @endforeach
                    @else
                    <div class="row addrow">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Skill <span class="error">*</span></label></label>
                                <input type="text" class="form-control skill_name" placeholder="Skill" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Level </label>
                                <select class="form-control skill_level">
                                    <option value="" selected>Select skill level</option>
                                    <option value="Novice">Novice</option>
                                    <option value="Beginner">Beginner</option>
                                    <option value="Skillful">Skillful</option>
                                    <option value="Experienced">Experienced</option>
                                    <option value="Expert">Expert</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" class="skill_ids" value="">
                        <div class="addbtn">
                            <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)"><i class="la la-minus"></i></button>                      
                        </div>
    
                    </div>
                @endif
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="addmore">
                            <a id="skill_add_more_btn"><i class="la la-plus"></i>Add one more Skill</a>
                        </div>
                    </div>
                </div>
                <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
            </fieldset>
            @endif
            @if(isset($internships) && count($internships) > 0)
                <fieldset class="cvform" data-id="side_internships" >
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="cvform-heading">
                                        <h2>Internships <button type="button" class="deletestep "><i class="la la-trash"></i></button></h2>
                                        <p>{{ $Contantm && isset($Contantm->internships) ? $Contantm->internships : '' }}</p>
                                    </div>
                                </div>                               
                            </div> 
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="errors_">
                                        <p id="internship_err"></p>
                                    </div>
                                </div>                               
                            </div> 
                            <div class="inpternship_bdy">
                            @if($internships && count($internships) > 0)
                                @foreach($internships as $key => $value)
                                <div class="row addrow">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Job title<span class="error">*</span></label>
                                            <input type="text" value="{{$value->job_title}}" class="form-control internship_job_title_field" placeholder="Job title" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company<span class="error">*</span></label>
                                            <input type="text" value="{{$value->company}}" class="form-control internship_company_field" placeholder="Company" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Start Date<span class="error">*</span></label>
                                            <input type="date" value="{{$value->start_date}}" class="form-control internship_start_date_field disable_future_date compare_start_date" placeholder="00/00/0000" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="date" value="{{$value->end_date}}" {{($value->is_currently_pursuing_internship == 1) ? 'disabled' : ''}} class="form-control internship_end_date_field disable_future_date compare_end_date" placeholder="00/00/0000" >
                                        </div>
                                    </div>
                                    <div class="col-md-4 workingstatus">
                                        <div class="form-group">
                                            <label>Internship Status</label>
                                            <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_currently_pursuing_internship checkbox_class" {{($value->is_currently_pursuing_internship == 1) ? 'checked' : ''}} >Is Currently Pursuing Internship</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Location">City <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="" value="{{$value->city}}"
                                                class="form-control internship_city_field"
                                                placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Location">State <span
                                                    class="text-danger">*</span></label>
                                            <select name="" 
                                                class="form-control internship_state_field">
                                                @if($states && count($states) > 0)
                                                <option value="">Please select your state.</option>
                                                    @foreach($states as $state_key => $state_value)
                                                        <option @if($value->state_id == $state_value->id) selected @endif value="{{$state_value->id}}" >{{$state_value->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                        <label for="internship_summary_{{$key}}">Description<span class="error">*</span></label>
                                        <textarea class="form-control internship_summary" data-count="internship_summary_{{$key}}" rows="5" id="internship_summary_{{$key}}" placeholder="Description..">{!!$value->description!!}</textarea>
                                        </div>
                                    </div>
                                    <div class="addbtn">
                                        <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                    </div>
                                    <input type="hidden" class="internship_ids" value="{{$value->id}}">
                                </div>
                                @endforeach
                            @else
                                <div class="row addrow">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Job title<span class="error">*</span></label>
                                            <input type="text" class="form-control internship_job_title_field" placeholder="Job title" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company<span class="error">*</span></label>
                                            <input type="text" class="form-control internship_company_field" placeholder="Company" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Start Date<span class="error">*</span></label>
                                            <input type="date" class="form-control internship_start_date_field disable_future_date compare_start_date" placeholder="00/00/0000" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="date" disabled class="form-control internship_end_date_field disable_future_date compare_end_date" placeholder="00/00/0000" >
                                        </div>
                                    </div>
                                    <div class="col-md-4 workingstatus">
                                        <div class="form-group">
                                            <label>Internship Status</label>
                                            <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_currently_pursuing_internship checkbox_class" checked >Is Currently Pursuing Internship</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Location">City <span
                                                    class="text-danger">*</span></label>
                                            <input type="text" name="" value=""
                                                class="form-control internship_city_field"
                                                placeholder="City">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="Location">State <span class="text-danger">*</span></label>
                                            <select name="" 
                                                class="form-control internship_state_field">
                                                @if($states && count($states) > 0)
                                                <option value="">Please select your state.</option>
                                                    @foreach($states as $state_key => $state_value)
                                                        <option  value="{{$state_value->id}}" >{{$state_value->name}}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                        <label for="internship_summary_1">Description<span class="error">*</span></label>
                                        <textarea class="form-control internship_summary" data-count="internship_summary_1" rows="5" id="internship_summary_1" placeholder="Description.."></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" class="internship_ids" value="">
                                    <div class="addbtn">
                                        <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                    </div>
                                </div>
                            @endif
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="addmore">
                                        <a id="internship_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more Internship</a>
                                    </div>
                                </div>
                            </div> 
                            <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                            <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                </fieldset>
            @endif

            @if(isset($certificates) && count($certificates) > 0)
                <fieldset class="cvform" data-id="side_certificates" > 
                        <div class="row">
                            <div class="col-md-12">
                                    <div class="cvform-heading">
                                        <h2>Certificate <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                        <p>{{ $Contantm && isset($Contantm->certificate) ? $Contantm->certificate : '' }}</p>
                                    </div>
                                </div>                               
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="errors_">
                                        <p id="certificate_err"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="certificate_bdy">
                            @if($certificates && count($certificates) > 0)
                                @foreach($certificates as $key => $value)
                                <div class="row addrow">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Certificate Name<span class="error">*</span></label>
                                            <input type="text" value="{{$value->name}}" class="form-control certificate_name_field" placeholder="Certificate Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Orginazation<span class="error">*</span></label>
                                            <input type="text" value="{{$value->organization}}" class="form-control certificate_organization_field" placeholder="Orginazation" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Issed<span class="error">*</span></label>
                                            <input type="date" value="{{$value->issued_date}}" class="form-control certificate_issued_date_field disable_future_date" placeholder="Date of Issed" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="{{$value->url}}" class="form-control certificate_url_field url_validate" placeholder="Url" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="certificate_summary_{{$key}}">Description</label>
                                            <textarea class="form-control certificate_summary" data-count="certificate_summary_{{$key}}" rows="5" id="certificate_summary_{{$key}}" placeholder="Description..">{!!$value->description!!}</textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" class="certificate_ids" value="{{$value->id}}">
                                    <div class="addbtn">
                                        <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="row addrow">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Certificate Name<span class="error">*</span></label>
                                            <input type="text" class="form-control certificate_name_field" placeholder="Certificate Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Orginazation<span class="error">*</span></label>
                                            <input type="text" class="form-control certificate_organization_field" placeholder="Orginazation" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Issed<span class="error">*</span></label>
                                            <input type="date" class="form-control certificate_issued_date_field disable_future_date" placeholder="Date of Issed" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" class="form-control certificate_url_field url_validate" placeholder="Url" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="certificate_summary_1">Description</label>
                                            <textarea class="form-control certificate_summary" data-count="certificate_summary_1" rows="5" id="certificate_summary_1" placeholder="Description.."></textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" class="certificate_ids" value="">
                                    <div class="addbtn">
                                        <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                    </div>
                                </div>
                            @endif
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="addmore">
                                    <a id="certificate_add_more_btn"><i class="la la-plus"></i>Add one more</a>
                                </div>
                                </div>
                            </div>

                            <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                            <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" /> 
                </fieldset>
            @endif

            @if(isset($courses) && count($courses) > 0)
                <fieldset class="cvform" data-id="side_courses" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Courses <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->courses) ? $Contantm->courses : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="course_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="course_bdy">
                        @if($courses && count($courses) > 0)
                            @foreach($courses as $key => $value)
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Institution<span class="error">*</span></label>
                                        <input type="text" value="{{$value->institution}}" class="form-control course_institution" placeholder="Institution" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Course<span class="error">*</span></label>
                                        <input type="text" value="{{$value->course}}" class="form-control course_course" placeholder="Course" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Start Date<span class="error">*</span></label>
                                        <input type="date" value="{{$value->start_date}}" class="form-control course_start_date disable_future_date compare_start_date" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date"  {{($value->is_currently_pursuing_course == 1) ? 'disabled' : ''}} value="{{$value->end_date}}" class="form-control course_end_date disable_future_date compare_end_date" placeholder="00/00/0000" >
                                    </div>
                                </div> 
                                <div class="col-md-4 workingstatus">
                                    <div class="form-group">
                                        <label>Course Status</label>
                                        <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_currently_pursuing_course checkbox_class" {{($value->is_currently_pursuing_course == 1) ? 'checked' : ''}} >Is Currently Pursuing Course</label>
                                    </div>
                                </div>
                                <input type="hidden" class="courses_ids" value="{{$value->id}}">                                                          
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Institution<span class="error">*</span></label>
                                        <input type="text" class="form-control course_institution" placeholder="Institution" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Course<span class="error">*</span></label>
                                        <input type="text" class="form-control course_course" placeholder="Course" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Start Date<span class="error">*</span></label>
                                        <input type="date" class="form-control course_start_date disable_future_date compare_start_date" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" disabled class="form-control course_end_date disable_future_date compare_end_date" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4 workingstatus">
                                    <div class="form-group">
                                        <label>Course Status</label>
                                        <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_currently_pursuing_course checkbox_class" checked >Is Currently Pursuing Course</label>
                                    </div>
                                </div>
                                <input type="hidden" class="courses_ids" value="">                                    
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        @endif
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a id="course_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more course</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>
            @endif
            
            @if(isset($references) && count($references) > 0)
                <fieldset class="cvform" data-id="side_references" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>References <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->references) ? $Contantm->references : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="reference_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="references_bdy">
                        @if($references && count($references) > 0)
                            @foreach($references as $key => $value)
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent name<span class="error">*</span></label>
                                        <input type="text" value="{{$value->referent_name}}" class="form-control reference_name" placeholder="Referent name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent company<span class="error">*</span></label>
                                        <input type="text" value="{{$value->referent_company}}" class="form-control reference_company" placeholder="Referent company" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent email<span class="error">*</span></label>
                                        <input type="email" value="{{$value->referent_email}}" class="form-control reference_email ref_email_validation" placeholder="Referent email" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent phone<span class="error">*</span></label>
                                        <input type="text" value="{{$value->referent_phone_number}}" class="form-control reference_phone_number ref_phone_validation" placeholder="Referent phone" >
                                    </div>
                                </div> 
                                <input class="references_ids" value="{{$value->id}}" type="hidden">                                
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent name<span class="error">*</span></label>
                                        <input type="text" class="form-control reference_name" placeholder="Referent name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent company<span class="error">*</span></label>
                                        <input type="text" class="form-control reference_company" placeholder="Referent company" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent email<span class="error">*</span></label>
                                        <input type="email" class="form-control reference_email ref_email_validation" placeholder="Referent email" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent phone<span class="error">*</span></label>
                                        <input type="text" class="form-control reference_phone_number ref_phone_validation" placeholder="Referent phone" >
                                    </div>
                                </div>      
                                <input class="references_ids" value="" type="hidden">                                
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        @endif
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a  id="references_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more references</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>
            @endif
            
            @if(isset($links) && count($links) > 0)
                <fieldset class="cvform " data-id="side_links" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Links <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->links) ? $Contantm->links : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="link_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="links_bdy">
                        @if($links && count($links) > 0)
                            @foreach($links as $key => $value)
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Link Title<span class="error">*</span></label>
                                        <input type="text" value="{{$value->link_title}}" class="form-control link_title" placeholder="Link Title" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>URL<span class="error">*</span></label>
                                        <input type="text" value="{{$value->url}}" class="form-control link_url url_validate" placeholder="URL" >
                                    </div>
                                </div>
                                <input type="hidden" class="link_ids" value="{{$value->id}}">                               
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Link Title<span class="error">*</span></label>
                                        <input type="text" class="form-control link_title" placeholder="Link Title" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>URL<span class="error">*</span></label>
                                        <input type="text" class="form-control link_url url_validate" placeholder="URL" >
                                    </div>
                                </div>
                                <input type="hidden" class="link_ids" value="">                                                         
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        @endif
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a id="links_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more link</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" />
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>
            @endif
            
            @if(isset($languages) && count($languages) > 0)
                <fieldset class="cvform" data-id="side_language" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Languages <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->languages) ? $Contantm->languages : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="language_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="language_bdy">
                        @if($languages && count($languages) > 0)
                            @foreach($languages as $key => $value)
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Language<span class="error">*</span></label>
                                        <input type="text" value="{{$value->language}}" class="form-control language" placeholder="Language" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Proficiency</label>
                                        <select class="form-control proficiency">
                                            <option value="">Select Proficiency</option>
                                            <option @if($value->proficiency == 'Novice (A1-A2)') selected @endif value="Novice (A1-A2)">Novice (A1-A2)</option>
                                            <option @if($value->proficiency == 'Proficient (B1-B2)') selected @endif value="Proficient (B1-B2)">Proficient (B1-B2)</option>
                                            <option @if($value->proficiency == 'Highly proficient (C1-C2)') selected @endif value="Highly proficient (C1-C2)">Highly proficient (C1-C2)</option>
                                            <option @if($value->proficiency == 'Native') selected @endif value="Native">Native</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" class="language_ids" value="{{$value->id}}">                                                                    
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Language<span class="error">*</span></label>
                                        <input type="text" class="form-control language" placeholder="Language" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Proficiency</label>
                                        <select class="form-control proficiency">
                                            <option value="">Select Proficiency</option>
                                            <option value="Novice (A1-A2)">Novice (A1-A2)</option>
                                            <option value="Proficient (B1-B2)">Proficient (B1-B2)</option>
                                            <option value="Highly proficient (C1-C2)">Highly proficient (C1-C2)</option>
                                            <option value="Native">Native</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" class="language_ids" value="">                              
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        @endif
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a id="language_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more language</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>
            @endif
            
            @if(auth()->guard('web')->user() && auth()->guard('web')->user()->hobbies != null)
                <fieldset class="cvform" data-id="side_hobbies">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Hobbies <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->hobbies) ? $Contantm->hobbies : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="hobbies_summary">Summary</label>
                                    <textarea class="form-control hobbies_summary_" rows="5" id="hobbies_summary" placeholder="Your Summary">{!!auth()->guard('web')->user() ? auth()->guard('web')->user()->hobbies ? auth()->guard('web')->user()->hobbies  : '' :  ''!!}</textarea>
                                    <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong id="hobbies_err"></strong>
                                    </span>
                                </div>
                            </div>
                        </div>    
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>
            @endif
            
            @if(isset($customSections) && count($customSections) > 0)
                <fieldset class="cvform" data-id="side_custom_sections">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Custom section<button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->custom_section) ? $Contantm->custom_section : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="custom_section_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="custom_section_bdy">
                        @if($customSections && count($customSections) > 0)
                            @foreach($customSections as $key => $value)
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Header<span class="error">*</span></label>
                                        <input type="text" value="{{$value->header}}" class="form-control header" placeholder="Header" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subheader<span class="error">*</span></label>
                                        <input type="text" value="{{$value->sub_header}}" class="form-control sub_header" placeholder="Subheader" >
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="custom_header_description_{{$key}}">Description<span class="error">*</span></label>
                                        <textarea class="form-control custom_header_description" data-count="custom_header_description_{{$key}}" rows="5" id="custom_header_description_{{$key}}" placeholder="Description..">{!!$value->description!!}</textarea>
                                    </div>
                                </div>
                                <input type="hidden" value="{{$value->id}}" class="custom_section_ids">                               
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                            @endforeach
                            @else
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Header<span class="error">*</span></label>
                                        <input type="text" class="form-control header" placeholder="Header" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subheader<span class="error">*</span></label>
                                        <input type="text" class="form-control sub_header" placeholder="Subheader" >
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="custom_header_description_1">Description<span class="error">*</span></label>
                                        <textarea class="form-control custom_header_description" data-count="custom_header_description_1" rows="5" id="custom_header_description_1" placeholder="Description.."></textarea>
                                    </div>
                                </div>  
                                <input type="hidden" value="" class="custom_section_ids">                             
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        @endif
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a href="javascript:void(0)" id="custom_section_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add custom section</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>
            @endif

            <!-- Aditional Sections -->
            <fieldset class="cvform" data-id="Additional_section"> 

                <div class="row">
                    <div class="col-md-12">
                        <div class="cvform-heading">
                            <h2>Additional section</h2>
                            <p>{{ $Contantm && isset($Contantm->additional_section) ? $Contantm->additional_section : '' }}</p>
                        </div>
                    </div>                               
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="additional-section" id="additional-section">
                            <ul id="ul-additional-section">
                            
                            </ul>
                        </div>
                    </div>
                </div>
                @if(auth()->guard('web')->user()  && $is_plan_expired == 0)
                    <a href="{{route('design-resume')}}" class="action-button btn btn-info">Preview Design</a>
                @else
                
                <a href="{{route('create-resume')}}" class="action-button btn btn-info">Preview Design</a>
                @endif
                <!-- <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" id="additional_section_next" value="Design" />  -->
                <input type="button" name="previous" class="previous action-button-previous btn btn-info" id="aditional_section_previous" value="Previous" />
            </fieldset>

            <fieldset class="cvform"> 
                <div class="row">
                    <div class="col-md-12">
                        <div class="cvform-heading">
                            <h2>Your Resume</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>                            
                        </div>
                        <div class="yourresume">
                            <img src="{{asset('assets/images/templates5.webp')}}" class="img-fluid" alt="">
                        </div>
                    </div>                               
                </div>
            </fieldset>
        </form>
    </div>
</div>
<button type="button" id="login_popup" class="fade" data-bs-toggle="modal" data-bs-target="#exampleModal"></button>

<div class="modal fade modaldesign"  id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label for="login_email">Email</label>
                <input type="text" class="form-control" id="login_email" placeholder="Email" autofocus>
                <span class="invalid-feedback" style="display:block" role="alert">
                    <strong id="login_email_err"></strong>
                </span>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group lform-group">
                <label for="login_password">Password</label>
                <input type="password" class="form-control" id="login_password" placeholder="Password">
                <span class="invalid-feedback" style="display:block" role="alert">
                    <strong id="login_password_err"></strong>
                </span>
            </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close_popup">Close</button>
        <button type="button" class="btn btn-primary" id="popup_login">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- Verify OTP -->
<div class="modal fade modaldesign"  id="OTPModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Complete Email Verification</h5>
      </div>
      <div class="modal-body">
          <p id="otp_text_message" >We have sent you an OTP to your email address. Please check your inbox and enter the OTP below to verify your email.</p>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <label for="email_otp">OTP</label>
                <input type="number" class="form-control" id="email_otp" placeholder="OTP" autofocus>
                <span class="invalid-feedback" style="display:block" role="alert">
                    <strong id="email_otp_err"></strong>
                </span>
            </div>
            <div class="reset_otplink"><button type="button" class="btn btn-primary" id="reset_otp">Click here to reset OTP</button></div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="otp_close_popup">Close</button>
        <button type="button" class="btn btn-primary" id="validate_otp">Validate</button>
        
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
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script>
    var current_fs, next_fs, previous_fs; // fieldsets
    var opacity;
    var current = 1;
    var steps = $("fieldset").length;
    function setProgressBar(curStep) {
        var percent = parseFloat(100 / steps) * curStep;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%");
    }
    setProgressBar(current);

    // Initialize CKEditor
    var editor = CKEDITOR.replace('professional_summary');
    
    function callCkEditor(){
        $('.employment_history_summary').each(function () {
            CKEDITOR.replace($(this).prop('id'));
        });
        $('.education_history_summary').each(function () {
            CKEDITOR.replace($(this).prop('id'));
        });
        $('.internships_summary').each(function () {
            CKEDITOR.replace($(this).prop('id'));
        });
        $('.hobbies_summary_').each(function(){
            CKEDITOR.replace($(this).prop('id'));
        });
        $('.internship_summary').each(function(){
            CKEDITOR.replace($(this).prop('id'));
        });
        $('.certificate_summary').each(function(){
            CKEDITOR.replace($(this).prop('id'));
        });
        $('.custom_header_description').each(function(){
            CKEDITOR.replace($(this).prop('id'));
        });
    }
    callCkEditor();
    function deleteCollaspe(btn) {
        let formElement = btn.closest('.addrow');
        if (formElement) {
            formElement.remove();
        }
    }
    function generateUniqueId(prefix) {
        let uniqueId = prefix + Math.floor(Math.random() * 1000000);
        while (document.getElementById(uniqueId)) {
            uniqueId = prefix + Math.floor(Math.random() * 1000000);
        }

        return uniqueId;
    }
    function deleteClosestFieldset(button) {
        let closestFieldset = button.closest('fieldset');
        let current_fs = closestFieldset;
        let next_fs = closestFieldset.next();
        let fieldset_heading = closestFieldset.find('.cvform-heading h2').text();
        console.log(fieldset_heading);
        let progressBarId = closestFieldset.data('id');

        let formData = new FormData();
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        formData.append('fieldset', progressBarId);

        $.ajax({
            url: '{{route("delete-resume-section")}}',
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            processData: false,
            contentType: false,
            success: function (response) {
                
                if (response.Field == 'side_employment_history') {
                    $('.work_history_bdy').html('');
                }
                if (response.Field == 'side_education') {
                    $('.education_history_bdy').html('');
                }
                if (response.Field == 'side_skills') {
                    $('.skills_bdy').html('');
                }
                if (response.Field == 'side_internships') {
                    $('.inpternship_bdy').html('');
                }
                if (response.Field == 'side_references') {
                    $('.references_bdy').html('');
                }
                if (response.Field == 'side_courses') {
                    $('.course_bdy').html('');
                }
                if (response.Field == 'side_links') {
                    $('.links_bdy').html('');
                }
                if (response.Field == 'side_language') {
                    $('.language_bdy').html('');
                }
                if (response.Field == 'side_custom_sections') {
                    $('.custom_section_bdy').html('');
                }
                if (response.Field == 'side_certificates') {
                    $('.certificate_bdy').html('');
                }

                if (response.status == 200) {
                    // closestFieldset.find('.next').click();
                    $('#' + progressBarId).remove();
                    closestFieldset.remove();
                    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                    // show the next fieldset
                    next_fs.show();
                    // hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now) {
                            // for making fielset appear animation
                            opacity = 1 - now;

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });
                            next_fs.css({
                                'opacity': opacity
                            });
                        },
                        duration: 500
                    });
                    setProgressBar(++current);
                    addButtonToAdditionalSection(fieldset_heading, progressBarId);
                }
            },
            error: function (xhr, status, error) {
                console.error('Error:', error);
            }
        });
    }

    function addButtonToAdditionalSection(heading, progressBarId) {
        let additionalSection = $('#ul-additional-section');
        additionalSection.append(`<li><button type="button" class="btn additionalbtn" id="${progressBarId}" >${heading}<i class="la la-plus"></i></button></li>`);
    }

    function handleDateFields(dateFields) {
        var currentDate = new Date().toISOString().split('T')[0];
        dateFields.each(function() {
            $(this).attr('max', currentDate);
        });
        dateFields.on('change', function() {
            var selectedDate = $(this).val();
            if (selectedDate > currentDate) {
                $(this).val(currentDate);
            }
        });
    }

    function isValidUrl(url) {
        let urlPattern = /^(ftp|http|https):\/\/[^ "]+$/;
        return urlPattern.test(url);
    }
    function isValidEmail(email) {
        let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailPattern.test(email);
    }
    function isValidUSPhoneNumber(phoneNumber) {
        let usPhoneNumberRegex = /^\+?1?\s?-?\s?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
        return usPhoneNumberRegex.test(phoneNumber);
    }
   
    $(document).ready(function() {
        
        handleDateFields($('.disable_future_date'));
        let readURL = function(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $('.profile-pic').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
        $(".file-upload").on('change', function(){
            readURL(this);
        });

        $(".upload-button").on('click', function() {
            $(".file-upload").click();
        });
        
        $.ajax({
            url: '{{route("add-additional-ul")}}',
            type: 'get',
            processData: false, 
            contentType: false, 
            success: function(response) {
                $('#ul-additional-section').html('');
                $('#ul-additional-section').html(response.html_aditional_btns)
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
    $('body').delegate('.deletestep', 'click', function(){
        deleteClosestFieldset($(this));
    });

// // // // // // // // // // // 
// Add Sections  in side bar // 
// // // // // // // // // // 
    var states = <?php echo $states; ?>;
    var user = "<?php echo $user; ?>";
    $('body').delegate('.additionalbtn', 'click', function(){
        $('.addmore').addClass('clicked');
        let buttonId = $(this).attr('id'); 
        let progressBarId = 'side_' + buttonId.substring(5); 
        let formFieldset = ''; 
        switch(buttonId) {
            case 'side_internships':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_internships" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Internships <button type="button" class="deletestep "><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->internships) ? $Contantm->internships : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="internship_err"></p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="inpternship_bdy">
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Job title<span class="error">*</span></label>
                                        <input type="text" class="form-control internship_job_title_field" placeholder="Job title" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company<span class="error">*</span></label>
                                        <input type="text" class="form-control internship_company_field" placeholder="Company" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Start Date<span class="error">*</span></label>
                                        <input type="date" class="form-control internship_start_date_field disable_future_date compare_start_date" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" disabled class="form-control internship_end_date_field disable_future_date compare_end_date" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4 workingstatus">
                                    <div class="form-group">
                                        <label>Internship Status</label>
                                        <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_currently_pursuing_internship checkbox_class" checked >Is Currently Pursuing Internship</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Location">City <span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="" value=""
                                            class="form-control internship_city_field"
                                            placeholder="City">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="Location">State <span class="text-danger">*</span></label>
                                        <select name="" 
                                            class="form-control internship_state_field">
                                            @if($states && count($states) > 0)
                                                <option value="">Please select your state.</option>
                                                @foreach($states as $state_key => $state_value)
                                                    <option  value="{{$state_value->id}}" >{{$state_value->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-lg-12">
                                    <div class="form-group">
                                    <label for="internship_summary_1">Description<span class="error">*</span></label>
                                    <textarea class="form-control internship_summary" data-count="internship_summary_1" rows="5" id="internship_summary_1" placeholder="Description.."></textarea>
                                    </div>
                                </div>
                                <input type="hidden" class="internship_ids" value="">
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a id="internship_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more Internship</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                    CKEDITOR.replace($('#internship_summary_1').prop('id'));
                    handleDateFields($('.disable_future_date'));
                break;
            case 'side_courses':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_courses" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Courses <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                     <p>{{ $Contantm && isset($Contantm->courses) ? $Contantm->courses : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="course_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="course_bdy">
                        
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Institution<span class="error">*</span></label>
                                        <input type="text" class="form-control course_institution" placeholder="Institution" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Course<span class="error">*</span></label>
                                        <input type="text" class="form-control course_course" placeholder="Course" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Start Date<span class="error">*</span></label>
                                        <input type="date" class="form-control course_start_date disable_future_date compare_start_date" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" disabled class="form-control course_end_date disable_future_date compare_end_date" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4 workingstatus">
                                    <div class="form-group">
                                        <label>Course Status</label>
                                        <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_currently_pursuing_course checkbox_class" checked >Is Currently Pursuing Course</label>
                                    </div>
                                </div>
                                <input type="hidden" class="courses_ids" value="">                                    
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a id="course_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more course</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                    handleDateFields($('.disable_future_date'));
                    break;
            
            case 'side_references':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_references" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>References <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->references) ? $Contantm->references : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="reference_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="references_bdy">
                       
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent name<span class="error">*</span></label>
                                        <input type="text" class="form-control reference_name" placeholder="Referent name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent company<span class="error">*</span></label>
                                        <input type="text" class="form-control reference_company" placeholder="Referent company" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent email<span class="error">*</span></label>
                                        <input type="email" class="form-control reference_email ref_email_validation" placeholder="Referent email" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Referent phone<span class="error">*</span></label>
                                        <input type="text" class="form-control reference_phone_number ref_phone_validation" placeholder="Referent phone" >
                                    </div>
                                </div>      
                                <input class="references_ids" value="" type="hidden">                                
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a  id="references_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more references</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                
                    break;
            case 'side_links':
                formFieldset = `
                    <fieldset class="cvform " data-id="side_links" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Links <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                     <p>{{ $Contantm && isset($Contantm->links) ? $Contantm->links : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="link_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="links_bdy">
                       
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Link Title<span class="error">*</span></label>
                                        <input type="text" class="form-control link_title" placeholder="Link Title" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>URL<span class="error">*</span></label>
                                        <input type="text" class="form-control link_url url_validate" placeholder="URL" >
                                    </div>
                                </div>
                                <input type="hidden" class="link_ids" value="">                                                         
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                       
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a id="links_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more link</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                break;
            case 'side_language':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_language" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Languages <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->languages) ? $Contantm->languages : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="language_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="language_bdy">
                        
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Language<span class="error">*</span></label>
                                        <input type="text" class="form-control language" placeholder="Language" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Proficiency</label>
                                        <select class="form-control proficiency">
                                            <option value="">Select Proficiency</option>
                                            <option value="Novice (A1-A2)">Novice (A1-A2)</option>
                                            <option value="Proficient (B1-B2)">Proficient (B1-B2)</option>
                                            <option value="Highly proficient (C1-C2)">Highly proficient (C1-C2)</option>
                                            <option value="Native">Native</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="hidden" class="language_ids" value="">                              
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a id="language_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add one more language</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                break;
            case 'side_hobbies':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_hobbies">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Hobbies <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->hobbies) ? $Contantm->hobbies : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="hobbies_summary">Summary</label>
                                    <textarea class="form-control hobbies_summary_" rows="5" id="hobbies_summary" placeholder="Your Summary"></textarea>
                                    <span class="invalid-feedback" style="display:block" role="alert">
                                        <strong id="hobbies_err"></strong>
                                    </span>
                                </div>
                            </div>
                        </div>    
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                    CKEDITOR.replace($('#hobbies_summary').prop('id'));
                break;
            case 'side_custom_sections':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_custom_sections">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Custom section<button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->custom_section) ? $Contantm->custom_section : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="custom_section_err"></p>
                                </div>
                            </div>                               
                        </div>
                        <div class="custom_section_bdy">
                       
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Header<span class="error">*</span></label>
                                        <input type="text" class="form-control header" placeholder="Header" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Subheader<span class="error">*</span></label>
                                        <input type="text" class="form-control sub_header" placeholder="Subheader" >
                                    </div>
                                </div> 
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="custom_header_description_1">Description<span class="error">*</span></label>
                                        <textarea class="form-control custom_header_description" data-count="custom_header_description_1" rows="5" id="custom_header_description_1" placeholder="Description.."></textarea>
                                    </div>
                                </div>  
                                <input type="hidden" value="" class="custom_section_ids">                             
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
            
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a href="javascript:void(0)" id="custom_section_add_more_btn" class="add_more_btn"><i class="la la-plus"></i>Add custom section</a>
                                </div>
                            </div>
                        </div> 
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                    CKEDITOR.replace($('#custom_header_description_1').prop('id'));
                break;
            case 'side_skills':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_skills" > 

                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Skills <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->skills) ? $Contantm->skills : '' }}</p>
                                </div>
                            </div>                               
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="skill_err"></p>
                                </div>
                            </div>
                        </div>
                        <div class="skills_bdy">
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Skill <span class="error">*</span></label></label>
                                        <input type="text" class="form-control skill_name" placeholder="Skill" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Level </label>
                                        <select class="form-control skill_level">
                                            <option value="" selected>Select skill level</option>
                                            <option value="Novice">Novice</option>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Skillful">Skillful</option>
                                            <option value="Experienced">Experienced</option>
                                            <option value="Expert">Expert</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)"><i class="la la-minus"></i></button>                      
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a id="skill_add_more_btn"><i class="la la-plus"></i>Add one more Skill</a>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                break;
            case 'side_employment_history':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_employment_history" >
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Employment history <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->employment_history) ? $Contantm->employment_history : '' }}</p>
                                </div>
                            </div>                               
                        </div> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="employment_err"></p>
                                </div>
                            </div>
                        </div>
                        <div class="work_history_bdy">
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Job title<span class="error">*</span></label>
                                        <input type="text" class="form-control job_title_field" placeholder="Job title" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Company<span class="error">*</span></label>
                                        <input type="text" class="form-control company_field" placeholder="Company" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Start Date<span class="error">*</span></label>
                                        <input type="date" class="form-control start_date_field disable_future_date compare_start_date" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" class="form-control end_date_field disable_future_date compare_end_date" placeholder="00/00/0000" disabled >
                                    </div>
                                </div>
                                <div class="col-md-4 workingstatus">
                                    <div class="form-group">
                                        <label>Working Status</label>
                                        <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_current_working checkbox_class" checked >Is Currently Working</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City<span class="error">*</span></label>
                                        <input type="text" class="form-control city_field"  placeholder="City" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State<span class="error">*</span></label>
                                        <select class="form-control state_field">
                                            <option value="">Please select you'r state.</option>
                                            ${
                                                states && states.length > 0
                                                    ? states.map(val => `<option value="${val.id}">${val.name}</option>`).join('')
                                                    : '<option value="">Please select your state.</option>'
                                            }
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="employment_history_summary_1">Description<span class="error">*</span></label>
                                        <textarea class="form-control employment_history_summary" data-count="employment_history_summary_1" rows="5" id="employment_history_summary_1" placeholder="Description.."></textarea>
                                    </div>
                                </div>
                                
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="addmore">
                                    <a type="button" id="add_more_btn" data-id="2" class="add_more_btn"><i class="la la-plus"></i>Add one more</a>
                                </div>
                            </div>
                        </div>
                        
                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" />
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                    CKEDITOR.replace($('#employment_history_summary_1').prop('id'));
                    handleDateFields($('.disable_future_date'));
                break;
            case 'side_education':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_education" > 

                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Education <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->education) ? $Contantm->education : '' }}</p>
                                </div>
                            </div>                               
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="education_err"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="education_err"></p>
                                </div>
                            </div>
                        </div>
                        <div class="education_history_bdy">
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Institution</label>
                                        <input type="text" class="form-control  education_institution_field" placeholder="Institution" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Degree</label>
                                        <input type="text" class="form-control  education_degree_field" placeholder="Degree" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Start Date</label>
                                        <input type="date" class="form-control disable_future_date compare_start_date education_start_date_field" placeholder="00/00/0000" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>End Date</label>
                                        <input type="date" class="form-control disable_future_date compare_end_date education_end_date_field" placeholder="00/00/0000" disabled>
                                    </div>
                                </div>
                                <div class="col-md-4 workingstatus">
                                    <div class="form-group">
                                        <label>Studying Status</label>
                                        <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control education_is_current_studying checkbox_class"  checked >Is Currently Studying</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control education_city_field"  placeholder="City" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>State</label>
                                        <select class="form-control education_state_field">
                                            <option value="">Please select you'r state.</option>
                                            ${
                                                states && states.length > 0
                                                    ? states.map(val => `<option value="${val.id}">${val.name}</option>`).join('')
                                                    : '<option value="">Please select your state.</option>'
                                            }
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="education_history_summary_1">Description</label>
                                        <textarea class="form-control education_history_summary" data-count="education_history_summary_1" rows="5" id="education_history_summary_1" placeholder="Description.."></textarea>
                                    </div>
                                </div>
                                
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-12">
                            <div class="addmore">
                                <a id="education_add_more_btn"><i class="la la-plus"></i>Add one more</a>
                            </div>
                            </div>
                        </div>

                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" /> 
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                    CKEDITOR.replace($('#education_history_summary_1').prop('id'));
                    handleDateFields($('.disable_future_date'));

                break;
            case 'side_certificates':
                formFieldset = `
                    <fieldset class="cvform" data-id="side_certificates" > 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="cvform-heading">
                                    <h2>Certificate <button type="button" class="deletestep"><i class="la la-trash"></i></button></h2>
                                    <p>{{ $Contantm && isset($Contantm->certificate) ? $Contantm->certificate : '' }}</p>
                                </div>
                            </div>                               
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="errors_">
                                    <p id="certificate_err"></p>
                                </div>
                            </div>
                        </div>
                        <div class="certificate_bdy">
                       
                            <div class="row addrow">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Certificate Name<span class="error">*</span></label>
                                        <input type="text" class="form-control certificate_name_field" placeholder="Certificate Name" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Orginazation<span class="error">*</span></label>
                                        <input type="text" class="form-control certificate_organization_field" placeholder="Orginazation" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date of Issed<span class="error">*</span></label>
                                        <input type="date" class="form-control certificate_issued_date_field disable_future_date" placeholder="Date of Issed" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Url</label>
                                        <input type="text" class="form-control certificate_url_field url_validate" placeholder="Url" >
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="certificate_summary_1">Description</label>
                                        <textarea class="form-control certificate_summary" data-count="certificate_summary_1" rows="5" id="certificate_summary_1" placeholder="Description.."></textarea>
                                    </div>
                                </div>
                                <input type="hidden" class="certificate_ids" value="">
                                <div class="addbtn">
                                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                </div>
                            </div>
                        
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="addmore">
                                <a id="certificate_add_more_btn"><i class="la la-plus"></i>Add one more</a>
                            </div>
                            </div>
                        </div>

                        <input type="button" name="next" class="next action-button btn btn-info next_btn_data_save" value="Next" /> 
                        <input type="button" name="previous" class="previous action-button-previous btn btn-info" value="Previous" /> 
                    </fieldset>`;
                    $('#Additional_section').removeClass('active');
                    $(this).closest('li').remove();
                    $('#progressbar li:nth-last-child(2)').after('<li class="active check_exist" data-user="' + ((user) ? 1 : 0) +'" id="' + progressBarId + '"><strong>' + $(this).text() + '</strong></li>');
                    $('#msform fieldset:nth-last-child(3)').after(formFieldset);
                    $('#aditional_section_previous').click();
                    CKEDITOR.replace($('#certificate_summary_1').prop('id'));
                    handleDateFields($('.disable_future_date'));

                break;
            default:
                break;
        }
    });

    $('body').delegate('#internship_add_more_btn', 'click', function(){
        let IntId = generateUniqueId('internship_summary_');
        let html = `
            <div class="row addrow">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Job title<span class="error">*</span></label>
                        <input type="text" class="form-control internship_job_title_field" placeholder="Job title" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Company<span class="error">*</span></label>
                        <input type="text" class="form-control internship_company_field" placeholder="Company" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Start Date<span class="error">*</span></label>
                        <input type="date" class="form-control internship_start_date_field disable_future_date compare_start_date" placeholder="00/00/0000" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>End Date</label>
                        <input type="date" disabled class="form-control internship_end_date_field disable_future_date compare_end_date" placeholder="00/00/0000" >
                    </div>
                </div>
                <div class="col-md-4 workingstatus">
                    <div class="form-group">
                        <label>Internship Status</label>
                        <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_currently_pursuing_internship checkbox_class" checked >Is Currently Pursuing Internship</label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="Location">City <span
                                class="text-danger">*</span></label>
                        <input type="text" name="" value=""
                            class="form-control internship_city_field"
                            placeholder="City">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="Location">State <span class="text-danger">*</span></label>
                        <select name="" 
                            class="form-control internship_state_field">
                            @if($states && count($states) > 0)
                                <option value="">Please select your state.</option>
                                @foreach($states as $state_key => $state_value)
                                    <option  value="{{$state_value->id}}" >{{$state_value->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                    <label for="${IntId}">Description<span class="error">*</span></label>
                    <textarea class="form-control internship_summary" data-count=${IntId} rows="5" id="${IntId}" placeholder="Description.."></textarea>
                    </div>
                </div>
                <input type="hidden" class="internship_ids" value="">
                <div class="addbtn">
                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                </div>
            </div>`;
        $('.inpternship_bdy').append(html);
        let lastAddRow = $('.inpternship_bdy .addrow:last-child');
        let inpternshipSummary = lastAddRow.find('.internship_summary');
        let summaryId = inpternshipSummary.attr('id');
        CKEDITOR.replace(summaryId);
        handleDateFields(lastAddRow.find('.disable_future_date'));
    });

    $('body').delegate('#references_add_more_btn', 'click', function(){
        let html = `
            <div class="row addrow">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Referent name<span class="error">*</span></label>
                        <input type="text" class="form-control reference_name" placeholder="Referent name" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Referent company<span class="error">*</span></label>
                        <input type="text" class="form-control reference_company" placeholder="Referent company" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Referent email<span class="error">*</span></label>
                        <input type="email" class="form-control reference_email ref_email_validation" placeholder="Referent email" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Referent phone<span class="error">*</span></label>
                        <input type="text" class="form-control reference_phone_number ref_phone_validation" placeholder="Referent phone" >
                    </div>
                </div>                                    
                <div class="addbtn">
                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                </div>
            </div>`;
        $('.references_bdy').append(html);
       
     
    });
    $('body').delegate('#course_add_more_btn', 'click', function(){
        let html = `
            <div class="row addrow">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Institution<span class="error">*</span></label>
                        <input type="text" class="form-control course_institution" placeholder="Institution" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Course<span class="error">*</span></label>
                        <input type="text" class="form-control course_course" placeholder="Course" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Start Date<span class="error">*</span></label>
                        <input type="date" class="form-control course_start_date disable_future_date compare_start_date" placeholder="00/00/0000" >
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>End Date</label>
                        <input type="date" disabled class="form-control course_end_date disable_future_date compare_end_date" placeholder="00/00/0000" >
                    </div>
                </div> 
                <div class="col-md-4 workingstatus">
                    <div class="form-group">
                        <label>Course Status</label>
                        <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_currently_pursuing_course checkbox_class" checked >Is Currently Pursuing Course</label>
                    </div>
                </div>                                   
                <div class="addbtn">
                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                </div>
            </div>`;
        $('.course_bdy').append(html);
        handleDateFields($('.disable_future_date'));
       
     
    });
    $('body').delegate('#links_add_more_btn', 'click', function(){
        let html = `
            <div class="row addrow">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Link Title<span class="error">*</span></label>
                        <input type="text" class="form-control link_title" placeholder="Link Title" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>URL<span class="error">*</span></label>
                        <input type="text" class="form-control link_url url_validate" placeholder="URL" >
                    </div>
                </div>                                
                <div class="addbtn">
                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                </div>
            </div>
            `;
        $('.links_bdy').append(html);
       
     
    });
    $('body').delegate('#language_add_more_btn', 'click', function(){
        let html = `
            <div class="row addrow">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Language<span class="error">*</span></label>
                        <input type="text" class="form-control language" placeholder="Language" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Proficiency</label>
                        <select class="form-control proficiency">
                            <option value="">Select Proficiency</option>
                            <option value="Novice (A1-A2)">Novice (A1-A2)</option>
                            <option value="Proficient (B1-B2)">Proficient (B1-B2)</option>
                            <option value="Highly proficient (C1-C2)">Highly proficient (C1-C2)</option>
                            <option value="Native">Native</option>
                        </select>
                    </div>
                </div>                                
                <div class="addbtn">
                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                </div>
            </div>
            `;
        $('.language_bdy').append(html);
       
     
    });
    $('body').delegate('#custom_section_add_more_btn', 'click', function(){
        let CustId = generateUniqueId('custom_header_description_');
        let html = `
            <div class="row addrow">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Header<span class="error">*</span></label>
                        <input type="text" class="form-control header" placeholder="Header" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Subheader<span class="error">*</span></label>
                        <input type="text" class="form-control sub_header" placeholder="Subheader" >
                    </div>
                </div> 
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="${CustId}">Description<span class="error">*</span></label>
                        <textarea class="form-control custom_header_description" data-count=${CustId} rows="5" id="${CustId}" placeholder="Description.."></textarea>
                    </div>
                </div>
                <input type="hidden" value="" class="custom_section_ids">                   
                <div class="addbtn">
                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                </div>
            </div>
            `;
        $('.custom_section_bdy').append(html);
        let lastAddRow = $('.custom_section_bdy .addrow:last-child');
        let custom_header_description = lastAddRow.find('.custom_header_description');
        let summaryId = custom_header_description.attr('id');
        CKEDITOR.replace(summaryId);
  
    });
    $('body').delegate('#add_more_btn', 'click', function(){
        let newId = generateUniqueId('employment_history_summary_');
        let html = `<div class="row addrow">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Job title<span class="error">*</span></label>
                                    <input type="text" class="form-control job_title_field" placeholder="Job title" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company<span class="error">*</span></label>
                                    <input type="text" class="form-control company_field" placeholder="Company" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Start Date<span class="error">*</span></label>
                                    <input type="date" class="form-control compare_start_date disable_future_date start_date_field" placeholder="00/00/0000" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" class="form-control end_date_field compare_end_date disable_future_date" placeholder="00/00/0000" disabled>
                                </div>
                            </div>
                            <div class="col-md-4 workingstatus">
                                <div class="form-group">
                                    <label>Working Status</label>
                                    <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control is_current_working checkbox_class" checked >Is Currently Working</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City<span class="error">*</span></label>
                                    <input type="text" class="form-control city_field"  placeholder="City" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State<span class="error">*</span></label>
                                    <select class="form-control state_field">
                                        <option value="">Please select you'r state.</option>
                                        ${
                                            states && states.length > 0
                                                ? states.map(val => `<option value="${val.id}">${val.name}</option>`).join('')
                                                : '<option value="">Please select your state.</option>'
                                        }
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                <label for="${newId}">Description<span class="error">*</span></label>
                                <textarea class="form-control employment_history_summary" data-count=${newId} rows="5" id="${newId}" placeholder="Description.."></textarea>
                                </div>
                            </div>
                        
                            <div class="addbtn">
                                <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)"><i class="la la-minus"></i></button>                      
                            </div>
                        </div>`;
                       
        $('.work_history_bdy').append(html);
        let lastAddRow = $('.work_history_bdy .addrow:last-child');
        let employmentHistorySummary = lastAddRow.find('.employment_history_summary');
        let summaryId = employmentHistorySummary.attr('id');
        CKEDITOR.replace(summaryId);
        handleDateFields(lastAddRow.find('.disable_future_date'));
     
    });
    $('body').delegate('#education_add_more_btn', 'click', function(){
        let EdId = generateUniqueId('education_history_summary_');
        let html = `<div class="row addrow">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Institution</label>
                                    <input type="text" class="form-control education_institution_field" placeholder="Institution" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Degree</label>
                                    <input type="text" class="form-control education_degree_field" placeholder="Degree" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Start Date</label>
                                    <input type="date" class="form-control education_start_date_field compare_start_date disable_future_date" placeholder="00/00/0000" >
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>End Date</label>
                                    <input type="date" class="form-control education_end_date_field compare_end_date disable_future_date" placeholder="00/00/0000" disabled >
                                </div>
                            </div>
                            <div class="col-md-4 workingstatus">
                                <div class="form-group">
                                    <label>Studying Status</label>
                                    <label class="workingcheckbox"><input type="checkbox" value="1" class="form-control education_is_current_studying checkbox_class"  checked >Is Currently Studying</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control education_city_field"  placeholder="City" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>State</label>
                                    <select class="form-control education_state_field">
                                        <option value="">Please select you'r state.</option>
                                        ${
                                            states && states.length > 0
                                                ? states.map(val => `<option value="${val.id}">${val.name}</option>`).join('')
                                                : '<option value="">Please select your state.</option>'
                                        }
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="${EdId}">Description</label>
                                    <textarea class="form-control education_history_summary" data-count=${EdId} rows="5" id="${EdId}" placeholder="Description.."></textarea>
                                </div>
                            </div>
                            
                            <div class="addbtn">
                                <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                            </div>
                        </div>`;            
                        $('.education_history_bdy').append(html);
                        let lastAddRow = $('.education_history_bdy .addrow:last-child');
                        let educationHistorySummary = lastAddRow.find('.education_history_summary');
                        let summaryId = educationHistorySummary.attr('id');
                        CKEDITOR.replace(summaryId);
                        handleDateFields(lastAddRow.find('.disable_future_date'));
        
    });
    $('body').delegate('#skill_add_more_btn', 'click', function(){
        let html = `
            <div class="row addrow">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Skill <span class="error">*</span></label></label>
                        <input type="text" class="form-control skill_name" placeholder="Skill" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control skill_level">
                            <option value="" selected>Select skill level</option>
                            <option value="Novice">Novice</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Skillful">Skillful</option>
                            <option value="Experienced">Experienced</option>
                            <option value="Expert">Expert</option>
                        </select>
                    </div>
                </div>

                <div class="addbtn">
                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)"><i class="la la-minus"></i></button>                      
                </div>

            </div>
            `;
        $('.skills_bdy').append(html);
       
     
    });
    $('body').delegate('#certificate_add_more_btn', 'click', function(){
        let CerId = generateUniqueId('certificate_summary_');
        let html = `
            <div class="row addrow">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Certificate Name<span class="error">*</span></label>
                        <input type="text" class="form-control certificate_name_field" placeholder="Certificate Name" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Orginazation<span class="error">*</span></label>
                        <input type="text" class="form-control certificate_organization_field" placeholder="Orginazation" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Date of Issed<span class="error">*</span></label>
                        <input type="date" class="form-control certificate_issued_date_field disable_future_date" placeholder="Date of Issed" >
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Url</label>
                        <input type="text" class="form-control certificate_url_field url_validate" placeholder="Url" >
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="${CerId}">Description</label>
                        <textarea class="form-control certificate_summary" data-count="${CerId}" rows="5" id="${CerId}" placeholder="Description.."></textarea>
                    </div>
                </div>
                
                <div class="addbtn">
                    <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                </div>
            </div>
            `;
        $('.certificate_bdy').append(html);
        let lastAddRow = $('.certificate_bdy .addrow:last-child');
        let certificate_summary = lastAddRow.find('.certificate_summary');
        let summaryId = certificate_summary.attr('id');
        CKEDITOR.replace(summaryId);
        handleDateFields(lastAddRow.find('.disable_future_date'));

    });
    $('body').delegate('#final_section_next', 'click', function(){
        console.log('ok');
    });
    // Change checkbox value manage
    $('body').delegate('.education_is_current_studying', 'change', function(){
        if($(this).is(':checked') == true){
            $(this).val(1);
            $(this).closest('.addrow').find('.education_end_date_field').val('');
            $(this).closest('.addrow').find('.education_end_date_field').attr('disabled', true);
        }else{
            $(this).val(0);
            $(this).closest('.addrow').find('.education_end_date_field').attr('disabled', false);
        }
    });

    $('body').delegate('.is_currently_pursuing_internship', 'change', function(){
        if($(this).is(':checked') == true){
            $(this).val(1);
            $(this).closest('.addrow').find('.internship_end_date_field').val('');
            $(this).closest('.addrow').find('.internship_end_date_field').attr('disabled', true);
        }else{
            $(this).val(0);
            $(this).closest('.addrow').find('.internship_end_date_field').attr('disabled', false);
        }
    });

    $('body').delegate('.is_currently_pursuing_course', 'change', function(){
        if($(this).is(':checked') == true){
            $(this).val(1);
            $(this).closest('.addrow').find('.course_end_date').val('');
            $(this).closest('.addrow').find('.course_end_date').attr('disabled', true);
        }else{
            $(this).val(0);
            $(this).closest('.addrow').find('.course_end_date').attr('disabled', false);
        }
    });

    $('body').delegate('.is_current_working', 'change', function(){

        if($(this).is(':checked') == true){
            $(this).val(1);
            $(this).closest('.addrow').find('.end_date_field').val('');
            $(this).closest('.addrow').find('.end_date_field').attr('disabled', true);

        }else{
            $(this).val(0);
            $(this).closest('.addrow').find('.end_date_field').attr('disabled', false);
        }
    });

    // Save Resume Data 
    $('body').delegate('.next_btn_data_save', 'click', function(){
        let fieldset_name = $(this).closest('fieldset').data('id');
        let btn_element = $(this);

        // Personal Detail Data Save  
        if(fieldset_name === 'personalDetail'){
            btn_element.val('Loading...');
            let first_name = $('#first_name').val();
            let last_name = $('#last_name').val();
            let email = $('#email').val();
            let driver_license = $('#driver_license').val();
            let date_of_birth = $('#date_of_birth').val();
            let fieldset_name = 'personalDetail';
            let profileImageInput = $('#profile_image')[0].files[0];
            let csrfToken = $('meta[name="csrf-token"]').attr('content');
            let captcha_response = grecaptcha.getResponse();
            
            let formData = new FormData();
            formData.append('first_name', first_name);
            formData.append('last_name', last_name);
            formData.append('email', email);
            formData.append('driver_license', driver_license);
            formData.append('date_of_birth', date_of_birth);
            formData.append('fieldset_name', fieldset_name);
            formData.append('profile_image', profileImageInput);

            formData.append('g-recaptcha-response', captcha_response);
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $.ajax({
                url: '{{route("save-resume-data")}}',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                processData: false, 
                contentType: false, 
                success: function(response) {

                    if(response.flag == 'verify_otp'){
                        $('#personal_detail_next_btn').hide();
                        $('#otp_popup_model').show();
                        $('#otp_popup_model').click();
                    }else if(response.flag == 'next_step'){
                        $('#otp_popup_model').hide();
                        $('#personal_detail_next_btn').show();
                        $('#personal_detail_next_btn').click();
                        
                    }else{
                        $('#otp_close_popup').click();
                        $('#ul_content').html('');
                        $('#ul_content').html(response.html_ul);
                        if(response.user.profile_image !== null){
                            $('#user_image').attr('src', response.user.profile_image);
                        }else{
                            $('#user_image').attr('src', window.location.origin+'/'+'assets/images/no-preview.jpeg'); 
                        }
                        
                        btn_element.val('Next');
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        next_fs.show();
                        current_fs.hide();
                        setProgressBar(++current);
                        
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                    if (xhr.status === 422) {
                        
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function (key, value) {
                            $('#' + key + '_err').html(value[0]);
                            
                        });
                        btn_element.val('Next');
                    }
                }
            });
        }

        // Contact information Data Save
        if(fieldset_name === 'contact_information'){
            
            btn_element.val('Loading...');
            let country = $('#country').val();
            let city = $('#city').val();
            let postal_code = $('#postal_code').val();
            let phone_number = $('#phone_number').val();
            let address = $('#address').val();
            let fieldset_name = 'contact_information';
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            let formData = new FormData();
            formData.append('country', country);
            formData.append('city', city);
            formData.append('postal_code', postal_code);
            formData.append('phone_number', phone_number);
            formData.append('address', address);
            formData.append('fieldset_name', fieldset_name);
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $.ajax({
                url: '{{route("save-resume-data")}}',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                processData: false, 
                contentType: false, 
                success: function(response) {
                    if(response.status == 200){
                        btn_element.val('Next');
                        // Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        next_fs.show();
                        current_fs.hide();
                        setProgressBar(++current);
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
        }

        // professional Summary Data Save
        if(fieldset_name === 'professionalsummary'){
            btn_element.val('Loading...');
            let professional_summary = CKEDITOR.instances.professional_summary.getData();
            let fieldset_name = 'professionalsummary';
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            let formData = new FormData();
            formData.append('professional_summary', professional_summary);
            formData.append('fieldset_name', fieldset_name);
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            $.ajax({
                url: '{{route("save-resume-data")}}',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                processData: false, 
                contentType: false, 
                success: function(response) {
                    if(response.status == 200){
                        btn_element.val('Next');
                        // Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        next_fs.show();
                        current_fs.hide();
                        setProgressBar(++current);
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
        }

        // Employment History Data Save 
        if(fieldset_name === 'side_employment_history'){
            btn_element.val('Loading...');
            let job_title = [];
            let employment_history_ids = [];
            let company = [];
            let start_date = [];
            let end_date = [];
            let city = [];
            let state = [];
            let description = [];
            let is_current_working = [];
            let fieldset_name = 'side_employment_history';
            let isValid = true;
            $(this).find('option:selected').val()
            let count_ = $('.work_history_bdy .addrow').length;
            for (let i = 0; i < count_; i++) {
                employment_history_ids.push($('.employmentHistories_ids').eq(i).val());
                job_title.push($('.job_title_field').eq(i).val());
                company.push($('.company_field').eq(i).val());
                start_date.push($('.start_date_field').eq(i).val());
                var end_date_value = $('.end_date_field').eq(i).val();
                end_date.push(end_date_value.trim() == '' ? '0000-00-00' : end_date_value);
                city.push($('.city_field').eq(i).val());
                state.push($('.state_field').eq(i).find('option:selected').val());
                let data_count = $('.employment_history_summary').eq(i).attr('data-count');
                
                description.push(CKEDITOR.instances[data_count].getData());
                if($('.is_current_working').eq(i).is(':checked')){
                    is_current_working.push('1');
                }else{
                    is_current_working.push('0');
                }

                // Validation checks for each row
                if (!job_title[i] || !company[i] || !start_date[i] || !description[i] || !city[i] || !state[i]) {
                    isValid = false;
                    $('#employment_err').html('Please fill in all required fields in each row.');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }

            }

            if (isValid) {
                let csrfToken = $('meta[name="csrf-token"]').attr('content');

                let formData = new FormData();
                for (let i = 0; i < count_; i++) {

                    if(employment_history_ids[i]){
                        formData.append('employment_history_ids[]', employment_history_ids[i]);
                    }
                    if(job_title[i]){
                        formData.append('job_title[]', job_title[i]);
                    }
                    if(company[i]){
                        formData.append('company[]', company[i]);
                    }
                    if(start_date[i]){
                        formData.append('start_date[]', start_date[i]);
                    }
                    if(end_date[i]){
                        formData.append('end_date[]', end_date[i]);
                    }
                    if(is_current_working[i]){
                        formData.append('is_current_working[]', is_current_working[i]);
                    }
                    if(city[i]){
                        formData.append('city[]', city[i]);
                    }
                    if(state[i]){
                        formData.append('state_id[]', state[i]);
                    }
                    if(description[i]){
                        formData.append('description[]', description[i]);
                    }

                }
                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        if(response.status == 200){
                            btn_element.val('Next');
                            // Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }
        }

        // Education History Data Save 
        if(fieldset_name === 'side_education'){
            btn_element.val('Loading...');
            let education_history_ids = [];
            let institution = [];
            let degree = [];
            let start_date = [];
            let end_date = [];
            let city = [];
            let state = [];
            let education_is_current_studying = [];
            let description = [];
            let fieldset_name = 'side_education';
            let isValid = true;
            let count_ = $('.education_history_bdy .addrow').length;

            for (let i = 0; i < count_; i++) {
                education_history_ids.push($('.educationHistories_ids').eq(i).val());
                institution.push($('.education_institution_field').eq(i).val());
                degree.push($('.education_degree_field').eq(i).val());
                start_date.push($('.education_start_date_field').eq(i).val());
                let end_date_value = $('.education_end_date_field').eq(i).val();
                end_date.push(end_date_value.trim() == '' ? '0000-00-00' : end_date_value);
                city.push($('.education_city_field').eq(i).val());
                state.push($('.education_state_field').eq(i).find('option:selected').val());
                let data_count = $('.education_history_summary').eq(i).attr('data-count');
                description.push(CKEDITOR.instances[data_count].getData());
                $('.education_is_current_studying').each(function(){
                    if($(this).is(':checked')){
                        education_is_current_studying.push('1');
                    }else{
                        education_is_current_studying.push('0');
                    }
                });
            }

            if (isValid) {
                let csrfToken = $('meta[name="csrf-token"]').attr('content');

                let formData = new FormData();
                for (let i = 0; i < count_; i++) {
                    if(education_history_ids[i]){
                        formData.append('education_history_ids[]', education_history_ids[i]);
                    }
                    if(institution[i]){
                        formData.append('institution[]', institution[i]);
                    }
                    if(degree[i]){
                        formData.append('degree[]', degree[i]);
                    }
                    if(start_date[i]){
                        formData.append('start_date[]', start_date[i]);
                    }
                    formData.append('end_date[]', end_date[i] !== '' ? end_date[i] : null);
                    if(city[i]){
                        formData.append('city[]', city[i]);
                    }
                    if(state[i]){
                        formData.append('state_id[]', state[i]);
                    }
                    if(education_is_current_studying[i]){
                        formData.append('education_is_current_studying[]', education_is_current_studying[i]);
                    }
                    if(description[i]){
                        formData.append('description[]', description[i]);
                    }
                }
                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        if(response.status == 200){
                            btn_element.val('Next');
                            // Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }
        }
        
        // Choose Payment
        if(fieldset_name === 'choosePlan'){
            current_fs = $(this).parent();
            next_fs = $(this).parent().next();
            // Add Class Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
            next_fs.show();
            current_fs.hide();
            setProgressBar(++current);
        }
        

        // Skills Data Save 
        if(fieldset_name === 'side_skills'){
            btn_element.val('Loading...');
            let skill_ids = [];
            let skill = [];
            let level = [];
            let isValid = true;
            let count_ = $('.skills_bdy .addrow').length;
            let fieldset_name = 'side_skills';

            
            for (let i = 0; i < count_; i++) {
                skill_ids.push($('.skill_ids').eq(i).val());
                if($('.skill_name').eq(i).val()){
                    skill.push($('.skill_name').eq(i).val()); 
                }else{
                    skill.push(''); 
                }
                if($('.skill_level').eq(i).find('option:selected').val()){
                    level.push($('.skill_level').eq(i).find('option:selected').val());
                }else{
                    level.push('');
                }      
                if (!skill[i]) {
                    isValid = false;
                    $('#skill_err').html('Please fill in all required fields in each row.');
                    btn_element.val('Next');
                    break;
                }
            }
            if (isValid) {
                let csrfToken = $('meta[name="csrf-token"]').attr('content');

                let formData = new FormData();
                for (let i = 0; i < count_; i++) {

                    if(skill_ids[i]){
                        formData.append('skill_ids[]', skill_ids[i]);
                    }
                    if(skill[i]){
                        formData.append('skill[]', skill[i]);
                    }else{
                        formData.append('skill[]', '');
                    }
                    if(level[i]){
                        formData.append('level[]', level[i]);
                    }else{
                        formData.append('level[]', '');
                    }
                }
                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        if(response.status == 200){
                            btn_element.val('Next');
                            // Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }

        }

        // Internships History Data Save 
        if (fieldset_name === 'side_internships') {
            btn_element.val('Loading...');
            let internship_ids = [];
            let job_title = [];
            let company = [];
            let start_date = [];
            let end_date = [];
            let is_currently_pursuing_internship = [];
            let city = [];
            let state = [];
            let description = [];
            let isValid = true;
            let count_ = $('.inpternship_bdy .addrow').length;
            
       
            for (let i = 0; i < count_; i++) {
                internship_ids.push($('.internship_ids').eq(i).val());
                job_title.push($('.internship_job_title_field').eq(i).val());
                company.push($('.internship_company_field').eq(i).val());
                start_date.push($('.internship_start_date_field').eq(i).val());
                var end_date_value = $('.internship_end_date_field').eq(i).val();
                if (end_date_value.trim() == '') {
                end_date.push('');
                } else {
                end_date.push(end_date_value);
                }
                city.push($('.internship_city_field').eq(i).val());
                state.push($('.internship_state_field').eq(i).find('option:selected').val());
             
                let data_count = $('.internship_summary').eq(i).attr('data-count');
                description.push(CKEDITOR.instances[data_count].getData());
                $('.is_currently_pursuing_internship').each(function(){
                    if($(this).is(':checked')){
                        is_currently_pursuing_internship.push('1');
                    }else{
                        is_currently_pursuing_internship.push('0');
                    }
                });
                // Validation checks for each row
                if (!job_title[i] || !company[i] || !start_date[i]  || !city[i] || !state[i] || !description[i]) {
                    isValid = false;
                    $('#internship_err').html('Please fill in all required fields in each row.');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }
            }
     
            if (isValid) {
                let formData = new FormData();
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                for (let i = 0; i < count_; i++) {
                    formData.append('internship_ids[]', internship_ids[i] || '');
                    formData.append('job_title[]', job_title[i] || '');
                    formData.append('company[]', company[i] || '');
                    formData.append('start_date[]', start_date[i] || '');
                    formData.append('end_date[]', end_date[i] || '');
                    formData.append('is_currently_pursuing_internship[]', is_currently_pursuing_internship[i] || '');
                    if(city[i]){
                        formData.append('city[]', city[i]);
                    }
                    if(state[i]){
                        formData.append('state_id[]', state[i]);
                    }
                    formData.append('description[]', description[i] || '');
                }

                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        console.log(response);
                        if(response.status == 200){
                                let internshipData = response.data;
                                $('.inpternship_bdy .addrow').remove();
                                for (let i = 0; i < internshipData.length; i++) {
                                    let IntId = generateUniqueId('internship_summary_');
                                    let html = `
                                        <div class="row addrow">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Job title<span class="error">*</span></label>
                                                    <input type="text" value="${internshipData[i].job_title}" class="form-control internship_job_title_field" placeholder="Job title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Company<span class="error">*</span></label>
                                                    <input type="text" value="${internshipData[i].company}" class="form-control internship_company_field" placeholder="Company">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Start Date<span class="error">*</span></label>
                                                    <input type="date" value="${internshipData[i].start_date}" class="form-control internship_start_date_field disable_future_date compare_start_date" placeholder="00/00/0000">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>End Date</label>
                                                    <input type="date" value="${internshipData[i].end_date}" class="form-control internship_end_date_field disable_future_date compare_end_date" placeholder="00/00/0000">
                                                </div>
                                            </div>
                                            <div class="col-md-4 workingstatus">
                                                <div class="form-group">
                                                    <label>Internship Status</label>
                                                    <label class="workingcheckbox"><input type="checkbox" ${(internshipData[i].is_currently_pursuing_internship == 1) ? 'checked' : ''} value="${internshipData[i].is_currently_pursuing_internship}" class="form-control is_currently_pursuing_internship checkbox_class"  >Is Currently Pursuing Internship</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>City<span class="error">*</span></label>
                                                    <input type="text" value="${internshipData[i].city}" class="form-control internship_city_field"  placeholder="City" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>State<span class="error">*</span></label>
                                                    <select class="form-control internship_state_field">
                                                        <option value="">Please select you'r state.</option>
                                                        ${
                                                            states && states.length > 0
                                                                ? states.map(val => `<option ${(internshipData[i].state_id ==val.id) ? 'selected' : '' } value="${val.id}">${val.name}</option>`).join('')
                                                                : '<option value="">Please select your state.</option>'
                                                        }
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="${IntId}">Description<span class="error">*</span></label>
                                                    <textarea class="form-control internship_summary" data-count="${IntId}" rows="5" id="${IntId}" placeholder="Description..">${internshipData[i].description}</textarea>
                                                </div>
                                            </div>
                                            <input type="hidden" class="internship_ids" value="${internshipData[i].id}">
                                            <div class="addbtn">
                                                <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)"><i class="la la-minus"></i></button>
                                            </div>
                                        </div>`;

                                    $('.inpternship_bdy').append(html);
                                    CKEDITOR.replace(IntId);
                                }


                            btn_element.val('Next');
                            // Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }
        }
        
        // Reference  Data Save
        if(fieldset_name === 'side_references'){
            btn_element.val('Loading...');
            let references_ids = [];
            let referent_name = [];
            let referent_company = [];
            let referent_email = [];
            let referent_phone_number = [];
            let isValid = true;
            let count_ = $('.references_bdy .addrow').length;
            let fieldset_name = 'side_references';

            for (let i = 0; i < count_; i++) {
                references_ids.push($('.references_ids').eq(i).val());
                referent_name.push($('.reference_name').eq(i).val());
                referent_company.push($('.reference_company').eq(i).val());
                referent_email.push($('.reference_email').eq(i).val());
                referent_phone_number.push($('.reference_phone_number').eq(i).val());

                if (!referent_name[i] || !referent_company[i] || !referent_email[i] || !referent_phone_number[i]) {
                    isValid = false;
                    $('#reference_err').html('Please fill in all required fields in each row.');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }
                
                if(!isValidEmail(referent_email[i])){
                    isValid = false;
                    $('#reference_err').html('Please enter a valid email address.');
                    btn_element.val('Next');
                    break;
                }
                if (!isValidUSPhoneNumber(referent_phone_number[i])) {
                    isValid = false;
                    $('#reference_err').html('Please enter a valid US phone number.');
                    btn_element.val('Next');
                    break;
                }
            }
        

            if (isValid) {
                let formData = new FormData();
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                for (let i = 0; i < count_; i++) {
                    formData.append('references_ids[]', references_ids[i] || '');
                    formData.append('referent_name[]', referent_name[i] || '');
                    formData.append('referent_company[]', referent_company[i] || '');
                    formData.append('referent_email[]', referent_email[i] || '');
                    formData.append('referent_phone_number[]', referent_phone_number[i] || '');
                }

                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        if(response.status == 200){
                            let RespData = response.data;
                                $('.references_bdy .addrow').remove();
                                for (let i = 0; i < RespData.length; i++) {
                                    let html = `<div class="row addrow">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Referent name<span class="error">*</span></label>
                                                <input type="text" value="${RespData[i].referent_name}" class="form-control reference_name" placeholder="Referent name" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Referent company<span class="error">*</span></label>
                                                <input type="text" value="${RespData[i].referent_company}" class="form-control reference_company" placeholder="Referent company" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Referent email<span class="error">*</span></label>
                                                <input type="email" value="${RespData[i].referent_email}" class="form-control reference_email ref_email_validation" placeholder="Referent email" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Referent phone<span class="error">*</span></label>
                                                <input type="text" value="${RespData[i].referent_phone_number}" class="form-control reference_phone_number ref_phone_validation" placeholder="Referent phone" >
                                            </div>
                                        </div>      
                                        <input class="references_ids" value="${RespData[i].id}" type="hidden">                                
                                        <div class="addbtn">
                                            <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                        </div>
                                    </div>`;

                                    $('.references_bdy').append(html);
                                }
                            btn_element.val('Next');
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }
        }

        // Course  Data Save
        if(fieldset_name === 'side_courses'){
            btn_element.val('Loading...');
            let courses_ids = [];
            let institution = [];
            let course = [];
            let start_date = [];
            let end_date = [];
            let is_currently_pursuing_course = [];
            let isValid = true;
            let count_ = $('.course_bdy .addrow').length;
            let fieldset_name = 'side_courses';

            for (let i = 0; i < count_; i++) {
                courses_ids.push($('.courses_ids').eq(i).val());
                institution.push($('.course_institution').eq(i).val());
                course.push($('.course_course').eq(i).val());
                start_date.push($('.course_start_date').eq(i).val());
                var end_date_value = $('.course_end_date').eq(i).val();
                if (end_date_value.trim() == '') {
                end_date.push('');
                } else {
                end_date.push(end_date_value);
                }
                $('.is_currently_pursuing_course').each(function(){
                    if($(this).is(':checked')){
                        is_currently_pursuing_course.push('1');
                    }else{
                        is_currently_pursuing_course.push('0');
                    }
                });
                if (!institution[i] || !course[i] || !start_date[i]) {
                    isValid = false;
                    $('#course_err').html('Please fill in all required fields in each row.');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }
            
            }

            if (isValid) {
                let formData = new FormData();
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                for (let i = 0; i < count_; i++) {
                    formData.append('courses_ids[]', courses_ids[i] || '');
                    formData.append('institution[]', institution[i] || '');
                    formData.append('course[]', course[i] || '');
                    formData.append('start_date[]', start_date[i] || '');
                    formData.append('end_date[]', end_date[i] || '');
                    formData.append('is_currently_pursuing_course[]', is_currently_pursuing_course[i]);

                }

                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        if(response.status == 200){
                            let CourseData = response.data;
                                $('.course_bdy .addrow').remove();
                                for (let i = 0; i < CourseData.length; i++) {
                                    let html = ` <div class="row addrow">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Institution<span class="error">*</span></label>
                                                <input type="text" value="${CourseData[i].institution}" class="form-control course_institution" placeholder="Institution" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Course<span class="error">*</span></label>
                                                <input type="text" value="${CourseData[i].course}" class="form-control course_course" placeholder="Course" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Start Date<span class="error">*</span></label>
                                                <input type="date" value="${CourseData[i].start_date}" class="form-control course_start_date disable_future_date compare_start_date" placeholder="00/00/0000" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>End Date</label>
                                                <input type="date"  ${(CourseData[i].is_currently_pursuing_course == 1) ? 'disabled' : ''} value="${CourseData[i].end_date}" class="form-control course_end_date disable_future_date compare_end_date"  placeholder="00/00/0000" >
                                            </div>
                                        </div>
                                        <div class="col-md-4 workingstatus">
                                            <div class="form-group">
                                                <label>Course Status</label>
                                                <label class="workingcheckbox"><input type="checkbox" ${(CourseData[i].is_currently_pursuing_course == 1) ? 'checked' : ''} value="${CourseData[i].is_currently_pursuing_course}" class="form-control is_currently_pursuing_course checkbox_class" checked >Is Currently Pursuing Course</label>
                                            </div>
                                        </div>
                                        <input type="hidden" class="courses_ids"  value="${CourseData[i].id}">                                    
                                        <div class="addbtn">
                                            <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                        </div>
                                    </div>`;

                                    $('.course_bdy').append(html);
                                }
                            btn_element.val('Next');
                            // Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }

            
        }

        // Links  Data Save
        if(fieldset_name === 'side_links'){
            btn_element.val('Loading...');
            let link_ids = [];
            let link_title = [];
            let url = [];
            let isValid = true;
            let count_ = $('.links_bdy .addrow').length;
            let fieldset_name = 'side_links';

            for (let i = 0; i < count_; i++) {
                link_ids.push($('.link_ids').eq(i).val());
                link_title.push($('.link_title').eq(i).val());
                url.push($('.link_url').eq(i).val());
            }
            
            for (let i = 0; i < link_title.length; i++) {
                if (!link_title[i] || !url[i]) {
                    isValid = false;
                    $('#link_err').html('Please fill in all required fields in each row.');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }
                if(!isValidUrl(url[i]) ){
                    isValid = false; 
                    $('#link_err').html('Please provide valid URLs.');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }
            }

            if (isValid) {
                let formData = new FormData();
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                for (let i = 0; i < count_; i++) {
                    formData.append('link_ids[]', link_ids[i] || '');
                    formData.append('link_title[]', link_title[i] || '');
                    formData.append('url[]', url[i] || '');
                }

                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        if(response.status == 200){
                            let LinksData = response.data;
                                $('.links_bdy .addrow').remove();
                                for (let i = 0; i < LinksData.length; i++) {
                                    let html = `<div class="row addrow">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Link Title<span class="error">*</span></label>
                                                            <input type="text" value="${LinksData[i].link_title}" class="form-control link_title" placeholder="Link Title" >
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>URL<span class="error">*</span></label>
                                                            <input type="text" value="${LinksData[i].url}" class="form-control link_url" placeholder="URL" >
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="link_ids"  value="${LinksData[i].id}" >                                                         
                                                    <div class="addbtn">
                                                        <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                                    </div>
                                                </div>`;

                                    $('.links_bdy').append(html);
                                }

                            btn_element.val('Next');
                            // Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }
        }

        // Language  Data Save
        if(fieldset_name === 'side_language'){
            btn_element.val('Loading...');
            let language_ids = [];
            let language = [];
            let proficiency = [];
            let isValid = true;
            let count_ = $('.language_bdy .addrow').length;
            let fieldset_name = 'side_language';

            for (let i = 0; i < count_; i++) {
                language_ids.push($('.language_ids').eq(i).val());
                language.push($('.language').eq(i).val());
                if($('.proficiency').eq(i).find('option:selected').val()){
                    proficiency.push($('.proficiency').eq(i).find('option:selected').val());
                }else{
                    proficiency.push('');
                }
                
                if (!language[i]) {
                    isValid = false;
                    $('#language_err').html('Please fill in all required fields in each row.');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }
            }
            

            if(isValid){
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                let formData = new FormData();
                for (let i = 0; i < count_; i++) {
                    formData.append('language_ids[]', language_ids[i]);
                    formData.append('language[]', language[i]);
                    formData.append('proficiency[]', proficiency[i]);
                }
                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        if(response.status == 200){
                            let LangData = response.data;
                                $('.language_bdy .addrow').remove();
                                for (let i = 0; i < LangData.length; i++) {
                                    let html = `<div class="row addrow">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Language<span class="error">*</span></label>
                                                            <input type="text" value="${LangData[i].language}" class="form-control language" placeholder="Language">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Proficiency</label>
                                                            <select class="form-control proficiency">
                                                                <option value="">Select Proficiency</option>
                                                                <option ${LangData[i].proficiency === 'Novice (A1-A2)' ? 'selected' : ''} value="Novice (A1-A2)">Novice (A1-A2)</option>
                                                                <option ${LangData[i].proficiency === 'Proficient (B1-B2)' ? 'selected' : ''} value="Proficient (B1-B2)">Proficient (B1-B2)</option>
                                                                <option ${LangData[i].proficiency === 'Highly proficient (C1-C2)' ? 'selected' : ''} value="Highly proficient (C1-C2)">Highly proficient (C1-C2)</option>
                                                                <option ${LangData[i].proficiency === 'Native' ? 'selected' : ''} value="Native">Native</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" class="language_ids" value="${LangData[i].id}">
                                                    <div class="addbtn">
                                                        <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)"><i class="la la-minus"></i></button>
                                                    </div>
                                                </div>`;

                                                $('.language_bdy').append(html);

                                }
                            btn_element.val('Next');
                            // Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }
        }

        // Custom Section  Data Save
        if(fieldset_name === 'side_custom_sections'){
            btn_element.val('Loading...');
            let custom_section_ids = [];
            let header = [];
            let sub_header = [];
            let description  = [];
            let isValid = true;
            let count_ = $('.custom_section_bdy .addrow').length;
            let fieldset_name = 'side_custom_sections';

            for (let i = 0; i < count_; i++) {
                custom_section_ids.push($('.custom_section_ids').eq(i).val());
                header.push($('.header').eq(i).val());
                sub_header.push($('.sub_header').eq(i).val());
                let data_count = $('.custom_header_description').eq(i).attr('data-count');
                description.push(CKEDITOR.instances[data_count].getData());

                // Validation checks for each row
                if (!header[i] || !sub_header[i] || !description[i]) {
                    isValid = false;
                    $('#custom_section_err').html('Please fill in all required fields in each row.');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }
            }

            if(isValid){
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                let formData = new FormData();
                for (let i = 0; i < count_; i++) {
                    formData.append('custom_section_ids[]', custom_section_ids[i]);
                    formData.append('header[]', header[i]);
                    formData.append('sub_header[]', sub_header[i]);
                    formData.append('description[]', description[i]);
                }
                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        if(response.status == 200){
                            let CustData = response.data;
                                $('.custom_section_bdy .addrow').remove();
                                for (let i = 0; i < CustData.length; i++) {
                                        let ChdId = generateUniqueId('custom_header_description_');
                                        let html = `<div class="row addrow">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Header<span class="error">*</span></label>
                                            <input type="text" value="${CustData[i].header}" class="form-control header" placeholder="Header" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Subheader<span class="error">*</span></label>
                                            <input type="text" value="${CustData[i].sub_header}" class="form-control sub_header" placeholder="Subheader" >
                                        </div>
                                    </div> 
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="${ChdId}">Description<span class="error">*</span></label>
                                            <textarea class="form-control custom_header_description" data-count="${ChdId}" rows="5" id="${ChdId}" placeholder="Description..">${CustData[i].description}</textarea>
                                        </div>
                                    </div>  
                                    <input type="hidden" value="${CustData[i].id}" class="custom_section_ids">                             
                                    <div class="addbtn">
                                        <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                    </div>
                                    </div>`;

                                    $('.custom_section_bdy').append(html);
                                    CKEDITOR.replace(ChdId);
                                }

                            btn_element.val('Next');
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }
        }

        // Hobbies Summary Data Save
        if(fieldset_name === 'side_hobbies'){
            btn_element.val('Loading...');
            let hobbies_summary = CKEDITOR.instances.hobbies_summary.getData();
            let fieldset_name = 'side_hobbies';
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            let formData = new FormData();
            formData.append('hobbies', hobbies_summary);
            formData.append('fieldset_name', fieldset_name);
            current_fs = $(this).parent();
                next_fs = $(this).parent().next();
            $.ajax({
                url: '{{route("save-resume-data")}}',
                type: 'POST',
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                processData: false, 
                contentType: false, 
                success: function(response) {
                    if(response.status == 200){
                        btn_element.val('Next');
                        // Add Class Active
                        $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                        next_fs.show();
                        current_fs.hide();
                        setProgressBar(++current);
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
        }

        // Certificates section data save
        if(fieldset_name === 'side_certificates'){
            btn_element.val('Loading...');
            let certificate_ids = [];
            let name = [];
            let organization = [];
            let issued_date = [];
            let url = [];
            let description = [];
            let fieldset_name = 'side_certificates';
            let isValid = true;
            let count_ = $('.certificate_bdy .addrow').length;

            for (let i = 0; i < count_; i++) {
                certificate_ids.push($('.certificate_ids').eq(i).val());
                name.push($('.certificate_name_field').eq(i).val());
                organization.push($('.certificate_organization_field').eq(i).val());
                issued_date.push($('.certificate_issued_date_field').eq(i).val());
                url.push($('.certificate_url_field').eq(i).val());
                let data_count = $('.certificate_summary').eq(i).attr('data-count');
                description.push(CKEDITOR.instances[data_count].getData());
               
                // Validation checks for each row
                if( url[i] && !isValidUrl(url[i]) ){
                    isValid = false; 
                    $('#certificate_err').html('Please provide valid URLs.');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }
                if (!name[i] || !organization[i] || !issued_date[i] ) {
                    isValid = false;
                    $('#certificate_err').html('Please fill in all required fields in each row');
                    btn_element.val('Next');
                    break; // Stop processing if validation fails
                }
            }

            if (isValid) {
                let formData = new FormData();
                let csrfToken = $('meta[name="csrf-token"]').attr('content');
                for (let i = 0; i < count_; i++) {
                    formData.append('certificate_ids[]', certificate_ids[i] || '');
                    formData.append('name[]', name[i] || '');
                    formData.append('organization[]', organization[i] || '');
                    formData.append('issued_date[]', issued_date[i] || '');
                    formData.append('url[]', url[i] || '');
                    formData.append('description[]', description[i] || '');
                }

                formData.append('fieldset_name', fieldset_name);
                current_fs = $(this).parent();
                next_fs = $(this).parent().next();
                $.ajax({
                    url: '{{route("save-resume-data")}}',
                    type: 'POST',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    processData: false, 
                    contentType: false, 
                    success: function(response) {
                        if(response.status == 200){
                            let CertifData = response.data;
                                $('.certificate_bdy .addrow').remove();
                                for (let i = 0; i < CertifData.length; i++) {
                                    let CerId = generateUniqueId('certificate_summary_');
                                    let html = `<div class="row addrow">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Certificate Name<span class="error">*</span></label>
                                            <input type="text" value="${CertifData[i].name ? CertifData[i].name : ''}"  class="form-control certificate_name_field" placeholder="Certificate Name" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Orginazation<span class="error">*</span></label>
                                            <input type="text" value="${CertifData[i].organization ? CertifData[i].organization : ''}"  class="form-control certificate_organization_field" placeholder="Orginazation" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date of Issed<span class="error">*</span></label>
                                            <input type="date" value="${CertifData[i].issued_date ? CertifData[i].issued_date : ''}"  class="form-control certificate_issued_date_field disable_future_date " placeholder="Date of Issed" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Url</label>
                                            <input type="text" value="${CertifData[i].url ? CertifData[i].url : ''}"  class="form-control certificate_url_field url_validate" placeholder="Url" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="${CerId}">Description</label>
                                            <textarea class="form-control certificate_summary" data-count="${CerId}" rows="5" id="${CerId}" placeholder="Description..">${CertifData[i].description}</textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" class="certificate_ids"  value="${CertifData[i].id}" >
                                    <div class="addbtn">
                                        <button type="button" class="btn btn-danger bankbtnminus dlt_btn_prfm" onclick="deleteCollaspe(this)" ><i class="la la-minus"></i></button>                      
                                    </div>
                                </div>`;

                                    $('.certificate_bdy').append(html);
                                    CKEDITOR.replace(CerId);
                                }
                            btn_element.val('Next');
                            // Add Class Active
                            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
                            next_fs.show();
                            current_fs.hide();
                            setProgressBar(++current);
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
            }
        }
    });
    // check User login or signup
    $('body').delegate('#check_login', 'click', function(){
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        let first_name = $('#first_name').val();
        let last_name = $('#last_name').val();
        let email = $('#email').val();
        if(!email){
            $('#email_err').html('Email is required field!')
            return false;
        }else{
            $('#email_err').html('')
        }
        let formData = new FormData();
        formData.append('first_name', first_name);
        formData.append('last_name', last_name);
        formData.append('email', email);
        $.ajax({
            url: '{{route("resume-check-login")}}',
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            processData: false, 
            contentType: false, 
            success: function(response) {
                if(response.status == 200){
                    
                    if(response.flag == 'Signup'){
                        $('#check_login').hide();
                        $('#personal_detail_next_btn').show();
                        $('#personal_detail_next_btn').click();
                    }else{
                        $('#login_popup').click();
                    }
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });
    });

    // Popup Login
    $('body').delegate('#popup_login', 'click', function(){
        let email = $('#login_email').val();
        let password = $('#login_password').val();
        let formData = new FormData();
        formData.append('email', email);
        formData.append('password', password);
        if(!email){
            $('#login_email_err').html('Email is required field!')
            return false;
        }else{
            $('#login_email_err').html('')
        }
        if(!password){
            $('#login_password_err').html('Password is required field!')
            return false;
        }else{
            $('#login_password_err').html('')
        }
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            url: '{{route("resume-login-popup")}}',
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            processData: false, 
            contentType: false, 
            success: function(response) {
                if(response.status == 200){
                    $('#ul_content').html('');
                    $('#close_popup').click();
                    $('#check_login').hide();
                    $('#personal_detail_next_btn').show();
                    $('#ul_content').html(response.html);
                    if(response.data.profile_image !== null){
                        $('#user_profile_image_preview').attr('src', response.data.profile_image);
                    }else{
                        $('#user_profile_image_preview').attr('src', window.location.origin+'/'+'assets/images/no-preview.jpeg'); 
                    }
                    $('#first_name').val(response.data.first_name);
                    $('#last_name').val(response.data.last_name);
                    $('#last_name').val(response.data.last_name);
                    $('#driver_license').val(response.data.driver_license);
                    $('#date_of_birth').val(response.data.date_of_birth);
                    window.location.reload();
                }
                if(response.status == 500){
                    $('#login_email_err').html(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error:', error);
            }
        });

    });

    // ON Change Date
    $('body').delegate('.compare_start_date', 'change', function(){
        let startDate = $(this).val();
        let checkbox_status = $(this).closest('.addrow').find('.checkbox_class').prop('checked');
        let endDate = $(this).closest('.addrow').find('.compare_end_date').val();
        console.log(checkbox_status);
        if(checkbox_status){
            if(checkbox_status === false){
                if (endDate && startDate > endDate) {
                    $(this).closest('fieldset').find('.errors_ p').html('Start date cannot be greater than end date.');
                    $(this).val('');
                }else{
                    $(this).closest('fieldset').find('.errors_ p').html('');
                }
            }
        }else{
            if (endDate && startDate > endDate) {
                $(this).closest('fieldset').find('.errors_ p').html('Start date cannot be greater than end date.');
                $(this).val('');
            }else{
                $(this).closest('fieldset').find('.errors_ p').html('');
            }
        }
    });

    // Change event for end date
    $('body').delegate('.compare_end_date', 'change', function() {
        let startDate = $(this).closest('.addrow').find('.compare_start_date').val();
        let endDate = $(this).val();
        
        // Check if end date is less than start date
        if (startDate && endDate < startDate) {
            $(this).closest('fieldset').find('.errors_ p').html('Start date cannot be greater than end date.');
            $(this).val('');
        }else{
            $(this).closest('fieldset').find('.errors_ p').html('');
        }
    });

    $('body').delegate('#validate_otp', 'click', function(){
        let otp  = $('#email_otp').val();
        let email = $('#email').val();
        let csrfToken = $('meta[name="csrf-token"]').attr('content');
        let formData = new FormData();
        let captcha_response = grecaptcha.getResponse();
        formData.append('email_otp', otp);
        formData.append('email', email);
        formData.append('g-recaptcha-response', captcha_response);
        $.ajax({
            url: '{{route("validate-otp")}}',
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            processData: false, 
            contentType: false, 
            success: function(response) {
                if(response.status == 200){
                    if(response.flag == 'invalid_otp'){
                        $('#email_otp_err').html('');
                        $('#email_otp_err').html('Invalid OTP, Please check your OTP or resend!');
                    }
                    if(response.flag == 'next_step'){
                        $('#otp_popup_model').hide();
                        $('#personal_detail_next_btn').show();
                        $('#personal_detail_next_btn').click();
                    }
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


