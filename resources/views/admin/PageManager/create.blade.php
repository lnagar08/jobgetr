@extends('layouts.admin')
@section('title', 'Page Manager')
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="page-header d-flex justify-content-between">
            <div class="page-title">
                <h3>Page Manager</h3>
            </div>
        </div>
        <div class="account-settings-container layout-top-spacing">
            <div class="general-info section general-infomain">
                @if (Session::has('success'))
                <div class="alert alert-success mt-2 mb-2 successMessage">
                    {{ Session::get('success') }}
                </div>
                @endif
                <label>Pages</label>
                <select class="placeholder js-states form-control" onchange="detailed(value)">
                    <option @if(@Session::get('pageName') == "AboutUs") selected @elseif(@Session::get('pageName') == "null" || @Session::get('pageName') == '' ) selected @endif value="AboutUs">About Us</option>
                    <option @if(@Session::get('pageName') == "ContactUs") selected @endif value="ContactUs">Contact Us</option>
                    <option @if(@Session::get('pageName') == "FAQ") selected @endif value="FAQ">FAQ</option>
                    <option @if(@Session::get('pageName') == "TermsofUse") selected @endif value="TermsofUse">Terms Of Use</option>
                    <option @if(@Session::get('pageName') == "privacypolicy") selected @endif value="privacypolicy">Privacy Policy</option>
                </select>
                <form method="post" id="userForm" action="{{ route('pageManager.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="account-content mt-2 mb-2">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="AboutUs" class="section general-info" @if(@Session::get('pageName') == "AboutUs") style="display: block;" @elseif(@Session::get('pageName') == "null" || @Session::get('pageName') == '' ) style="display: block;" @else style="display: none;" @endif >
                                        <div class="info">
                                            <div class="row">
                                                <input type="hidden" name="aboutus_id" id="aboutus_id" @if($AboutUs && $AboutUs->id) value="{{$AboutUs->id}}" @endif>
                                                <div class="col-lg-11">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name_about_us" id="name_about_us" @if($AboutUs && $AboutUs->name) value="{{$AboutUs->name}}" @endif class="form-control" placeholder="Page name">
                                                        <span id="name_about_us_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="form-group">
                                                        <label>Status</label><br>
                                                        <label class="switch @if($AboutUs && $AboutUs->status == 1) s-danger @else s-success @endif mr-2 mt-3">
                                                            <input type="checkbox" name="status_about_us" id="status_about_us_checkbox" @if($AboutUs && $AboutUs->status == 1) checked @endif>
                                                            <span class="slider" id="status_slider_about_us"></span>
                                                        </label>
                                                        <span id="name_about_us_error" class="text-danger"></span>
                                                        <input type="hidden" name="status_about_us" id="status_about_us" value="0">
                                                    </div>
                                                </div>                                                
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Content</label>
                                                        <textarea name="content_about_us" id="content_about_us" class="form-control summernote"> @if($AboutUs && $AboutUs->content) {!! $AboutUs->content !!} @endif</textarea>
                                                        <span id="content_about_us_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="ContactUs" class="section general-info" @if(@Session::get('pageName') == "ContactUs") style="display: block;" @else style="display: none;" @endif>
                                        <div class="info">
                                            <div class="row">
                                                <input type="hidden" name="ContactUs_id" id="ContactUs_id" @if($ContactUs && $ContactUs->id) value="{{$ContactUs->id}}" @endif>
                                                <div class="col-lg-11">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name_contact_us" id="name_contact_us" @if($ContactUs && $ContactUs->name) value="{{$ContactUs->name}}" @endif  class="form-control" placeholder="Page name">
                                                        <span id="name_contact_us_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="form-group">
                                                        <label>Status</label><br>
                                                        <label class="switch @if($ContactUs && $ContactUs->status == 1) s-danger @else s-success @endif mr-2 mt-3">
                                                            <input type="checkbox" name="status_contact_us" id="status_contact_us_checkbox" @if($ContactUs && $ContactUs->status == 1) checked @endif>
                                                            <span class="slider" id="status_slider_contact_us"></span>
                                                        </label>
                                                        <span id="name_contact_us_error" class="text-danger"></span>
                                                        <input type="hidden" name="status_contact_us" id="status_contact_us" value="0">
                                                    </div>
                                                </div>   
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Content</label>
                                                        <textarea name="content_contact_us" id="content_contact_us" class="form-control summernote">@if($ContactUs && $ContactUs->content) {!! $ContactUs->content !!} @endif</textarea>
                                                        <span id="content_contact_us_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="FAQ" class="section general-info" @if(@Session::get('pageName') == "FAQ") style="display: block;" @else style="display: none;" @endif>
                                        <div class="info">
                                            <div class="row">
                                                <input type="hidden" name="FAQ_id" id="FAQ_id" @if($FAQ && $FAQ->id) value="{{$FAQ->id}}" @endif>
                                                <div class="col-lg-11">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name_FAQ" id="name_FAQ" @if($FAQ && $FAQ->name) value="{{$FAQ->name}}" @endif  class="form-control" placeholder="Page name">
                                                        <span id="name_FAQ_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="form-group">
                                                        <label>Status</label><br>
                                                        <label class="switch @if($FAQ && $FAQ->status == 1) s-danger @else s-success @endif mr-2 mt-3">
                                                            <input type="checkbox" name="status_FAQ" id="status_FAQ_checkbox" @if($FAQ && $FAQ->status == 1) checked @endif>
                                                            <span class="slider" id="status_slider_FAQ"></span>
                                                        </label>
                                                        <span id="name_FAQ_error" class="text-danger"></span>
                                                        <input type="hidden" name="status_FAQ" id="status_FAQ" value="0">
                                                    </div>
                                                </div>   
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Content</label>
                                                        <textarea name="content_FAQ" id="content_FAQ" class="form-control summernote">@if($FAQ && $FAQ->content) {!! $FAQ->content !!} @endif</textarea>
                                                        <span id="content_FAQ_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="TermsofUse" class="section general-info" @if(@Session::get('pageName') == "TermsofUse") style="display: block;" @else style="display: none;" @endif>
                                        <div class="info">
                                            <div class="row">
                                                <input type="hidden" name="TermsofUse_id" id="TermsofUse_id" @if($TermsofUse && $TermsofUse->id) value="{{$TermsofUse->id}}" @endif>
                                                <div class="col-lg-11">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name_TermsofUse" id="name_TermsofUse" @if($TermsofUse && $TermsofUse->name) value="{{$TermsofUse->name}}" @endif  class="form-control" placeholder="Page name">
                                                        <span id="name_TermsofUse_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="form-group">
                                                        <label>Status</label><br>
                                                        <label class="switch @if($TermsofUse && $TermsofUse->status == 1) s-danger @else s-success @endif mr-2 mt-3">
                                                            <input type="checkbox" name="status_TermsofUse" id="status_TermsofUse_checkbox" @if($TermsofUse && $TermsofUse->status == 1) checked @endif>
                                                            <span class="slider" id="status_slider_TermsofUse"></span>
                                                        </label>
                                                        <span id="name_TermsofUse_error" class="text-danger"></span>
                                                        <input type="hidden" name="status_TermsofUse" id="status_TermsofUse" value="0">
                                                    </div>
                                                </div>   
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Content</label>
                                                        <textarea name="content_TermsofUse" id="content_TermsofUse" class="form-control summernote">@if($TermsofUse && $TermsofUse->content) {!! $TermsofUse->content !!} @endif</textarea>
                                                        <span id="content_TermsofUse_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="privacypolicy" class="section general-info" @if(@Session::get('pageName') == "privacypolicy") style="display: block;" @else style="display: none;" @endif>
                                        <div class="info">
                                            <div class="row">
                                                <input type="hidden" name="privacypolicy_id" id="privacypolicy_id" @if($privacypolicy && $privacypolicy->id) value="{{$privacypolicy->id}}" @endif>
                                                <div class="col-lg-11">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" name="name_privacypolicy" id="name_privacypolicy" @if($privacypolicy && $privacypolicy->name) value="{{$privacypolicy->name}}" @endif  class="form-control" placeholder="Page name">
                                                        <span id="name_privacypolicy_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-1">
                                                    <div class="form-group">
                                                        <label>Status</label><br>
                                                        <label class="switch @if($privacypolicy && $privacypolicy->status == 1) s-danger @else s-success @endif mr-2 mt-3">
                                                            <input type="checkbox" name="status_privacypolicy" id="status_privacypolicy_checkbox" @if($privacypolicy && $privacypolicy->status == 1) checked @endif>
                                                            <span class="slider" id="status_slider_privacypolicy"></span>
                                                        </label>
                                                        <span id="name_privacypolicy_error" class="text-danger"></span>
                                                        <input type="hidden" name="status_privacypolicy" id="status_privacypolicy" value="0">
                                                    </div>
                                                </div>   
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Content</label>
                                                        <textarea name="content_privacypolicy" id="content_privacypolicy" class="form-control summernote">@if($privacypolicy && $privacypolicy->content) {!! $privacypolicy->content !!} @endif</textarea>
                                                        <span id="content_privacypolicy_error" class="text-danger"></span>
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
                            <input type="hidden" name="btnNaId" @if(Session::has('pageName') && Session::get('pageName') != '') value="{{ Session::get('pageName') }}" @else value="AboutUs" @endif id="btnNaId">
                            <button onclick="saveChanges()" type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
 $('#content_about_us').summernote({
        placeholder: 'Content...',
        tabsize: 2,
        height: 350
      });
      $('#content_contact_us').summernote({
        placeholder: 'Content...    ',
        tabsize: 2,
        height: 350
      });
      $('#content_FAQ').summernote({
        placeholder: 'Content...    ',
        tabsize: 2,
        height: 350
      });
      $('#content_TermsofUse').summernote({
        placeholder: 'Content...    ',
        tabsize: 2,
        height: 350
      });
      $('#content_privacypolicy').summernote({
        placeholder: 'Content...    ',
        tabsize: 2,
        height: 350
      });
