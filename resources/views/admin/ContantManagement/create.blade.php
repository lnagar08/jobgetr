@extends('layouts.admin')
@section('title', 'Contant Management')
@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
                    <div class="page-header d-flex justify-content-between">
                        <div class="page-title">
                            <h3>Interface Content Manager</h3>
                        </div>
                    </div>
                    <div class="account-settings-container layout-top-spacing">
                        <div class="general-info section general-infomain">
                             @if (Session::has('success'))
                              <div class="alert alert-success mt-2 mb-2 successMessage">
                                      {{ Session::get('success') }}
                              </div>
                          @endif
                          <label for="Sections">Sections Interface Content</label>
                          <select class="placeholder js-states form-control" onchange="Detailed(value)">
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
                            <option @if(@Session::get('SectionNmae') == "AdditionalSection") selected @endif value="AdditionalSection">Additional Section</option>
                        </select>
                    <form method="post" id="userForm" action="{{route('contant-management.store')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $CManage ? $CManage->id : '' }}">
                        <div class="account-content mt-2 mb-2">
                            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <div id="PersonalDetails" class="section general-info" @if(@Session::get('SectionNmae') == "PersonalDetails") style="display: block;" @elseif(@Session::get('SectionNmae') == "null" || @Session::get('SectionNmae') == '' ) style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                        <h4>Personal Details</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea name="personal_details" id="personal_details" class="form-control" placeholder="Personal Details">{{ $CManage ? $CManage->personal_details : '' }}</textarea>
                                                            <span id="personal_details_error" class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> 
                                        <div id="ContactInformation" class="section general-info" @if(@Session::get('SectionNmae') == "ContactInformation") style="display: block;" @else style="display: none;" @endif>
                                            <div class="info">
                                                <div class="user-management-title">
                                                    <h4>Contact information</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 mx-auto">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                        <textarea name="contact_information" id="contact_information" class="form-control" placeholder="Contact Information">{{ $CManage ? $CManage->contact_information : '' }}</textarea>
                                                        <span id="contact_information_error" class="text-danger"></span>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="ProfessionalSummary" class="section general-info"   @if(@Session::get('SectionNmae') == "ProfessionalSummary") style="display: block;" @else style="display: none;" @endif>
                                            <div class="info">
                                                <div class="user-management-title">
                                                    <h4>Professional Summary</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 mx-auto">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                        <textarea name="professional_summary" id="professional_summary" class="form-control" placeholder="Professional Summary">{{ $CManage ? $CManage->professional_summary : '' }}</textarea>
                                                        <span id="professional_summary_error" class="text-danger"></span>
                                                         </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div id="EmploymentHistory" class="section general-info"  @if(@Session::get('SectionNmae') == "EmploymentHistory") style="display: block;" @else style="display: none;" @endif> 
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Employment History</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                            <textarea name="employment_history" id="employment_history" class="form-control" placeholder="Employment History">{{ $CManage ? $CManage->employment_history : '' }}</textarea>
                                                            <span id="employment_history_error" class="text-danger"></span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="Education" class="section general-info"  @if(@Session::get('SectionNmae') == "Education") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Education</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                            <textarea name="education" id="education" class="form-control" placeholder="Education">{{ $CManage ? $CManage->education : '' }}</textarea>
                                                            <span id="education_error" class="text-danger"></span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>  
                                        <div id="Skills" class="section general-info"  @if(@Session::get('SectionNmae') == "Skills") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Skills</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                            <textarea name="skills" id="skills" class="form-control" placeholder="Skills">{{ $CManage ? $CManage->skills : '' }}</textarea>
                                                            <span id="skills_error" class="text-danger"></span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="Internships" class="section general-info"  @if(@Session::get('SectionNmae') == "Internships") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Internships</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="form-group">
                                                                <label>Description </label>
                                                            <textarea name="internships" id="internships" class="form-control" placeholder="Internships">{{ $CManage ? $CManage->internships : '' }}</textarea>
                                                            <span id="internships_error" class="text-danger"></span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> 
                                        <div id="Certificate" class="section general-info"  @if(@Session::get('SectionNmae') == "Certificate") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                  <div class="user-management-title">
                                                         <h4>Certificate</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                            <textarea name="certificate" id="certificate" class="form-control" placeholder="Certificate">{{ $CManage ? $CManage->certificate : '' }}</textarea>
                                                            <span id="certificate_error" class="text-danger"></span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                        <div id="Courses" class="section general-info"  @if(@Session::get('SectionNmae') == "Courses") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Courses</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                            <textarea name="courses" id="courses" class="form-control" placeholder="Courses">{{ $CManage ? $CManage->courses : '' }}</textarea>
                                                            <span id="courses_error" class="text-danger"></span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div id="References" class="section general-info"  @if(@Session::get('SectionNmae') == "References") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>References</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                            <textarea name="references" id="references" class="form-control" placeholder="References">{{ $CManage ? $CManage->references : '' }}</textarea>
                                                            <span id="references_error" class="text-danger"></span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div> 
                                        <div id="Links" class="section general-info"  @if(@Session::get('SectionNmae') == "Links") style="display: block;" @else style="display: none;" @endif>
                                                <div class="info">
                                                    <div class="user-management-title">
                                                         <h4>Links</h4>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12 mx-auto">
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                            <textarea name="links" id="links" class="form-control" placeholder="Links">{{ $CManage ? $CManage->links : '' }}</textarea>
                                                            <span id="links_error" class="text-danger"></span>
                                                             </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div id="Languages" class="section general-info"  @if(@Session::get('SectionNmae') == "Languages") style="display: block;" @else style="display: none;" @endif>
                                            <div class="info">
                                                <div class="user-management-title">
                                                    <h4>Languages</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 mx-auto">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                        <textarea name="languages" id="languages" class="form-control" placeholder="Languages">{{ $CManage ? $CManage->languages : '' }}</textarea>
                                                        <span id="languages_error" class="text-danger"></span>
                                                         </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="Hobbies" class="section general-info"  @if(@Session::get('SectionNmae') == "Hobbies") style="display: block;" @else style="display: none;" @endif>
                                            <div class="info">
                                                <div class="user-management-title">
                                                    <h4>Hobbies</h4>
                                                    <p>Showcase your passion and highlight your achievements, such as special projects completed, unique skills developed, or notable experiences gained.</p>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                        <textarea name="hobbies" id="hobbies" class="form-control" placeholder="Hobbies">{{ $CManage ? $CManage->hobbies : '' }}</textarea>
                                                        <span id="hobbies_error" class="text-danger"></span>
                                                         </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                        <div id="Customsection" class="section general-info" @if(@Session::get('SectionNmae') == "Customsection") style="display: block;" @else style="display: none;" @endif>
                                            <div class="info">
                                                <div class="user-management-title">
                                                    <h4>Custom section</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 mx-auto">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                        <textarea name="custom_section" id="custom_section" class="form-control" placeholder="Custom Section">{{ $CManage ? $CManage->custom_section : '' }}</textarea>
                                                        <span id="custom_section_error" class="text-danger"></span>
                                                    </div>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="AdditionalSection" class="section general-info"  @if(@Session::get('SectionNmae') == "AdditionalSection") style="display: block;" @else style="display: none;" @endif>
                                            <div class="info">
                                                <div class="user-management-title">
                                                    <h4>Additional Section</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 mx-auto">
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                        <textarea name="additional_section" id="additional_section" class="form-control" placeholder="Additional Section">{{ $CManage ? $CManage->additional_section : '' }}</textarea>
                                                        <span id="additional_section_error" class="text-danger"></span>
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
                                <input type="hidden" name="{{ $CManage && $CManage->id ? 'currentsection' : '' }}" id="btnNaId" @if(Session::has('SectionNmae') && Session::get('SectionNmae') != '') value="{{ Session::get('SectionNmae') }}" @else value="PersonalDetails" @endif>
                                <button onclick="SaveChanges()" type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                    </div>
    </div>
 </div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
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
            case "AdditionalSection":
                if (!validateAdditionalSection()) return;
                break;
        }

        // Update btnNaId value and hide sections
        $('#btnNaId').val(value);
        hideAllSectionsExcept(value);
    }

    function SaveChanges() {
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
            case "AdditionalSection":
                if (!validateAdditionalSection()) return;
                break;
        }
        $('#userForm').submit();
    }

    function validatePersonalDetails() {
        var isValid = true;
        var personaldetail = $('#personal_details').val().trim();
        if (!personaldetail) {
            $('#personal_details').addClass('is-invalid');
            $('#personal_details_error').text('Personal Details is a required field!');
            return false;
        } else {
            $('#personal_details').removeClass('is-invalid');
            $('#personal_details_error').text('');
        }
        return isValid;
    }

    function validateContactInformation() {
        var isValid = true;
        var contactinformation = $('#contact_information').val().trim();
        if (!contactinformation) {
            $('#contact_information').addClass('is-invalid');
            $('#contact_information_error').text('Contact Information is a required field!');
            return false;
        } else {
            $('#contact_information').removeClass('is-invalid');
            $('#contact_information_error').text('');
            return true;
        }
        return isValid;
    }

    function validateProfessionalSummary() {
        var isValid = true;
        var professionalSummary = $('#professional_summary').val().trim();
        if (!professionalSummary) {
            $('#professional_summary').addClass('is-invalid');
            $('#professional_summary_error').text('Professional Summary is a required field!');
            return false;
        } else {
            $('#professional_summary').removeClass('is-invalid');
            $('#professional_summary_error').text('');
        }
        return isValid;
    }

    function validateEmploymentHistory() {
        var employmentHistory = $('#employment_history').val().trim();
        if (!employmentHistory) {
            $('#employment_history').addClass('is-invalid');
            $('#employment_history_error').text('Employment History is a required field!');
            return false;
        } else {
            $('#employment_history').removeClass('is-invalid');
            $('#employment_history_error').text('');
            return true;
        }
    }

    function validateEducation() {
        var education = $('#education').val().trim();
        if (!education) {
            $('#education').addClass('is-invalid');
            $('#education_error').text('Education is a required field!');
            return false;
        } else {
            $('#education').removeClass('is-invalid');
            $('#education_error').text('');
            return true;
        }
    }

    function validateskill() {
        var skill = $('#skills').val().trim();
        if (!skill) {
            $('#skills').addClass('is-invalid');
            $('#skills_error').text('Skill is a required field!');
            return false;
        } else {
            $('#skills').removeClass('is-invalid');
            $('#skills_error').text('');
            return true;
        }
    }
    function validateInternships() {
        var internship = $('#internships').val().trim();
        if (!internship) {
            $('#internships').addClass('is-invalid');
            $('#internships_error').text('Internships is a required field!');
            return false;
        } else {
            $('#internships').removeClass('is-invalid');
            $('#internships_error').text('');
            return true;
        }
    }

    function validateCertificate() {
        var certificate = $('#certificate').val().trim();
        if (!certificate) {
            $('#certificate').addClass('is-invalid');
            $('#certificate_error').text('Certificate is a required field!');
            return false;
        } else {
            $('#certificate').removeClass('is-invalid');
            $('#certificate_error').text('');
            return true;
        }
    }

    function validateCourses() {
        var courses = $('#courses').val().trim();
        if (!courses) {
            $('#courses').addClass('is-invalid');
            $('#courses_error').text('Courses is a required field!');
            return false;
        } else {
            $('#courses').removeClass('is-invalid');
            $('#courses_error').text('');
            return true;
        }
    }

    function validateReferences() {
        var references = $('#references').val().trim();
        if (!references) {
            $('#references').addClass('is-invalid');
            $('#references_error').text('References is a required field!');
            return false;
        } else {
            $('#references').removeClass('is-invalid');
            $('#references_error').text('');
            return true;
        }
    }

    function validateLinks() {
        var links = $('#links').val().trim();
        if (!links) {
            $('#links').addClass('is-invalid');
            $('#links_error').text('Links is a required field!');
            return false;
        } else {
            $('#links').removeClass('is-invalid');
            $('#links_error').text('');
            return true;
        }
    }

    function validateLanguages() {
        var languages = $('#languages').val().trim();
        if (!languages) {
            $('#languages').addClass('is-invalid');
            $('#languages_error').text('Languages is a required field!');
            return false;
        } else {
            $('#languages').removeClass('is-invalid');
            $('#languages_error').text('');
            return true;
        }
    }

    function validateHobbies() {
        var hobbies = $('#hobbies').val().trim();
        if (!hobbies) {
            $('#hobbies').addClass('is-invalid');
            $('#hobbies_error').text('Hobbies is a required field!');
            return false;
        } else {
            $('#hobbies').removeClass('is-invalid');
            $('#hobbies_error').text('');
            return true;
        }
    }

    function validateCustomsection() {
        var customsection = $('#custom_section').val().trim();
        if (!customsection) {
            $('#custom_section').addClass('is-invalid');
            $('#custom_section_error').text('Custom Section is a required field!');
            return false;
        } else {
            $('#custom_section').removeClass('is-invalid');
            $('#custom_section_error').text('');
            return true;
        }
    }
    
    function validateAdditionalSection() {
        var AdditionalSection = $('#additional_section').val().trim();
        if (!AdditionalSection) {
            $('#additional_section').addClass('is-invalid');
            $('#additional_section_error').text('Additional Section is a required field!');
            return false;
        } else {
            $('#additional_section').removeClass('is-invalid');
            $('#additional_section_error').text('');
            return true;
        }
    }

    
    function hideAllSectionsExcept(sectionId) {
        var allSections = ['PersonalDetails','ContactInformation', 'ProfessionalSummary', 'EmploymentHistory', 'Education', 'Skills', 'Internships', 'Certificate', 'Courses', 'References', 'Links', 'Languages', 'Hobbies', 'Customsection', 'AdditionalSection'];
        
        for (var i = 0; i < allSections.length; i++) {
            var section = $('#' + allSections[i]);
            if (allSections[i] === sectionId) {
                section.show(500);
            } else {
                section.hide(500);
            }
        }
    }


    $('#multiplereset').click(function () {
        $('#userForm')[0].reset();
    });
</script>   
@endsection 