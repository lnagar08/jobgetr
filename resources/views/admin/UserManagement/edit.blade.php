@extends('layouts.admin')
@section('title', 'User Management')
@section('content')
<style type="text/css">
   .addmore a {
    background: #ddefff;
    box-shadow: 0 3px 6px 0 rgb(171 171 171 / 20%);
    display: block;
    padding: 20px;
    border-radius: 5px;
    text-align: center;
    color: #002d6b !important;
    text-transform: uppercase;
    font-weight: 600;
    font-size: 18px;
    border: 1px solid #fff;
    cursor: pointer;
}
</style>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
                <div class="layout-px-spacing">
                    <div class="page-header d-flex justify-content-between">
                        <div class="page-title">
                            <h3>Edit</h3>
                        </div>
                        <div class="page-title page-btn">
                            <a class="btn btn-primary" href="{{route('user-management.index')}}">Back</a>
                        </div>
                    </div>
                    <div class="account-settings-container layout-top-spacing">
                        <div class="general-info section general-infomain">
                             @if (Session::has('success'))
                              <div class="alert alert-success mt-2 mb-2 successMessage">
                                      {{ Session::get('success') }}
                              </div>
                          @endif
                        <label for="Sections">Sections </label>
                        <select class="placeholder js-states form-control" onchange="Detailed(value)">
                                <option value="PersonalDetails">Choose...</option>
                                <option @if(@Session::get('SectionNmae') == "PersonalDetails") selected @elseif(@Session::get('SectionNmae') == "null" || @Session::get('SectionNmae') == '' ) selected @endif  value="PersonalDetails">Personal Details</option>
                                <option @if(@Session::get('SectionNmae') == "ContactInformation") selected @endif value="ContactInformation">Contact Information</option>
                                <option @if(@Session::get('SectionNmae') == "ProfessionalSummary") selected @endif value="ProfessionalSummary">Professional Summary</option>
                                <option @if(@Session::get('SectionNmae') == "EmploymentHistory") selected @endif value="EmploymentHistory">Employment History</option>
                                <option @if(@Session::get('SectionNmae') == "Education") selected @endif value="Education">Education</option>
                                <option @if(@Session::get('SectionNmae') == "Skills") selected @endif value="Skills">Skills</option>
                                <option @if(@Session::get('SectionNmae') == "Internships") selected @endif value="Internships">Internships</option>
                                <option @if(@Session::get('SectionNmae') == "Certificate") selected @endif value="Certificate">Certificate</option>
                                <option @if(@Session::get('SectionNmae') == "Courses") selected @endif value="Courses">Courses</option>
                                <option @if(@Session::get('SectionNmae') == "References") selected @endif value="References">References</option>
                                <option @if(@Session::get('SectionNmae') == "Links") selected @endif value="Links">Links</option>
                                <option @if(@Session::get('SectionNmae') == "Languages") selected @endif value="Languages">Languages</option>
                                <option @if(@Session::get('SectionNmae') == "Hobbies") selected @endif value="Hobbies">Hobbies</option>
                                <option @if(@Session::get('SectionNmae') == "Customsection") selected @endif value="Customsection">Custom section</option>
                        </select>
                    <form method="post" id="userForm" action="{{route('user-management.update', $id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="account-content mt-2 mb-2">
                            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <div id="PersonalDetails" class="section general-info"  @if(@Session::get('SectionNmae') == "PersonalDetails") style="display: block;" @elseif(@Session::get('SectionNmae') == "null" || @Session::get('SectionNmae') == '' ) style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                        <h4>Personal Details</h4>
                                                        <p>Personal details such as name and job title are essential in a resume to give the recruiter a quick overview of the candidate.</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                                    <div class="upload mt-4 pr-md-4">
                                                                        <input type="file" name="profile_image" id="input-file-max-fs" class="dropify" @if($User && $User->profile_image) data-default-file="{{ $User->profile_image }}" @else data-default-file="{{url('admin/assets/img/200x200.jpg')}}" @endif data-max-file-size="2M" />
                                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="first_name">First Name <span class="text-danger">*</span></label>
                                                                                    <input type="text" id="first_name" @if($User && $User->first_name) value="{{$User->first_name}}" @endif name="first_name" class="form-control" placeholder="First Name" >
                                                                                    <span id="first_name_error" class="text-danger"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="last_name">Last Name <span class="text-danger">*</span></label>
                                                                                    <input type="text" id="last_name" @if($User && $User->last_name) value="{{$User->last_name}}" @endif name="last_name" class="form-control" placeholder="Last Name">
                                                                                    <span id="last_name_error" class="text-danger"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="Email">Email Address <span class="text-danger">*</span></label>
                                                                                    <input type="email" name="email" required id="email" @if($User && $User->email) value="{{$User->email}}" @endif class="form-control" placeholder="Email Address">
                                                                                    <span id="email_error" class="text-danger"></span>
                                                                                    @if ($errors->has('email'))
                                                                                        <div class="text-danger">
                                                                                            {{ $errors->first('email') }}
                                                                                        </div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="date_of_birth">Date of Birth</label>
                                                                                    <input type="date" @if($User && $User->date_of_birth) value="{{$User->date_of_birth}}" @endif name="date_of_birth" class="form-control date-input">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                <label for="driver_license">Driver's License (Optional)</label>
                                                                                    <input type="text" name="driver_license" class="form-control" @if($User && $User->driver_license) value="{{$User->driver_license}}" @endif  placeholder="D74837465">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="plan_id">Plan <span class="text-danger">*</span></label>
                                                                                    <select class="form-control" id="plan_id" name="plan_id">
                                                                                        <option value="">Select Plan</option> <!-- Add a default option -->
                                                                                        @foreach ($Plan as $plan)
                                                                                            <option {{ $User && $User->userplan->contains('plan_id', $plan->id) ? 'selected' : '' }} value="{{ $plan->id }}">{{ $plan->name }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    <span id="plan_error" class="text-danger"></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="project_url">Project Url</label>
                                                                                    <input type="text" id="project_url" name="project_url" class="form-control" @if($User && $User->project_url) value="{{$User->project_url}}" @endif placeholder="Project Url">
                                                                                    <span id="project_url_error" class="text-danger"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> 
                                        <div id="ContactInformation" class="section general-info" @if(@Session::get('SectionNmae') == "ContactInformation") style="display: block;" @else style="display: none;" @endif>
                                            <div class="info">
                                                    <div class="user-management-title">
                                                        <h4 >Contact information</h4>
                                                        <p>Including your contacts in your resume is crucial so potential employers can easily get in touch with you.</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="country">Country <span class="text-danger">*</span></label>
                                                                                    <input type="text" id="country" @if($User && $User->country) value="{{$User->country}}" @endif name="country" class="form-control" placeholder="Country">
                                                                                    <div id="country_error" class="invalid-feedback">Country is required.</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="city">City <span class="text-danger">*</span></label>
                                                                                    <input type="text" id="city" name="city" @if($User && $User->city) value="{{$User->city}}" @endif name="city" class="form-control" placeholder="city">
                                                                                    <div id="city_error" class="invalid-feedback">City is required.</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="postal_code">Postal code <span class="text-danger">*</span></label>
                                                                                    <input type="number" id="postal_code" @if($User && $User->postal_code) value="{{$User->postal_code}}" @endif name="postal_code" class="form-control" placeholder="Postal code">
                                                                                    <div id="postal_code_error" class="invalid-feedback">Postal code is required.</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="phone_number">Phone Number <span class="text-danger">*</span></label>
                                                                                    <input type="text" id="phone_number"  @if($User && $User->phone_number) value="{{$User->phone_number}}" @endif name="phone_number" class="form-control" placeholder="Phone Number">
                                                                                    <div id="phone_number_error" class="invalid-feedback">Phone Number must be in the format (123) 456-7890</div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-12">
                                                                                <div class="form-group">
                                                                                    <label for="address">Address <span class="text-danger">*</span></label>
                                                                                    <textarea type="text" id="address" name="address" class="form-control" placeholder="Address">@if($User && $User->address) {{$User->address}} @endif</textarea>
                                                                                    <div id="address_error" class="invalid-feedback">Address is required.</div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div> 
                                        <div id="ProfessionalSummary" class="section general-info" @if(@Session::get('SectionNmae') == "ProfessionalSummary") style="display: block;" @else style="display: none;" @endif>
                                            <div class="info">
                                                <div class="user-management-title">
                                                    <h4>Professional Summary</h4>
                                                    <p>Include your professional title, years of experience, and your most impressive achievements. Each achievement should be measurable and expressed in numbers.</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label for="professional_summary">Summary <span class="text-danger">*</span></label>
                                                            <textarea name="professional_summary" id="professional_summary" class="form-control teckeditor">@if($User && $User->professional_summary) {!!$User->professional_summary!!} @endif</textarea>
                                                            <div id="professional_summary_error" class="text-danger"></div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div id="EmploymentHistory" class="section general-info" @if(@Session::get('SectionNmae') == "EmploymentHistory") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Employment History</h4>
                                                        <p>Show employers your past experience and what you have accomplished. Include simple, clear examples with action verbs to demonstrate your skills.</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="employee_error" class="text-danger"></div>
                                                                        <div class="addDivMore">
                                                                            @if(count($EmploymentHistory) > 0)
                                                                            @foreach($EmploymentHistory as $key=> $Empy)
                                                                            <div class="row addrow EH_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="EH_job_title">Job title <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Empy && $Empy->job_title) value="{{$Empy->job_title}}" @endif name="EH_job_title[]" class="form-control" placeholder="Job title" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="EH_company">Company <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Empy && $Empy->company) value="{{$Empy->company}}" @endif name="EH_company[]" class="form-control" placeholder="Company">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="EH_start_date">Start Date <span class="text-danger">*</span></label>
                                                                                        <input type="date" @if($Empy && $Empy->start_date) value="{{$Empy->start_date}}" @endif name="EH_start_date[]" class="form-control date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="EH_end_date">End Date</label>
                                                                                        <input type="date"  name="EH_end_date[]" @if($Empy && $Empy->end_date) value="{{$Empy->end_date}}" @endif @if($Empy && $Empy->is_current_working == '1') readonly @endif name="EH_end_date[]"  class="form-control mb-4 EH_end_date date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>Working Status</label>
                                                                                        <div class="n-chk mt-3">
                                                                                            <label class="new-control new-checkbox checkbox-primary">
                                                                                            <input type="checkbox" name="" class="new-control-input isWorkingCheckbox" @if($Empy && $Empy->is_current_working == '1') checked @endif value="{{$Empy->is_current_working}}" >
                                                                                            <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Working
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="hidden" name="EH_is_current_working[]" class="isWorkingCheckbox_hidden" value="{{$Empy->is_current_working}}">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">City <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Empy && $Empy->city) value="{{$Empy->city}}" @endif  name="EH_city[]" class="form-control" placeholder="City">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">State <span class="text-danger">*</span></label>
                                                                                        <select name="EH_state_id[]" class="form-control select2">
                                                                                            @foreach($State as $States)
                                                                                            <option @if($Empy && $Empy->state_id == $States->id) selected @endif value="{{$States->id}}">{{$States->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="EH_description_{{$key}}">Description <span class="text-danger">*</span></label>
                                                                                        <textarea name="EH_description[]" id="EH_description_{{$key}}" class="form-control teckeditor">@if($Empy && $Empy->description) {!!$Empy->description!!} @endif</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                <button class="btn btn-danger" onclick="HistoryRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @else
                                                                            <div class="row addrow EH_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="EH_job_title">Job title <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="EH_job_title[]" class="form-control" placeholder="Job title" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="EH_company">Company <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="EH_company[]" class="form-control" placeholder="Company">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="EH_start_date">Start Date <span class="text-danger">*</span></label>
                                                                                        <input type="date" name="EH_start_date[]" class="form-control date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="EH_end_date">End Date</label>
                                                                                        <input type="date" readonly name="EH_end_date[]" value="{{old('EH_end_date')}}" class="form-control mb-4 EH_end_date date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>Working Status</label>
                                                                                        <div class="n-chk mt-3">
                                                                                            <label class="new-control new-checkbox checkbox-primary">
                                                                                            <input type="checkbox" name="" class="new-control-input isWorkingCheckbox" value="1" checked>
                                                                                            <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Working
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="hidden" name="EH_is_current_working[]" class="isWorkingCheckbox_hidden" value="1">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">City <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="EH_city[]" class="form-control" placeholder="City">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">State <span class="text-danger">*</span></label>
                                                                                        <select name="EH_state_id[]" class="form-control select2">
                                                                                            @foreach($State as $States)
                                                                                            <option value="{{$States->id}}">{{$States->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="EH_description_0">Description <span class="text-danger">*</span></label>
                                                                                        <textarea name="EH_description[]" id="EH_description_0" class="form-control teckeditor"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                <button class="btn btn-danger" onclick="HistoryRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                        <!-- <div class="addDivMore"></div> -->
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_more_btn" class="add_more_btn"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="Education" class="section general-info" @if(@Session::get('SectionNmae') == "Education") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Education</h4>
                                                        <p>Add the name of your school, where it is located, what degree you obtained, your field of study, and your graduation year.</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="eduction_error" class="text-danger"></div>
                                                                        <div class="addDivEdu">
                                                                            @if(count($Education) > 0)
                                                                            @foreach($Education as $key=> $Edn)
                                                                            <div class="row addrow Ed_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="institution">Institution</label>
                                                                                        <input type="text" @if($Edn && $Edn->institution) value="{{$Edn->institution}}" @endif name="Ed_institution[]" class="form-control" placeholder="Institution" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="degree">Degree</label>
                                                                                        <input type="text" @if($Edn && $Edn->degree) value="{{$Edn->degree}}" @endif name="Ed_degree[]" class="form-control" placeholder="Degree">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="start_date">Start Date</label>
                                                                                        <input type="date" @if($Edn && $Edn->start_date) value="{{$Edn->start_date}}" @endif name="Ed_start_date[]" class="form-control date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Ed_end_date">End Date</label>
                                                                                        <input type="date" name="Ed_end_date[]"  @if($Edn && $Edn->end_date) value="{{$Edn->end_date}}" @endif @if($Edn && $Edn->is_current_studying == '1') readonly @endif name="Ed_end_date[]" class="form-control Ed_end_date date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>Studying Status</label>
                                                                                        <div class="n-chk mt-3">
                                                                                            <label class="new-control new-checkbox checkbox-primary">
                                                                                            <input type="checkbox" name="" class="new-control-input isEducationCheckbox" @if($Edn && $Edn->is_current_studying == '1') checked @endif value="{{$Edn->is_current_studying}}" >
                                                                                            <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Studying
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="hidden" name="Ed_is_current_studying[]" class="isEducationCheckbox_hidden" value="{{$Edn->is_current_studying}}" >
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">City</label>
                                                                                        <input type="text" @if($Edn && $Edn->city) value="{{$Edn->city}}" @endif name="Ed_city[]" class="form-control" placeholder="City">
                                                                                    </div>
                                                                                </div> 
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">State</label>
                                                                                        <select name="Ed_state_id[]" class="form-control select2">
                                                                                            @foreach($State as $States)
                                                                                            <option @if($Edn && $Edn->state_id == $States->id) selected selected @endif value="{{$States->id}}">{{$States->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label  for="Ed_description_{{$key}}">Description</label>
                                                                                        <textarea  name="Ed_description[]" id="Ed_description_{{$key}}" class="form-control teckeditor">@if($Edn && $Edn->description) {{$Edn->description}} @endif</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                <button class="btn btn-danger" onclick="EducationRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @else
                                                                            <div class="row addrow Ed_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="institution">Institution <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="Ed_institution[]" class="form-control" placeholder="Institution" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="degree">Degree <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="Ed_degree[]" class="form-control" placeholder="Degree">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                                                                        <input type="date" name="Ed_start_date[]"  class="form-control mb-4 date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Ed_end_date">End Date</label>
                                                                                        <input type="date" readonly name="Ed_end_date[]" class="form-control mb-4 Ed_end_date date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>Studying Status</label>
                                                                                        <div class="n-chk mt-3">
                                                                                            <label class="new-control new-checkbox checkbox-primary">
                                                                                            <input type="checkbox" name="" class="new-control-input isEducationCheckbox" value="1" checked>
                                                                                            <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Studying
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="hidden" name="Ed_is_current_studying[]" class="isEducationCheckbox_hidden" value="1">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">City <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="Ed_city[]" class="form-control mb-4" placeholder="City">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">State <span class="text-danger">*</span></label>
                                                                                        <select name="Ed_state_id[]" class="form-control select2 mb-4">
                                                                                            @foreach($State as $States)
                                                                                            <option value="{{$States->id}}" >{{$States->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="Ed_description_0">Description <span class="text-danger">*</span></label>
                                                                                        <textarea name="Ed_description[]" id="Ed_description_0" class="form-control teckeditor"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="EducationRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_Edu_btn" class="add_more_btn"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>  
                                        <div id="Skills" class="section general-info" @if(@Session::get('SectionNmae') == "Skills") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Skills</h4>
                                                       <p>Highlight your most important and applicable professional skills.</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="skill_error" class="text-danger"></div>
                                                                        <div class="addDivSkill">
                                                                            @if(count($Skill) > 0)
                                                                            @foreach($Skill as $Skills)
                                                                            <div class="row addrow skill_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="skill">Skill <span class="text-danger">*</span></label>
                                                                                        <input @if($Skills && $Skills->skill) value="{{$Skills->skill}}" @endif type="text" name="skill[]" class="form-control" placeholder="skill">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                <div class="form-group" style="width:inherit;">
                                                                                    <label for="level">Level </label>
                                                                                    <select name="level[]" class="form-control">
                                                                                        <option @if($Skills && $Skills->level == "Novice") selected @endif value="Novice">Novice</option>
                                                                                        <option @if($Skills && $Skills->level == "Beginner") selected @endif value="Beginner">Beginner</option>
                                                                                        <option @if($Skills && $Skills->level == "Skillful") selected @endif value="Skillful">Skillful</option>
                                                                                        <option @if($Skills && $Skills->level == "Experienced") selected @endif value="Experienced">Experienced</option>
                                                                                        <option @if($Skills && $Skills->level == "Expert") selected @endif value="Expert">Expert</option>
                                                                                    </select>
                                                                                </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="SkillRemove(this)">-</button>
                                                                                </div>
                                                                            </div>    
                                                                            @endforeach
                                                                            @else
                                                                            <div class="row addrow skill_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="skill">Skill <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="skill[]" class="form-control" placeholder="skill">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                <div class="form-group" style="width:inherit;">
                                                                                    <label for="level">Level </label>
                                                                                    <select name="level[]" class="form-control">
                                                                                        <option value="">Select skill level</option>
                                                                                            <option value="Novice">Novice</option>
                                                                                            <option value="Beginner">Beginner</option>
                                                                                            <option value="Skillful">Skillful</option>
                                                                                            <option value="Experienced">Experienced</option>
                                                                                            <option value="Expert">Expert</option>
                                                                                    </select>
                                                                                </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="SkillRemove(this)">-</button>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_Skill_btn" class="add_more_btn"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="Internships" class="section general-info" @if(@Session::get('SectionNmae') == "Internships") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Internships</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="internship_error" class="text-danger"></div>
                                                                        <div class="addDivInter">
                                                                            @if(count($Internship) > 0)
                                                                            @foreach($Internship as $key=> $Intp)
                                                                            <div class="row addrow Intn_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="job_title">Job title <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Intp && $Intp->job_title) value="{{$Intp->job_title}}" @endif name="Is_job_title[]" class="form-control" placeholder="Job title" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="company">Company <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Intp && $Intp->company) value="{{$Intp->company}}" @endif name="Is_company[]" class="form-control" placeholder="Company">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                                                                        <input type="date" @if($Intp && $Intp->start_date) value="{{$Intp->start_date}}" @endif name="Is_start_date[]" class="form-control date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Is_end_date">End Date</label>
                                                                                        <input type="date" name="Is_end_date[]" @if($Intp && $Intp->end_date) value="{{$Intp->end_date}}" @endif @if($Intp && $Intp->is_currently_pursuing_internship == '1') readonly @endif  name="Is_end_date[]" class="form-control Is_end_date date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>Internship Status</label>
                                                                                        <div class="n-chk mt-3">
                                                                                            <label class="new-control new-checkbox checkbox-primary">
                                                                                            <input type="checkbox" name="" class="new-control-input isInternshipCheckbox" @if($Intp && $Intp->is_currently_pursuing_internship == '1') checked @endif value="{{$Intp->is_currently_pursuing_internship}}">
                                                                                            <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Pursuing Internship
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="hidden" name="Is_currently_pursuing_internship[]" class="isInternshipCheckbox_hidden" value="{{$Intp->is_currently_pursuing_internship}}">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">City <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Intp && $Intp->city) value="{{$Intp->city}}" @endif name="Is_city[]" class="form-control" placeholder="City">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">State <span class="text-danger">*</span></label>
                                                                                        <select name="Is_state_id[]" class="form-control">
                                                                                            @foreach($State as $States)
                                                                                            <option @if($Intp && $Intp->state_id == $States->id) selected @endif value="{{$States->id}}">{{$States->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="Is_description_{{$key}}">Description <span class="text-danger">*</span></label>
                                                                                        <textarea name="Is_description[]"  id="Is_description_{{$key}}" class="form-control teckeditor">@if($Intp && $Intp->description) {{$Intp->description}} @endif</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="InternRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @else
                                                                            <div class="row addrow Intn_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="job_title">Job title <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="Is_job_title[]" class="form-control" placeholder="Job title" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="company">Company <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="Is_company[]" class="form-control" placeholder="Company">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                                                                        <input type="date" name="Is_start_date[]" value="{{old('Is_start_date')}}" class="form-control mb-4 date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label for="Is_end_date">End Date</label>
                                                                                        <input type="date" readonly name="Is_end_date[]" value="{{old('Is_end_date')}}" class="form-control mb-4 Is_end_date date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <div class="form-group">
                                                                                        <label>Internship Status</label>
                                                                                        <div class="n-chk mt-3">
                                                                                            <label class="new-control new-checkbox checkbox-primary">
                                                                                            <input type="checkbox" name="" class="new-control-input isInternshipCheckbox" value="1" checked>
                                                                                            <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Pursuing Internship
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <input type="hidden" name="Is_currently_pursuing_internship[]" class="isInternshipCheckbox_hidden" value="1">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">City <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="Is_city[]" class="form-control" placeholder="City">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Location">State <span class="text-danger">*</span></label>
                                                                                        <select name="Is_state_id[]" class="form-control">
                                                                                            @foreach($State as $States)
                                                                                            <option value="{{$States->id}}">{{$States->name}}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="Is_description_0">Description <span class="text-danger">*</span></label>
                                                                                        <textarea name="Is_description[]"  id="Is_description_0" class="form-control teckeditor"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="InternRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_more_Inter" class="add_more_Inter"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> 
                                        <div id="Certificate" class="section general-info" @if(@Session::get('SectionNmae') == "Certificate") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                  <div class="user-management-title">
                                                         <h4>Certificate</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="Cert_error" class="text-danger"></div>
                                                                        <div class="addDivCer">
                                                                            @if(count($Certificate) > 0)
                                                                            @foreach($Certificate  as $key=> $Cert)
                                                                            <div class="row addrow Cer_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="job_title">Certificate Name <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Cert && $Cert->name) value="{{$Cert->name}}" @endif name="cer_name[]" class="form-control" placeholder="Certificate Name" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="Orginazation">Orginazation <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Cert && $Cert->organization) value="{{$Cert->organization}}" @endif name="cer_organization[]" class="form-control" placeholder="organization">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="issued_date">Date of Issed <span class="text-danger">*</span></label>
                                                                                        <input type="date" @if($Cert && $Cert->issued_date) value="{{$Cert->issued_date}}" @endif name="cer_issued_date[]" class="form-control">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Cert_error_url_{{$key}}">Url</label>
                                                                                        <input type="text" @if($Cert && $Cert->url) value="{{$Cert->url}}" @endif name="cer_url[]" class="form-control">
                                                                                        <div id="Cert_error_url_{{$key}}"  class="text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="cer_description_{{$key}}">Description </label>
                                                                                        <textarea name="cer_description[]" id="cer_description_{{$key}}" class="form-control teckeditor">@if($Cert && $Cert->description) {{$Cert->description}} @endif</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="CerRemove(this)">-</button>
                                                                                </div>    
                                                                            </div>
                                                                            @endforeach
                                                                            @else
                                                                            <div class="row addrow Cer_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="job_title">Certificate Name <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="cer_name[]" class="form-control" placeholder="Certificate Name" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="Orginazation">Orginazation <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="cer_organization[]" class="form-control" placeholder="organization">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="issued_date">Date of Issed <span class="text-danger">*</span></label>
                                                                                        <input type="date" name="cer_issued_date[]" class="form-control date-input">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="Cert_error_url_0">Url</label>
                                                                                        <input type="text" name="cer_url[]" class="form-control">
                                                                                        <div id="Cert_error_url_0"  class="text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="cer_description_0">Description </label>
                                                                                        <textarea name="cer_description[]" id="cer_description_0" class="form-control teckeditor"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="CerRemove(this)">-</button>
                                                                                </div>   
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_more_Cer" class="add_more_Cer"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>  
                                        <div id="Courses" class="section general-info" @if(@Session::get('SectionNmae') == "Courses") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Courses</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="Courses_error" class="text-danger"></div>
                                                                        <div class="addDivCources">
                                                                        @if(count($Course) > 0)
                                                                        @foreach($Course as $Cour)
                                                                        <div class="row addrow Courses_addrow">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="Co_institution">Institution <span class="text-danger">*</span></label>
                                                                                    <input type="text" @if($Cour && $Cour->institution) value="{{$Cour->institution}}" @endif name="Co_institution[]" class="form-control" placeholder="Institution" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 d-flex justify-content-between">
                                                                                <div class="form-group" style="width:inherit;">
                                                                                    <label for="Co_course">Course <span class="text-danger">*</span></label>
                                                                                    <input type="text" @if($Cour && $Cour->course) value="{{$Cour->course}}" @endif name="Co_course[]" class="form-control" placeholder="Course">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <label for="Co_start_date">Start Date <span class="text-danger">*</span></label>
                                                                                    <input type="date" @if($Cour && $Cour->start_date) value="{{$Cour->start_date}}" @endif name="Co_start_date[]" class="form-control date-input" placeholder="Start Date" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <label for="Co_end_date">End Date </label>
                                                                                    <input type="date" @if($Cour && $Cour->is_currently_pursuing_course == '1') readonly @endif name="Co_end_date[]" @if($Cour && $Cour->end_date) value="{{$Cour->end_date}}" @endif class="form-control Co_end_date mb-4 date-input" placeholder="End Date" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <label>Courses Status</label>
                                                                                    <div class="n-chk mt-3">
                                                                                        <label class="new-control new-checkbox checkbox-primary">
                                                                                        <input type="checkbox" name="" class="new-control-input isCoursesCheckbox" value="{{$Cour->is_currently_pursuing_course}}"  @if($Cour && $Cour->is_currently_pursuing_course == '1') checked @endif>
                                                                                        <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Pursuing Course
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <input type="hidden" name="Co_is_currently_pursuing_course[]" class="isCoursesCheckbox_hidden" value="{{$Cour->is_currently_pursuing_course}}">
                                                                            </div>
                                                                            <div class="addbtn">
                                                                                 <button class="btn btn-danger" onclick="CoursesRemove(this)">-</button>
                                                                           </div>
                                                                        </div>
                                                                        @endforeach
                                                                        @else
                                                                        <div class="row addrow Courses_addrow">
                                                                            <div class="col-sm-6">
                                                                                <div class="form-group">
                                                                                    <label for="Co_institution">Institution <span class="text-danger">*</span></label>
                                                                                    <input type="text" name="Co_institution[]" class="form-control" placeholder="Institution" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 d-flex justify-content-between">
                                                                                <div class="form-group" style="width:inherit;">
                                                                                    <label for="Co_course">Course <span class="text-danger">*</span></label>
                                                                                    <input type="text" name="Co_course[]" class="form-control" placeholder="Course">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <label for="Co_start_date">Start Date <span class="text-danger">*</span></label>
                                                                                    <input type="date" name="Co_start_date[]" class="form-control date-input" placeholder="Start Date" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <label for="Co_end_date">End Date </label>
                                                                                    <input type="date" readonly name="Co_end_date[]" class="form-control Co_end_date mb-4 date-input" placeholder="End Date" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <div class="form-group">
                                                                                    <label>Courses Status</label>
                                                                                    <div class="n-chk mt-3">
                                                                                        <label class="new-control new-checkbox checkbox-primary">
                                                                                        <input type="checkbox" name="" class="new-control-input isCoursesCheckbox" value="1" checked>
                                                                                        <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Pursuing Course
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <input type="hidden" name="Co_is_currently_pursuing_course[]" class="isCoursesCheckbox_hidden" value="1">
                                                                            </div>
                                                                            <div class="addbtn">
                                                                                <button class="btn btn-danger" onclick="CoursesRemove(this)">-</button>
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_more_Cources" class="add_more_Cources"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="References" class="section general-info" @if(@Session::get('SectionNmae') == "References") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>References</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="Refer_error" class="text-danger"></div>
                                                                        <div class="addDivRef">
                                                                            @if(count($Reference) > 0)
                                                                            @foreach($Reference as $key=> $Ref)
                                                                            <div class="row addrow Refer_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="referent_name">Referent name <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Ref && $Ref->referent_name) value="{{$Ref->referent_name}}" @endif  name="referent_name[]" class="form-control" placeholder="Referent name" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="referent_company">Referent company <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Ref && $Ref->referent_company) value="{{$Ref->referent_company}}" @endif  name="referent_company[]" class="form-control" placeholder="Referent company">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="referent_company">Referent email <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Ref && $Ref->referent_email) value="{{$Ref->referent_email}}" @endif  name="referent_email[]" class="form-control" placeholder="Referent email" >
                                                                                        <div id="referent_error_email_{{$key}}"  class="text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="referent_company">Referent phone <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Ref && $Ref->referent_phone_number) value="{{$Ref->referent_phone_number}}" @endif  name="referent_phone_number[]" class="form-control" placeholder="Referent phone" >
                                                                                        <div id="referent_error_phone_{{$key}}"  class="text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="RefRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @else
                                                                            <div class="row addrow Refer_addrow">
                                                                                            <div class="col-sm-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="referent_name">Referent name <span class="text-danger">*</span></label>
                                                                                                    <input type="text" name="referent_name[]" class="form-control" placeholder="Referent name" >
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6 d-flex justify-content-between">
                                                                                                <div class="form-group" style="width:inherit;">
                                                                                                    <label for="referent_company">Referent company <span class="text-danger">*</span></label>
                                                                                                    <input type="text" name="referent_company[]" class="form-control" placeholder="Referent company">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="referent_company">Referent email <span class="text-danger">*</span></label>
                                                                                                    <input type="text" name="referent_email[]" class="form-control" placeholder="Referent email" >
                                                                                                    <div id="referent_error_email_0"  class="text-danger"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-sm-6">
                                                                                                <div class="form-group">
                                                                                                    <label for="referent_company">Referent phone <span class="text-danger">*</span></label>
                                                                                                    <input type="text" name="referent_phone_number[]" class="form-control" placeholder="Referent phone" >
                                                                                                    <div id="referent_error_phone_0"  class="text-danger"></div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="addbtn">
                                                                                                <button class="btn btn-danger" onclick="RefRemove(this)">-</button>
                                                                                        </div>
                                                                            </div>  
                                                                            @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_more_Ref" class="add_more_Ref"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> 
                                        <div id="Links" class="section general-info" @if(@Session::get('SectionNmae') == "Links") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Links</h4>
                                                        <p>Add relevant links: personal website, socials, LinkedIn profile, etc.</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="links_error" class="text-danger"></div>
                                                                        <div class="addDivLinks">
                                                                            @if(count($Link) > 0)
                                                                            @foreach($Link as $key=> $Links)
                                                                            <div class="row addrow links_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="link_title">Link Title <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Links && $Links->link_title) value="{{$Links->link_title}}" @endif name="link_title[]" class="form-control" placeholder="Link Title" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="url">URL <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Links && $Links->url) value="{{$Links->url}}" @endif name="url[]" class="form-control" placeholder="URL">
                                                                                        <div id="link_error_url_{{$key}}"  class="text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="LinksRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @else
                                                                            <div class="row addrow links_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="link_title">Link Title <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="link_title[]" class="form-control" placeholder="Link Title" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="url">URL <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="url[]" class="form-control" placeholder="URL">
                                                                                        <div id="link_error_url_0"  class="text-danger"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="LinksRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_more_Links" class="add_more_Links"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="Languages" class="section general-info" @if(@Session::get('SectionNmae') == "Languages") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                  <div class="user-management-title">
                                                         <h4>Languages</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="Languages_error" class="text-danger"></div>
                                                                        <div class="addDivLanguage">
                                                                            @if(count($Language) > 0)
                                                                            @foreach($Language as $Lang)
                                                                            <div class="row addrow Languages_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="language">Language <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($Lang && $Lang->language) value="{{$Lang->language}}" @endif  name="language[]" class="form-control" placeholder="Language" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="proficiency">Proficiency </label>
                                                                                            <select name="proficiency[]" class="form-control">
                                                                                                <option value="">Select Proficiency</option>
                                                                                                <option @if($Lang && $Lang->proficiency == "Novice (A1-A2)" ) selected @endif value="Novice (A1-A2)">Novice (A1-A2)</option>
                                                                                                <option @if($Lang && $Lang->proficiency == "Proficient (B1-B2)" ) selected @endif value="Proficient (B1-B2)">Proficient (B1-B2)</option>
                                                                                                <option @if($Lang && $Lang->proficiency == "Highly proficient (C1-C2)" ) selected @endif value="Highly proficient (C1-C2)">Highly proficient (C1-C2)</option>
                                                                                                <option @if($Lang && $Lang->proficiency == "Native" ) selected @endif value="Native">Native</option>
                                                                                            </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="LanguageRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @else
                                                                            <div class="row addrow Languages_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="language">Language <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="language[]" class="form-control" placeholder="Language" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="proficiency">Proficiency </label>
                                                                                        <select name="proficiency[]" class="form-control">
                                                                                            <option value="">Select Proficiency</option>
                                                                                            <option value="Novice (A1-A2)">Novice (A1-A2)</option>
                                                                                            <option value="Proficient (B1-B2)">Proficient (B1-B2)</option>
                                                                                            <option value="Highly proficient (C1-C2)">Highly proficient (C1-C2)</option>
                                                                                            <option value="Native">Native</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="LanguageRemove(this)">-</button>
                                                                                </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_more_Language" class="add_more_Language"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="Hobbies" class="section general-info" @if(@Session::get('SectionNmae') == "Hobbies") style="display: block;" @else style="display: none;" @endif>
                                            <div class="info">
                                                <div class="user-management-title">
                                                    <h4>Hobbies</h4>
                                                    <p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label for="hobbies">Summary <span class="text-danger">*</span></label>
                                                            <textarea name="hobbies" id="Hobbies" class="form-control teckeditor">@if($User && $User->hobbies) {!!$User->hobbies!!} @endif</textarea>
                                                            <div id="Hobbies_error" class="text-danger"></div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div id="Customsection" class="section general-info" @if(@Session::get('SectionNmae') == "Customsection") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Custom section</h4>
                                                        <p>You can add anything you want in the custom section.</p>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="row">
                                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                                    <div class="form">
                                                                        <div id="custom_error" class="text-danger"></div>
                                                                        <div class="addDivCustom">
                                                                            @if(count($CustomSection) > 0)
                                                                            @foreach($CustomSection as $key=> $CustomSection)
                                                                            <div class="row addrow custom_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="header">Header <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($CustomSection && $CustomSection->header) value="{{$CustomSection->header}}" @endif name="header[]" class="form-control" placeholder="Header" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="sub_header">Subheader <span class="text-danger">*</span></label>
                                                                                        <input type="text" @if($CustomSection && $CustomSection->sub_header) value="{{$CustomSection->sub_header}}" @endif name="sub_header[]" class="form-control" placeholder="Subheader">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="custom_description_{{$key}}">Description <span class="text-danger">*</span></label>
                                                                                        <textarea  name="description[]"  id="custom_description_{{$key}}" class="form-control teckeditor">@if($CustomSection && $CustomSection->description) {!!$CustomSection->description!!} @endif</textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="CustomRemove(this)">-</button>
                                                                            </div>
                                                                            </div>
                                                                            @endforeach
                                                                            @else
                                                                            <div class="row addrow custom_addrow">
                                                                                <div class="col-sm-6">
                                                                                    <div class="form-group">
                                                                                        <label for="header">Header <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="header[]" class="form-control" placeholder="Header" >
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 d-flex justify-content-between">
                                                                                    <div class="form-group" style="width:inherit;">
                                                                                        <label for="sub_header">Subheader <span class="text-danger">*</span></label>
                                                                                        <input type="text" name="sub_header[]" class="form-control" placeholder="Subheader">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <label for="custom_description_0">Description <span class="text-danger">*</span></label>
                                                                                        <textarea name="description[]" id="custom_description_0" class="form-control teckeditor"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="addbtn">
                                                                                    <button class="btn btn-danger" onclick="CustomRemove(this)">-</button>
                                                                            </div>
                                                                            </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="addmore">
                                                                                    <a id="add_Custom_btn" class="add_Custom_btn"><i class="fa fa-plus"></i>&nbsp; Add one more</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>    
                                    </div>                            
                                </div>
                            </div>
                        </div>
                        <div class="account-settings-footer">
                            <div class="as-footer-container">
                            <button type="button" id="multiplereset" class="btn btn-warning">Reset All</button>
                                <!--<div class="blockui-growl-message">-->
                                <!--    <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully-->
                                <!--</div>-->
                                <input type="hidden" name="SectionNmae" id="btnNaId" @if(Session::has('SectionNmae') && Session::get('SectionNmae') != '') value="{{ Session::get('SectionNmae') }}" @else value="PersonalDetails" @endif>
                                <button onclick="SaveChanges()" type="button" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        // Initialize CKEditor on existing elements with the class 'teckeditor'
        $('.teckeditor').each(function (index, element) {
            CKEDITOR.replace(element, {});
        });
        function setMaxDate(className, type = 'date') {
            var today = new Date().toISOString().split('T')[0];
            // Get all elements with the provided class name
            var dateInputs = document.querySelectorAll(className);
            // Loop through each input and set the max attribute to today's date
            dateInputs.forEach(function(input) {
                input.setAttribute('max', today);
                if (type) {
                    input.setAttribute('type', type);
                }
            });
        }
        // Call the function with your desired class name
        setMaxDate('.date-input');
        $(document).on('change', '.isWorkingCheckbox', function() {
            let endDateInput = $(this).closest('.row').find('.EH_end_date');
            let element = $(this).closest('.row');
            if ($(this).is(":checked")) {
                endDateInput.prop('readonly', true);
                endDateInput.val('');
                element.find('.isWorkingCheckbox_hidden').val('1');
            } else {
                endDateInput.prop('readonly', false);
                element.find('.isWorkingCheckbox_hidden').val('0');
            }
        });
        $(document).on('change', '.isEducationCheckbox', function() {
            let endDateInput = $(this).closest('.row').find('.Ed_end_date');
            let element = $(this).closest('.row');
            if ($(this).is(":checked")) {
                endDateInput.prop('readonly', true);
                endDateInput.val('');
                element.find('.isEducationCheckbox_hidden').val('1');
            } else {
                endDateInput.prop('readonly', false);
                element.find('.isEducationCheckbox_hidden').val('0');
            }
        });
        $(document).on('change', '.isInternshipCheckbox', function() {
            let endDateInput = $(this).closest('.row').find('.Is_end_date');
            let element = $(this).closest('.row');
            if ($(this).is(":checked")) {
                endDateInput.prop('readonly', true);
                endDateInput.val('');
                element.find('.isInternshipCheckbox_hidden').val('1');
            } else {
                endDateInput.prop('readonly', false);
                element.find('.isInternshipCheckbox_hidden').val('0');
            }
        });
        $(document).on('change', '.isCoursesCheckbox', function() {
            let endDateInput = $(this).closest('.row').find('.Co_end_date');
            let element = $(this).closest('.row');
            if ($(this).is(":checked")) {
                endDateInput.prop('readonly', true);
                endDateInput.val('');
                element.find('.isCoursesCheckbox_hidden').val('1');
            } else {
                endDateInput.prop('readonly', false);
                element.find('.isCoursesCheckbox_hidden').val('0');
            }
        });
        $('#add_more_btn').click(function () {  
            var $addDivMore = $('.addDivMore');
            var $lastAddRow = $addDivMore.find('.EH_addrow:last');

            if ($lastAddRow.length > 0) {
                var index = $lastAddRow.index() + 1;
            } else {
                var index = 0;
            }
            var descriptionId = 'EH_description_' + index;
            var newRow = `
                    <div class="row addrow EH_addrow mt-1">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="EH_job_title">Job title <span class="text-danger">*</span></label>
                                <input type="text" name="EH_job_title[]"  class="form-control" placeholder="Job title" >
                            </div>
                        </div>
                        <div class="col-sm-6 d-flex justify-content-between">
                            <div class="form-group" style="width:inherit;">
                                <label for="EH_company">Company <span class="text-danger">*</span></label>
                                <input type="text" name="EH_company[]"  class="form-control" placeholder="Company">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="EH_start_date">Start Date <span class="text-danger">*</span></label>
                                <input type="date" name="EH_start_date[]" class="form-control mb-4 date-input">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="EH_end_date">End Date</label>
                                <input type="date" readonly name="EH_end_date[]" class="form-control mb-4 EH_end_date date-input">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>Working Status</label>
                                <div class="n-chk mt-3">
                                    <label class="new-control new-checkbox checkbox-primary">
                                    <input type="checkbox" name="" class="new-control-input isWorkingCheckbox"  checked>
                                    <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Working
                                    </label>
                                </div>
                                <input type="hidden" name="EH_is_current_working[]" class="isWorkingCheckbox_hidden" value="1">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Location">City <span class="text-danger">*</span></label>
                                <input type="text" name="EH_city[]" class="form-control" placeholder="City">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Location">State <span class="text-danger">*</span></label>
                                <select name="EH_state_id[]" class="form-control select2">
                                    @foreach($State as $States)
                                    <option value="{{$States->id}}">{{$States->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="${descriptionId}">Description <span class="text-danger">*</span></label>
                                <textarea name="EH_description[]" id="${descriptionId}" class="form-control teckeditor"></textarea>
                            </div>
                        </div>
                        <div class="addbtn">
                         <button class="btn btn-danger" onclick="HistoryRemove(this)">-</button>
                       </div>
                    </div>`;
            
            if ($lastAddRow.length > 0) {
                $(newRow).insertAfter($lastAddRow);
            } else {
                $addDivMore.append(newRow);
            }

            // Initialize CKEditor after the new row is inserted
            CKEDITOR.replace(descriptionId, {});
            setMaxDate('.date-input');
        });
        $('#add_Edu_btn').click(function () {
            var $addDivEdu = $('.addDivEdu');
            var $lastAddRow = $addDivEdu.find('.Ed_addrow:last');
            if ($lastAddRow.length > 0) {
                var index = $lastAddRow.index() + 1;
            } else {
                var index = 0;
            }
            var edudescriptionId = 'Ed_description_' + index;
            var Ed_newRow = `
                <div class="row addrow Ed_addrow mt-1">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="institution">Institution <span class="text-danger">*</span></label>
                            <input type="text" name="Ed_institution[]" class="form-control" placeholder="Institution" >
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex justify-content-between">
                        <div class="form-group" style="width:inherit;">
                            <label for="degree">Degree <span class="text-danger">*</span></label>
                            <input type="text" name="Ed_degree[]" class="form-control" placeholder="Degree">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="start_date">Start Date <span class="text-danger">*</span></label>
                            <input type="date" name="Ed_start_date[]"  class="form-control mb-4 date-input">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="Ed_end_date">End Date</label>
                            <input type="date" readonly name="Ed_end_date[]" class="form-control mb-4 Ed_end_date date-input">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label>Studying Status</label>
                            <div class="n-chk mt-3">
                                <label class="new-control new-checkbox checkbox-primary">
                                <input type="checkbox" name="" class="new-control-input isEducationCheckbox" value="1" checked>
                                <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Studying
                                </label>
                            </div>
                        </div>
                        <input type="hidden" name="Ed_is_current_studying[]" class="isEducationCheckbox_hidden" value="1">
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Location">City <span class="text-danger">*</span></label>
                            <input type="text" name="Ed_city[]" class="form-control mb-4" placeholder="City">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="Location">State <span class="text-danger">*</span></label>
                            <select name="Ed_state_id[]" class="form-control select2 mb-4">
                                @foreach($State as $States)
                                <option value="{{$States->id}}" >{{$States->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="${edudescriptionId}">Description <span class="text-danger">*</span></label>
                            <textarea name="Ed_description[]" id="${edudescriptionId}" class="form-control teckeditor"></textarea>
                        </div>
                    </div>
                    <div class="addbtn">
                        <button class="btn btn-danger" onclick="EducationRemove(this)">-</button>
                    </div>
                </div>
                `;            
            if ($lastAddRow.length > 0) {
                $(Ed_newRow).insertAfter($lastAddRow);
            } else {
                $addDivEdu.append(Ed_newRow);
            }
            CKEDITOR.replace(edudescriptionId, {});
            setMaxDate('.date-input');
        });
        $('#add_Skill_btn').click(function () {
            var $addDivSkill = $('.addDivSkill');
            var $lastAddRow = $addDivSkill.find('.skill_addrow:last');
            var skill_newRow = `
                        <div class="row addrow skill_addrow mt-1">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="skill">Skill <span class="text-danger">*</span></label>
                                    <input type="text" name="skill[]" class="form-control" placeholder="skill">
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-between">
                             <div class="form-group" style="width:inherit;">
                                 <label for="level">Level </label>
                                 <select name="level[]" class="form-control mb-4">
                                    <option value="">Select skill level</option>
                                    <option value="Novice" level')>Novice</option>
                                    <option value="Beginner">Beginner</option>
                                    <option value="Skillful" >Skillful</option>
                                    <option value="Experienced" >Experienced</option>
                                    <option value="Expert" >Expert</option>
                                </select>  
                             </div>
                             </div>
                             <div class="addbtn ">
                                <button class="btn btn-danger" onclick="SkillRemove(this)">-</button>
                            </div>
                        </div>
                    `;
            if ($addDivSkill.length > 0) {
                $(skill_newRow).insertAfter($addDivSkill);
            } else {
                $addDivEdu.append(skill_newRow);
            }
        });
        $('#add_more_Inter').click(function () {
            var $addDivInter = $('.addDivInter');
            var $lastAddRow = $addDivInter.find('.Intn_addrow:last');
            if ($lastAddRow.length > 0) {
                var index = $lastAddRow.index() + 1;
            } else {
                var index = 0;
            }
            var IsudescriptionId = 'Is_description_' + index;
            var Is_newRow = `
                        <div class="row addrow Intn_addrow mt-3">
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <label for="job_title">Job title <span class="text-danger">*</span></label>
                                 <input type="text" name="Is_job_title[]" class="form-control" placeholder="Job title" >
                             </div>
                         </div>
                         <div class="col-sm-6 d-flex justify-content-between">
                             <div class="form-group" style="width:inherit;">
                                 <label for="company">Company <span class="text-danger">*</span></label>
                                 <input type="text" name="Is_company[]" class="form-control" placeholder="Company">
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                 <input type="date" name="Is_start_date[]" class="form-control date-input">
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label for="Is_end_date">End Date</label>
                                 <input type="date" readonly name="Is_end_date[]" class="form-control mb-4 Is_end_date date-input">
                             </div>
                         </div>
                         <div class="col-sm-4">
                             <div class="form-group">
                                 <label>Internship Status</label>
                                 <div class="n-chk mt-3">
                                     <label class="new-control new-checkbox checkbox-primary">
                                     <input type="checkbox" name="" class="new-control-input isInternshipCheckbox" value="1" checked>
                                     <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Pursuing Internship
                                     </label>
                                 </div>
                             </div>
                             <input type="hidden" name="Is_currently_pursuing_internship[]" class="isInternshipCheckbox_hidden" value="1">
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <label for="Location">City <span class="text-danger">*</span></label>
                                 <input type="text" name="Is_city[]" class="form-control" placeholder="City">
                             </div>
                         </div>
                         <div class="col-sm-6">
                             <div class="form-group">
                                 <label for="Location">State <span class="text-danger">*</span></label>
                                 <select name="Is_state_id[]" class="form-control select2">
                                    @foreach($State as $States)
                                     <option value="{{$States->id}}">{{$States->name}}</option>
                                    @endforeach
                                 </select>
                             </div>
                         </div>
                         <div class="col-sm-12">
                             <div class="form-group">
                                 <label for="${IsudescriptionId}">Description <span class="text-danger">*</span></label>
                                 <textarea name="Is_description[]" id="${IsudescriptionId}" class="form-control teckeditor"></textarea>
                             </div>
                         </div>
                         <div class="addbtn">
                            <button class="btn btn-danger" onclick="InternRemove(this)">-</button>
                        </div>
                     </div>
                    `;
            if ($lastAddRow.length > 0) {
                $(Is_newRow).insertAfter($lastAddRow);
            } else {
                $addDivInter.append(Is_newRow);
            }
            CKEDITOR.replace(IsudescriptionId, {});
            setMaxDate('.date-input');
        });
         $('#add_more_Cer').click(function () {
            var $addDivCer = $('.addDivCer');
            var $lastAddRow = $addDivCer.find('.Cer_addrow:last');
            if ($lastAddRow.length > 0) {
                var index = $lastAddRow.index() + 1;
            } else {
                var index = 0;
            }
            var cerdescriptionId = 'cer_description_' + index;
            var Certerrorurl = 'cerdescriptionId' + index;
            var Cer_newRow = `
                    <div class="row addrow Cer_addrow  mt-1">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="job_title">Certificate Name <span class="text-danger">*</span></label>
                                    <input type="text" name="cer_name[]" class="form-control" placeholder="Certificate Name" >
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="form-group" style="width:inherit;">
                                    <label for="Orginazation">Orginazation <span class="text-danger">*</span></label>
                                    <input type="text" name="cer_organization[]" class="form-control" placeholder="organization">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="issued_date">Date of Issed <span class="text-danger">*</span></label>
                                    <input type="date" name="cer_issued_date[]" class="form-control date-input">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="${Certerrorurl}">Url</label>
                                    <input type="text" name="cer_url[]" class="form-control">
                                    <div id="${Certerrorurl}"  class="text-danger"></div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="${cerdescriptionId}">Description </label>
                                    <textarea name="cer_description[]" id="${cerdescriptionId}" class="form-control teckeditor"></textarea>
                                </div>
                            </div>
                            <div class="addbtn">
                                <button class="btn btn-danger" onclick="CerRemove(this)">-</button>
                            </div>  
                        </div>
                    `;

            if ($lastAddRow.length > 0) {
                $(Cer_newRow).insertAfter($lastAddRow);
            } else {
                $addDivCer.append(Cer_newRow);
            }
            CKEDITOR.replace(cerdescriptionId, {});
            setMaxDate('.date-input');
            
        });
        $('#add_more_Ref').click(function () {
            var $addDivRef = $('.addDivRef');
            var $lastAddRow = $addDivRef.find('.Refer_addrow:last');
            if ($lastAddRow.length > 0) {
                var index = $lastAddRow.index() + 1;
            } else {
                var index = 0;
            }
            var referenterrorphone = 'referent_error_phone_' + index;
            var referenterroremail = 'referent_error_email_' + index;
            var Ref_newRow = `
                        <div class="row addrow Refer_addrow mt-1">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="referent_name">Referent name <span class="text-danger">*</span></label>
                                    <input type="text" name="referent_name[]" class="form-control" placeholder="Referent name" >
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="form-group" style="width:inherit;">
                                    <label for="referent_company">Referent company <span class="text-danger">*</span></label>
                                    <input type="text" name="referent_company[]" class="form-control" placeholder="Referent company">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="${referenterroremail}">Referent email <span class="text-danger">*</span></label>
                                    <input type="text" name="referent_email[]" class="form-control" placeholder="Referent email" >
                                    <div id="${referenterroremail}"  class="text-danger"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="${referenterrorphone}">Referent phone <span class="text-danger">*</span></label>
                                    <input type="text" name="referent_phone_number[]" class="form-control" placeholder="Referent phone" >
                                    <div id="${referenterrorphone}"  class="text-danger"></div>
                                </div>
                            </div>
                            <div class="addbtn">
                                <button class="btn btn-danger" onclick="RefRemove(this)">-</button>
                            </div>
                        </div>
                    `;
            if ($lastAddRow.length > 0) {
                $(Ref_newRow).insertAfter($lastAddRow);
            } else {
                $addDivRef.append(Ref_newRow);
            }
        });
        $('#add_more_Cources').click(function () {
            var $addDivCources = $('.addDivCources');
            var $lastAddRow = $addDivCources.find('.Courses_addrow:last');
            var Cou_newRow = `      
                         <div class="row addrow Courses_addrow mt-1">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="Co_institution">Institution <span class="text-danger">*</span></label>
                                    <input type="text" name="Co_institution[]" class="form-control" placeholder="Institution" >
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="form-group" style="width:inherit;">
                                    <label for="Co_course">Course <span class="text-danger">*</span></label>
                                    <input type="text" name="Co_course[]" class="form-control" placeholder="Course">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="Co_start_date">Start Date <span class="text-danger">*</span></label>
                                    <input type="date" name="Co_start_date[]" class="form-control mb-4 date-input" placeholder="Start Date" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="Co_end_date">End Date </label>
                                    <input type="date" readonly name="Co_end_date[]" class="form-control Co_end_date mb-4 date-input" placeholder="End Date" >
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Courses Status</label>
                                    <div class="n-chk mt-3">
                                        <label class="new-control new-checkbox checkbox-primary">
                                        <input type="checkbox" name="" class="new-control-input isCoursesCheckbox" value="1" checked>
                                        <span class="new-control-indicator"></span>&nbsp;&nbsp;Is Currently Pursuing Course
                                        </label>
                                    </div>
                                </div>
                                <input type="hidden" name="Co_is_currently_pursuing_course[]" class="isCoursesCheckbox_hidden" value="1">
                            </div>
                            <div class="addbtn">
                                 <button class="btn btn-danger" onclick="CoursesRemove(this)">-</button>
                           </div> 
                        </div>
                    `;
            if ($lastAddRow.length > 0) {
                $(Cou_newRow).insertAfter($lastAddRow);
            } else {
                $addDivCources.append(Cou_newRow);
            }
            setMaxDate('.date-input');
        });
        $('#add_more_Links').click(function () {
            var $addDivLinks = $('.addDivLinks');
            var $lastAddRow = $addDivLinks.find('.links_addrow:last');
            if ($lastAddRow.length > 0) {
                var index = $lastAddRow.index() + 1;
            } else {
                var index = 0;
            }
            var linkerrorurl = 'link_error_url_' + index;
            var Link_newRow = `
                         <div class="row addrow links_addrow mt-1">
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="link_title">Link Title <span class="text-danger">*</span></label>
                                     <input type="text" name="link_title[]" class="form-control" placeholder="Link Title" >
                                 </div>
                             </div>
                             <div class="col-sm-6 d-flex justify-content-between">
                                 <div class="form-group" style="width:inherit;">
                                     <label for="${linkerrorurl}">URL <span class="text-danger">*</span></label>
                                     <input type="text" name="url[]" class="form-control" placeholder="URL">
                                     <div id="${linkerrorurl}"  class="text-danger"></div> 
                                </div>
                             </div>
                             <div class="addbtn">
                                 <button class="btn btn-danger" onclick="LinksRemove(this)">-</button>
                             </div>
                        </div>
                    `;
            if ($lastAddRow.length > 0) {
                $(Link_newRow).insertAfter($lastAddRow);
            } else {
                $addDivLinks.append(Link_newRow);
            }
        });
        $('#add_more_Language').click(function () { 
            var $addDivLanguage = $('.addDivLanguage');
            var $lastAddRow = $addDivLanguage.find('.Languages_addrow:last');
            var Lang_newRow = `
                         <div class="row addrow Languages_addrow mt-1">
                             <div class="col-sm-6">
                                 <div class="form-group">
                                     <label for="language">Language <span class="text-danger">*</span></label>
                                     <input type="text" name="language[]" class="form-control" placeholder="Language" >
                                 </div>
                             </div>
                             <div class="col-sm-6 d-flex justify-content-between">
                                 <div class="form-group" style="width:inherit;">
                                     <label for="proficiency">proficiency </label>
                                     <select name="proficiency[]" class="form-control mb-4">
                                         <option value="">Select Proficiency</option>
                                         <option value="Novice (A1-A2)" >Novice (A1-A2)</option>
                                         <option value="Proficient (B1-B2)">Proficient (B1-B2)</option>
                                         <option value="Highly proficient (C1-C2)">Highly proficient (C1-C2)</option>
                                         <option value="Native" >Native</option>
                                     </select>
                                 </div>
                             </div>
                             <div class="addbtn">
                                 <button class="btn btn-danger" onclick="LanguageRemove(this)">-</button>
                             </div>
                         </div>
                    `;
            if ($lastAddRow.length > 0) {
                $(Lang_newRow).insertAfter($lastAddRow);
            } else {
                $addDivLanguage.append(Lang_newRow);
            }
        });
        $('#add_Custom_btn').click(function () {
            var $addDivCustom = $('.addDivCustom');
            var $lastAddRow = $addDivCustom.find('.custom_addrow:last');
            if ($lastAddRow.length > 0) {
                var index = $lastAddRow.index() + 1;
            } else {
                var index = 0;
            }
            var customdescriptionId = 'custom_description_' + index;
            var Cust_newRow = `
                        <div class="row addrow custom_addrow mt-1">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="header">Header <span class="text-danger">*</span></label>
                                    <input type="text" name="header[]" class="form-control" placeholder="Header" >
                                </div>
                            </div>
                            <div class="col-sm-6 d-flex justify-content-between">
                                <div class="form-group" style="width:inherit;">
                                    <label for="sub_header">Subheader <span class="text-danger">*</span></label>
                                    <input type="text" name="sub_header[]" class="form-control" placeholder="Subheader">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="${customdescriptionId}">Description <span class="text-danger">*</span></label>
                                    <textarea name="description[]" id="${customdescriptionId}" class="form-control teckeditor"></textarea>
                                </div>
                            </div>
                            <div class="addbtn">
                                 <button class="btn btn-danger" onclick="CustomRemove(this)">-</button>
                             </div>
                        </div>
                    `;
            if ($lastAddRow.length > 0) {
                $(Cust_newRow).insertAfter($lastAddRow);
            } else {
                $addDivCustom.append(Cust_newRow);
            }
            CKEDITOR.replace(customdescriptionId, {});
            setMaxDate('.date-input');
        });
    });

    function HistoryRemove(button) {
        $(button).closest('.row').remove();
    }
    function EducationRemove(button) {
        $(button).closest('.row').remove();
    }
    function SkillRemove(button) {
        $(button).closest('.row').remove();
    }
    function InternRemove(button) {
        $(button).closest('.row').remove();
    }
    function CerRemove(button) {
        $(button).closest('.row').remove();
    }
    function RefRemove(button) {
        $(button).closest('.row').remove();
    }
    function CoursesRemove(button) {
        $(button).closest('.row').remove();
    }
    function LinksRemove(button) {
        $(button).closest('.row').remove();
    }
    function LanguageRemove(button) {
        $(button).closest('.row').remove();
    }
    function CustomRemove(button) {
        $(button).closest('.row').remove();
    }

    $(document).ready(function () {
        $(".placeholder").select2({
            placeholder: "Make a Selection",
            allowClear: true
        });
    });
    function Detailed(value) {
        var currentValue = $('#btnNaId').val();
        switch (currentValue) {
            case "PersonalDetails":
                if (!validatePersonalDetails()) return;
                break;
            case "ContactInformation":
                if (!validateContactInformation()) return;
                break;
            case "ProfessionalSummary":
                if (!validateProfessionalSummary()) return;
                break;
            case "EmploymentHistory":
                if (!validateEmploymentHistory()) return;
                break;
            case "Education":
                if (!validateEducation()) return;
                break;
            case "Skills":
                if (!validateskill()) return;
                break;
            case "Internships":
                if (!validateInternships()) return;
                break;
            case "Certificate":
                if (!validateCertificate()) return;
                break;
            case "Courses":
                if (!validateCourses()) return;
                break;
            case "References":
                if (!validateReferences()) return;
                break;
            case "Links":
                if (!validateLinks()) return;
                break;
            case "Languages":
                if (!validateLanguages()) return;
                break;
            case "Hobbies":
                if (!validateHobbies()) return;
                break;
            case "Customsection":
                if (!validateCustomsection()) return;
                break;
        }

        // Update btnNaId value and hide sections
        $('#btnNaId').val(value);
        hideAllSectionsExcept(value);
    }

    function SaveChanges() {
        var currentValue = $('#btnNaId').val();

        if (currentValue == "PersonalDetails") {
            if (!validatePersonalDetails()) {
                return;
            }
        } else if (currentValue == "ContactInformation") {
            if (!validateContactInformation()) {
                return;
            }
        } else if (currentValue == "ProfessionalSummary") {
            if (!validateProfessionalSummary()) {
                return;
            }
        } else if (currentValue == "EmploymentHistory") {
            if (!validateEmploymentHistory()) {
                return;
            }
        } else if (currentValue == "Education") {
            if (!validateEducation()) {
                return;
            }
        } else if (currentValue == "Skills") {
            if (!validateskill()) {
                return;
            }
        } else if (currentValue == "Internships") {
            if (!validateInternships()) {
                return;
            }
        } else if (currentValue == "Certificate") {
            if (!validateCertificate()) {
                return;
            }
        } else if (currentValue == "Courses") {
            if (!validateCourses()) {
                return;
            }
        } else if (currentValue == "References") {
            if (!validateReferences()) {
                return;
            }
        } else if (currentValue == "Links") {
            if (!validateLinks()) {
                return;
            }
        } else if (currentValue == "Languages") {
            if (!validateLanguages()) {
                return;
            }
        } else if (currentValue == "Hobbies") {
            if (!validateHobbies()) {
                return;
            }
        } else if (currentValue == "Customsection") {
            if (!validateCustomsection()) {
                return;
            }
        }

        // If all validations pass, submit the form
        $('#userForm').submit();
    }
    function hideAllSectionsExcept(sectionId) {
        var allSections = ['PersonalDetails','ContactInformation', 'ProfessionalSummary', 'EmploymentHistory', 'Education', 'Skills', 'Internships', 'Certificate', 'Courses', 'References', 'Links', 'Languages', 'Hobbies', 'Customsection'];
        
        for (var i = 0; i < allSections.length; i++) {
            var section = $('#' + allSections[i]);
            if (allSections[i] === sectionId) {
                section.show(500);
            } else {
                section.hide(500);
            }
        }
    }
    // Function to validate PersonalDetails fields
    function validatePersonalDetails() {
        var isValid = true;
        var firstName = $('#first_name').val().trim();
        if (!firstName) {
            $('#first_name').addClass('is-invalid');
            $('#first_name_error').text('first Name is required field!');
            isValid = false;
        } else {
            $('#first_name').removeClass('is-invalid');
            $('#first_name_error').text('');
        }
        var lastName = $('#last_name').val().trim();
        if (!lastName) {
            $('#last_name').addClass('is-invalid');
            $('#last_name_error').text('Last Name is required field!');
            isValid = false;
        } else {
            $('#last_name').removeClass('is-invalid');
            $('#last_name_error').text('');
        }
        var email = $('#email').val().trim();
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (!email) {
            $('#email').addClass('is-invalid');
            $('#email_error').text('Email is a required field!');
            isValid = false;
        } else if (!emailPattern.test(email)) {
            $('#email').addClass('is-invalid');
            $('#emailmasg').text('');
            $('#email_error').text('Please enter a valid email address.');
            isValid = false;
        } else {
            $('#email').removeClass('is-invalid');
            $('#email_error').text('');
        }
        
        var planId = $('#plan_id').val().trim();
        if (!planId) {
            $('#plan_id').addClass('is-invalid');
            $('#plan_error').text('Plan is a required field!');
            isValid = false;
        } else {
            $('#plan_id').removeClass('is-invalid');
            $('#plan_error').text('');
        }
        
        var projecturl = $('#project_url').val().trim();
        if (projecturl) {
            var urlPattern = /^(http[s]?:\/\/)?[^\s(["<,>]*\.[^\s[",><]*$/;
            if (!urlPattern.test(projecturl)) {
                $('#project_url').addClass('is-invalid');
                $('#project_url_error').text('Please enter a valid URL!');
                isValid = false;
            } else {
                $('#project_url').removeClass('is-invalid');
                $('#project_url_error').text('');
            }
        }
        
        return isValid;
    }
    // Function to validate Contact Information fields
    function validateContactInformation() {
        var isValid = true;

        // Validation rules for each field within the Contact Information section
        var country = $('#country').val().trim();
        if (!country) {
            $('#country').addClass('is-invalid');
            isValid = false;
        } else {
            $('#country').removeClass('is-invalid');
            $('#country_error').text('');
        }

        var city = $('#city').val().trim();
        if (!city) {
            $('#city').addClass('is-invalid');
            isValid = false;
        } else {
            $('#city').removeClass('is-invalid');
            $('#city_error').text('');
        }

        var postalCode = $('#postal_code').val().trim();
        if (!postalCode) {
            $('#postal_code').addClass('is-invalid');
            isValid = false;
        } else {
            $('#postal_code').removeClass('is-invalid');
            $('#postal_code_error').text('');
        }

        var phoneNumber = $('#phone_number').val().trim();
        var phoneRegex = /^\+?1?\s?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
        if (!phoneNumber.match(phoneRegex)) {
            $('#phone_number').addClass('is-invalid');
            $('#phone_number_error').text('Please enter a valid US phone number.');
            isValid = false;
        } else {
            $('#phone_number').removeClass('is-invalid');
            $('#phone_number_error').text('');
        }

        var address = $('#address').val().trim();
        if (!address) {
            $('#address').addClass('is-invalid');
            isValid = false;
        } else {
            $('#address').removeClass('is-invalid');
            $('#address_error').text('');
        }

        return isValid;
    }
    // Function to validate Professional Summary field length and content
    function validateProfessionalSummary() {
        var maxCharacters = 255;
        if (!CKEDITOR.instances.professional_summary) {
            $('#professional_summary_error').text("CKEditor instance not initialized for Professional Summary.");
            return false;
        }
        var summaryContent = CKEDITOR.instances.professional_summary.getData().trim();
        if (!summaryContent) {
            $('#professional_summary_error').text("The Professional Summary field is required.");
            return false;
        }
        if (summaryContent.length > maxCharacters) {
            $('#professional_summary_error').text("The professional summary must not be greater than 255 characters.");
            return false;
        }
        $('#professional_summary_error').text('');
        
        return true;
    }
    function validateEmploymentHistory() {
        var allFieldsFilled = true;
        var startDateError = false;
        var endDateError = false;
        $('.EH_addrow').each(function(index) {
            var jobTitle = $(this).find('input[name="EH_job_title[]"]').val();
            var company = $(this).find('input[name="EH_company[]"]').val();
            var startDate = $(this).find('input[name="EH_start_date[]"]').val();
            var endDate = $(this).find('input[name="EH_end_date[]"]').val();
            var city = $(this).find('input[name="EH_city[]"]').val();
            var state = $(this).find('select[name="EH_state_id[]"]').val();
            var descriptionEditorId = 'EH_description_' + index;
            if (typeof CKEDITOR.instances[descriptionEditorId] !== 'undefined') {
                var description = CKEDITOR.instances[descriptionEditorId].getData().trim();
                if (!jobTitle || !company || !startDate || !city || !state || !description) {
                    allFieldsFilled = false;
                    return false;
                }
                // Convert start and end dates to Date objects for comparison
                var startDateObj = new Date(startDate);
                var endDateObj = new Date(endDate);
                // Check if end date is provided and start date is greater than end date
                if (endDate && startDateObj > endDateObj) {
                    $('#employee_error').text("Start date cannot be greater than end date.");
                    endDateError = true; // Set end date error flag
                    return false; // Exit the loop early
                }
            } else {
                console.error("CKEditor instance not found for ID: " + descriptionEditorId);
            }
        });

        // Display or hide error message based on error flags
        if (endDateError) {
                $('#employee_error').text("Start date cannot be greater than end date.");
            } else if (!allFieldsFilled) {
                $('#employee_error').text("Please fill in all required fields in each row.");
            } else {
                $('#employee_error').empty();
                }

                return !endDateError && allFieldsFilled; // Return true if no errors
    }
    function validateEducation() {
        var allFieldsFilled = true;
        var endDateError = false;

        $('.Ed_addrow').each(function(index) {
            var institution = $(this).find('input[name="Ed_institution[]"]').val();
            var degree = $(this).find('input[name="Ed_degree[]"]').val();
            var startDate = $(this).find('input[name="Ed_start_date[]"]').val();
            var endDate = $(this).find('input[name="Ed_end_date[]"]').val(); // Define endDate within the loop
            var city = $(this).find('input[name="Ed_city[]"]').val();
            var state = $(this).find('select[name="Ed_state_id[]"]').val();
            var educationDescriptionId = 'Ed_description_' + index;
            
            // Check if end date is greater than start date
            var startDateObj = new Date(startDate);
            var endDateObj = new Date(endDate);
            if (endDate && startDateObj > endDateObj) {
                $('#eduction_error').text("Start date cannot be greater than end date.");
                endDateError = true;
                return false;
            }
            });

            // Display error messages
            if (endDateError) {
                $('#eduction_error').text("Start date cannot be greater than end date.");
            } else if (!allFieldsFilled) {
                $('#eduction_error').text("Please fill in all required fields in each row.");
            } else {
                $('#eduction_error').empty();
            }

            return !endDateError && allFieldsFilled; // Return true if no errors
    }

    function validateskill() {
        var allFieldsFilled = true;
        $('.skill_addrow').each(function(index) {
            var skill = $(this).find('input[name="skill[]"]').val();
            var level = $(this).find('select[name="level[]"]').val();

               if (!skill) {
                    allFieldsFilled = false;
                    return false;
                }
        });
        if (!allFieldsFilled) {
            $('#skill_error').text("Please fill in all required fields in each row.");
            return false;
        } else {
            $('#skill_error').empty();
        }

        return true;
    }
    function validateInternships() {
        var allFieldsFilled = true;
        var endDateError = false;

        $('.Intn_addrow').each(function(index) {
            var jobTitle = $(this).find('input[name="Is_job_title[]"]').val();
            var company = $(this).find('input[name="Is_company[]"]').val();
            var startDate = $(this).find('input[name="Is_start_date[]"]').val();
            var endDate = $(this).find('input[name="Is_end_date[]"]').val();
            var city = $(this).find('input[name="Is_city[]"]').val();
            var state = $(this).find('select[name="Is_state_id[]"]').val();
            var internshipDescriptionId = 'Is_description_' + index;

            if (typeof CKEDITOR.instances[internshipDescriptionId] !== 'undefined') {
                var description = CKEDITOR.instances[internshipDescriptionId].getData().trim();
                if (!jobTitle || !company || !startDate || !city || !state || !description) {
                    allFieldsFilled = false;
                    return false; // Exit loop early if any required field is empty
                }

                // Convert start and end dates to Date objects for comparison
                var startDateObj = new Date(startDate);
                var endDateObj = new Date(endDate);

                // Check if end date is provided and start date is greater than end date
                if (endDate && startDateObj > endDateObj) {
                    $('#internship_error').text("Start date cannot be greater than end date.");
                    endDateError = true; // Set end date error flag
                    return false; // Exit the loop early
                    }
                } else {
                    console.error("CKEditor instance not found for ID: " + internshipDescriptionId);
                }
            });

            // Display error messages
            if (endDateError) {
                $('#internship_error').text("Start date cannot be greater than end date.");
            } else if (!allFieldsFilled) {
                $('#internship_error').text("Please fill in all required fields in each row.");
            } else {
                $('#internship_error').empty();
            }

            return !endDateError && allFieldsFilled; // Return true if no errors
    }
    function validateCertificate() {
        var allFieldsFilled = true;
        var urlPattern = /^(ftp|http|https):\/\/[^ "]+$/; // Regular expression pattern for URL

        $('.Cer_addrow').each(function(index) {
            var cer_name = $(this).find('input[name="cer_name[]"]').val();
            var organization = $(this).find('input[name="cer_organization[]"]').val();
            var cer_issued_date = $(this).find('input[name="cer_issued_date[]"]').val();
            var cer_url = $(this).find('input[name="cer_url[]"]').val();
            var CertificateDescriptionId = 'cer_description_' + index;
            var Certerrorurl = '#Cert_error_url_' + index; // Corrected variable declaration

            if (typeof CKEDITOR.instances[CertificateDescriptionId] !== 'undefined') {
                var description = CKEDITOR.instances[CertificateDescriptionId].getData().trim();
                if (!cer_name || !organization || !cer_issued_date) {
                    allFieldsFilled = false;
                    return false;
                }
                if (cer_url && !urlPattern.test(cer_url)) { // Check if URL field is not empty and not in proper format
                    $(Certerrorurl).text("URL is not in the proper format.");
                    allFieldsFilled = false;
                    return false;
                } else {
                    $(Certerrorurl).text(''); // Clear the error message if URL is in proper format or empty
                }
            } else {
                console.error("CKEditor instance not found for ID: " + CertificateDescriptionId);
            }
        });
        if (!allFieldsFilled) {
            $('#Cert_error').text("Please fill in all required fields in each row.");
            return false;
        } else {
            $('#Cert_error').empty();
        }

        return true;
    }
    function validateCourses() {
        var allFieldsFilled = true;
        var startDateError = false;
        var endDateError = false;

        $('.Courses_addrow').each(function(index) {
            var institution = $(this).find('input[name="Co_institution[]"]').val();
            var course = $(this).find('input[name="Co_course[]"]').val();
            var startDate = $(this).find('input[name="Co_start_date[]"]').val();
            var endDate = $(this).find('input[name="Co_end_date[]"]').val();

            // Check if any required field is empty
            if (!institution || !course || !startDate) {
                allFieldsFilled = false;
                return false; // Exit the loop early
            }

            // Convert start and end dates to Date objects for comparison
            var startDateObj = new Date(startDate);
            var endDateObj = new Date(endDate);

            // Check if end date is provided and start date is greater than end date
            if (endDate && startDateObj > endDateObj) {
                $('#Courses_error').text("Start date cannot be greater than end date.");
                endDateError = true; // Set end date error flag
                return false; // Exit the loop early
            }
        });

        // Display or hide error message based on error flags
        if (endDateError) {
            $('#Courses_error').text("Start date cannot be greater than end date.");
        } else if (!allFieldsFilled) {
            $('#Courses_error').text("Please fill in all required fields in each row.");
        } else {
            $('#Courses_error').empty();
            }

            return !endDateError && allFieldsFilled; // Return true if no errors
    }
    function validateReferences() {
        var allFieldsFilled = true;
        var phoneRegex = /^\+?1?\s?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression for email format

        $('.Refer_addrow').each(function(index) {
            var referentname = $(this).find('input[name="referent_name[]"]').val();
            var referentcompany = $(this).find('input[name="referent_company[]"]').val();
            var referentemail = $(this).find('input[name="referent_email[]"]').val();
            var referentphonenumber = $(this).find('input[name="referent_phone_number[]"]').val();
            var phonepattern = '#referent_error_phone_' + index;
            var emailpattern = '#referent_error_email_' + index;

            // Check if any field is empty
            if (!referentname || !referentcompany || !referentemail || !referentphonenumber) {
                allFieldsFilled = false;
                return false;
            }

            // Check if email address is in proper format
            if (!referentemail.match(emailRegex)) {
                $(emailpattern).text("Please enter a valid email address.");
                allFieldsFilled = false;
                return false;
            } else {
                $(emailpattern).text('');
            }

            // Check if phone number matches US format
            if (!referentphonenumber.match(phoneRegex)) {
                $(phonepattern).text("Please enter a valid US phone number.");
                allFieldsFilled = false;
                return false;
            } else {
                $(phonepattern).text('');
            }
        });

        // Display error message if any required field is empty
        if (!allFieldsFilled) {
            $('#Refer_error').text("Please fill in all required fields in each row.");
            return false;
        } else {
            $('#Refer_error').empty();
        }

        return true;
    }

    function validateLinks() {
        var allFieldsFilled = true;
        var urlPattern = /^(ftp|http|https):\/\/[^ "]+$/; // Regular expression pattern for URL

        $('.links_addrow').each(function(index) {
            var linktitle = $(this).find('input[name="link_title[]"]').val();
            var linkurl = $(this).find('input[name="url[]"]').val();
            var linkerrorurl = '#link_error_url_' + index; 
                if (!linktitle || !linkurl) {
                    allFieldsFilled = false;
                    return false;
                }
                if (!urlPattern.test(linkurl)) {
                    $(linkerrorurl).text("URL is not in the proper format."); // Corrected usage to select by ID
                    allFieldsFilled = false;
                    return false;
                }else{
                    $(linkerrorurl).text('');
                }
        });
        if (!allFieldsFilled) {
            $('#links_error').text("Please fill in all required fields in each row.");
                return false;
            } else {
                $('#links_error').empty();
            }

            return true;
    }
    function validateLanguages() {
        var allFieldsFilled = true;
        $('.Languages_addrow').each(function(index) {
            var language = $(this).find('input[name="language[]"]').val();
            var proficiency = $(this).find('select[name="proficiency[]"]').val();

               if (!language) {
                    allFieldsFilled = false;
                    return false;
                }
        });
        if (!allFieldsFilled) {
            $('#Languages_error').text("Please fill in all required fields in each row.");
            return false;
        } else {
            $('#Languages_error').empty();
        }

        return true;
    }
    function validateHobbies() {
        var maxCharacters = 255;
        if (!CKEDITOR.instances.Hobbies) {
            $('#Hobbies_error').text("CKEditor instance not initialized for Hobbies.");
            return false;
        }
        var summaryContent = CKEDITOR.instances.Hobbies.getData().trim();
        // if (!summaryContent) {
        //     $('#Hobbies_error').text("The Hobbies field is required.");
        //     return false;
        // }
        if (summaryContent.length > maxCharacters) {
            $('#Hobbies_error').text("The Hobbies must not be greater than 255 characters.");
            return false;
        }
        $('#Hobbies_error').text('');
        
        return true;
    }
    function validateCustomsection() {
        var allFieldsFilled = true;
        $('.custom_addrow').each(function(index) {
            var header = $(this).find('input[name="header[]"]').val();
            var sub_header = $(this).find('input[name="sub_header[]"]').val();
            var customDescriptionId = 'custom_description_'+index;

            if (typeof CKEDITOR.instances[customDescriptionId] !== 'undefined') {
                var description = CKEDITOR.instances[customDescriptionId].getData().trim();
                if (!header || !sub_header || !description) {
                    allFieldsFilled = false;
                    return false;
                }
            } else {
                console.error("CKEditor instance not found for ID: " + customDescriptionId);
            }
        });
        if (!allFieldsFilled) {
            $('#custom_error').text("Please fill in all required fields in each row.");
            return false;
        } else {
            $('#custom_error').empty();
        }

        return true;
    }
    $('#multiplereset').click(function() {
        $('#userForm')[0].reset();
        if (typeof CKEDITOR !== 'undefined' && CKEDITOR.instances) {
            for (const instance in CKEDITOR.instances) {
                CKEDITOR.instances[instance].setData('');
            }
        }
    });
</script>       
@endsection 