</script>

<script>
    $(document).ready(function () {
        $(".placeholder").select2({
            placeholder: "Make a Selection",
            allowClear: true
        });
        $('#status_about_us_checkbox').change(function() {
            var isChecked = $(this).prop('checked');
            if (isChecked) {
                $('#status_about_us').val('1');
                $('#status_slider_about_us').closest('.switch').removeClass('s-success').addClass('s-danger');
            } else {
                $('#status_about_us').val('0');
                $('#status_slider_about_us').closest('.switch').removeClass('s-danger').addClass('s-success');
            }
        });
        $('#status_contact_us_checkbox').change(function() {
            var isChecked = $(this).prop('checked');
            if (isChecked) {
                $('#status_contact_us').val('1');
                $('#status_slider_contact_us').closest('.switch').removeClass('s-success').addClass('s-danger');
            } else {
                $('#status_contact_us').val('0');
                $('#status_slider_contact_us').closest('.switch').removeClass('s-danger').addClass('s-success');
            }
        });
        $('#status_FAQ_checkbox').change(function() {
            var isChecked = $(this).prop('checked');
            if (isChecked) {
                $('#status_FAQ').val('1');
                $('#status_slider_FAQ').closest('.switch').removeClass('s-success').addClass('s-danger');
            } else {
                $('#status_FAQ').val('0');
                $('#status_slider_FAQ').closest('.switch').removeClass('s-danger').addClass('s-success');
            }
        });
        $('#status_TermsofUse_checkbox').change(function() {
            var isChecked = $(this).prop('checked');
            if (isChecked) {
                $('#status_TermsofUse').val('1');
                $('#status_slider_TermsofUse').closest('.switch').removeClass('s-success').addClass('s-danger');
            } else {
                $('#status_TermsofUse').val('0');
                $('#status_slider_TermsofUse').closest('.switch').removeClass('s-danger').addClass('s-success');
            }
        });
        $('#status_privacypolicy_checkbox').change(function() {
            var isChecked = $(this).prop('checked');
            if (isChecked) {
                $('#status_privacypolicy').val('1');
                $('#status_slider_privacypolicy').closest('.switch').removeClass('s-success').addClass('s-danger');
            } else {
                $('#status_privacypolicy').val('0');
                $('#status_slider_privacypolicy').closest('.switch').removeClass('s-danger').addClass('s-success');
            }
        });
    });

    function detailed(value) {
        var currentValue = $('#btnNaId').val();
        
        switch (currentValue) {
            case "AboutUs":
                if (!validateAboutUs()) return;
                break;
            case "ContactUs":
                if (!validateContactUs()) return;
                break;
            case "FAQ":
                if (!validateFAQ()) return;
                break;
            case "TermsofUse":
                if (!validateTermsofUse()) return;
                break;
            case "privacypolicy":
                if (!validateprivacypolicy()) return;
                break;
        }

        $('#btnNaId').val(value);
        hideAllSectionsExcept(value);
    }

    function saveChanges() {
        var currentValue = $('#btnNaId').val();

        switch (currentValue) {
            case "AboutUs":
                if (!validateAboutUs()) return;
                break;
            case "ContactUs":
                if (!validateContactUs()) return;
                break;
            case "FAQ":
                if (!validateFAQ()) return;
                break;
            case "TermsofUse":
                if (!validateTermsofUse()) return;
                break;
            case "privacypolicy":
                if (!validateprivacypolicy()) return;
                break;
        }
        $('#userForm').submit();
    }

    function hideAllSectionsExcept(sectionId) {
        var allSections = ['AboutUs', 'ContactUs' ,'FAQ' ,'TermsofUse' ,'privacypolicy'];
        
        for (var i = 0; i < allSections.length; i++) {
            var section = $('#' + allSections[i]);
            if (allSections[i] === sectionId) {
                section.show(500);
            } else {
                section.hide(500);
            }
        }
    }

    function validateContactUs() {
        var isValid = true;
        return isValid;
    }

    function validateAboutUs() {
        var isValid = true;
        return isValid;
    }
    function validateFAQ() {
        var isValid = true;
        return isValid;
    }
    function validateTermsofUse() {
        var isValid = true;
        return isValid;
    }
    function validateprivacypolicy() {
        var isValid = true;
        return isValid;
    }

    $('#multiplereset').click(function () {
        $('#userForm')[0].reset();
    });
</script>
@endsection
