@extends('layouts.admin')
@section('title', 'Settings')
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
                <h3>Settings</h3>
            </div>
        </div>
        <div class="account-settings-container layout-top-spacing">
            <div class="general-info section general-infomain">
                @if (Session::has('success'))
                <div class="alert alert-success mt-2 mb-2 successMessage">
                    {{ Session::get('success') }}
                </div>
                @endif
                <label>Page Settings</label>
                <select class="placeholder js-states form-control" onchange="detailed(value)">
                    <option @if(@Session::get('settingName') == "UserProfile") selected @elseif(@Session::get('settingName') == "null" || @Session::get('settingName') == '' ) selected @endif value="UserProfile">Profile Setting</option>
                    <!--<option @if(@Session::get('settingName') == "PriceInterview") selected @endif value="PriceInterview">Price for new video interview</option>-->
                    {{-- <option value="SecondSection">Second Section</option> --}}
                </select>
                <form method="post" id="userForm" action="{{ route('settings.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="account-content mt-2 mb-2">
                        <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="UserProfile" class="section general-info" @if(@Session::get('settingName') == "UserProfile") style="display: block;" @elseif(@Session::get('settingName') == "null" || @Session::get('settingName') == '' ) style="display: block;" @else style="display: none;" @endif>
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Youtube video url</label>
                                                        <input type="text" name="youtube_video_url" id="youtube_video_url" class="form-control" @if($youtube_video_url && $youtube_video_url->value) value="{{ $youtube_video_url->value }}" @endif placeholder="YouTube video url">
                                                        <span id="youtube_video_url_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Youtube Description</label>
                                                        <textarea name="youtube_video_description" id="youtube_video_description" class="form-control summernote">@if($youtube_video_description && $youtube_video_description->value) {!! $youtube_video_description->value !!} @endif</textarea>
                                                        <span id="youtube_video_description_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Profile Text Block</label>
                                                        <textarea name="profile_text_block" id="profile_text_block" class="form-control summernote">@if($profile_text_block && $profile_text_block->value) {!! $profile_text_block->value !!} @endif</textarea>
                                                        <span id="profile_text_block_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="PriceInterview" class="section general-info" style="@if(Session::get('settingName') == 'PriceInterview') display: block; @else display: none; @endif">
                                        <div class="info">
                                            <div class="user-management-title">
                                                <h4>Price for new video interview</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>For 1 Interview Price</label>
                                                        <input type="number" name="interview_price_1" id="interview_price_1" class="form-control" @if($interview_price_1 && $interview_price_1->value) value="{{ $interview_price_1->value }}" @endif placeholder="Price for 1 interview price">
                                                        <span id="interview_price_1_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>For 5 Interview Price</label>
                                                        <input type="number" name="interview_price_5" id="interview_price_5" class="form-control" @if($interview_price_5 && $interview_price_5->value) value="{{ $interview_price_5->value }}" @endif placeholder="Price for 5 interview price">
                                                        <span id="interview_price_5_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label>For 10 Interview Price</label> 
                                                        <input type="number" name="interview_price_10" id="interview_price_10" class="form-control" @if($interview_price_10 && $interview_price_10->value) value="{{ $interview_price_10->value }}" @endif placeholder="Price for 10 interview price">
                                                        <span id="interview_price_10_error" class="text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div id="SecondSection" class="section general-info" style="@if(Session::get('settingName') == 'SecondSection') display: block; @else display: none; @endif">
                                        <div class="info">
                                            <div class="user-management-title">
                                                <h4>Second Section</h4>
                                            </div>
                                            <div class="row">
                                                <h1>Second Section</h1>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-settings-footer">
                        <div class="as-footer-container">
                            <button type="button" id="multiplereset" class="btn btn-warning">Reset All</button>
                            <input type="hidden" name="btnNaId" id="btnNaId" @if(Session::has('settingName') && Session::get('settingName') != '') value="{{ Session::get('settingName') }}" @else value="UserProfile" @endif >
                            <button onclick="saveChanges()" type="button" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
 $('#youtube_video_description').summernote({
        placeholder: 'Youtube video description',
        tabsize: 2,
        height: 350
      });
      $('#profile_text_block').summernote({
        placeholder: 'Profile Text Block',
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
    });

    function detailed(value) {
        var currentValue = $('#btnNaId').val();
        
        switch (currentValue) {
            case "UserProfile":
                if (!validateUserProfile()) return;
                break;
            case "PriceInterview":
                if (!validatePriceInterview()) return;
                break;
            case "SecondSection":
                if (!validateSecondSection()) return;
                break;
        }

        $('#btnNaId').val(value);
        hideAllSectionsExcept(value);
    }

    function saveChanges() {
        var currentValue = $('#btnNaId').val();

        switch (currentValue) {
            case "UserProfile":
                if (!validateUserProfile()) return;
                break;
            case "PriceInterview":
                if (!validatePriceInterview()) return;
                break;
            case "SecondSection":
                if (!validateSecondSection()) return;
                break;
        }
        $('#userForm').submit();
    }

    function hideAllSectionsExcept(sectionId) {
        var allSections = ['UserProfile','PriceInterview','SecondSection'];
        
        for (var i = 0; i < allSections.length; i++) {
            var section = $('#' + allSections[i]);
            if (allSections[i] === sectionId) {
                section.show(500);
            } else {
                section.hide(500);
            }
        }
    }

    function validateSecondSection() {
        var isValid = true;
        return isValid;
    }
    function validatePriceInterview() {
        var isValid = true;
        var interviewprice1 = $('#interview_price_1').val();
        var interviewprice5 = $('#interview_price_5').val();
        var interviewprice10 = $('#interview_price_10').val();
        
        // Check if interview price is not empty
        if (interviewprice1.trim() === '') {
            $('#interview_price_1_error').text('Please enter price');
            isValid = false;
        } else {
            // Check if interview price is a valid number
            var priceValue = parseFloat(interviewprice1);
            if (isNaN(priceValue) || priceValue <= 0) {
                $('#interview_price_1_error').text('Please enter a valid price');
                isValid = false;
            } else {
                $('#interview_price_1_error').text('');
            }
        }
        if (interviewprice5.trim() === '') {
            $('#interview_price_5_error').text('Please enter price');
            isValid = false;
        } else {
            // Check if interview price is a valid number
            var priceValue = parseFloat(interviewprice5);
            if (isNaN(priceValue) || priceValue <= 0) {
                $('#interview_price_5_error').text('Please enter a valid price');
                isValid = false;
            } else {
                $('#interview_price_5_error').text('');
            }
        }
        if (interviewprice10.trim() === '') {
            $('#interview_price_10_error').text('Please enter price');
            isValid = false;
        } else {
            // Check if interview price is a valid number
            var priceValue = parseFloat(interviewprice10);
            if (isNaN(priceValue) || priceValue <= 0) {
                $('#interview_price_10_error').text('Please enter a valid price');
                isValid = false;
            } else {
                $('#interview_price_10_error').text('');
            }
        }
        
        return isValid;
    }


    function validateUserProfile() {
        var isValid = true;

        // Validate Youtube video url
        var youtubeUrl = $('#youtube_video_url').val();
        if (youtubeUrl.trim() !== '') {
            if (!isValidUrl(youtubeUrl)) {
                $('#youtube_video_url_error').text('Please enter a valid YouTube video URL');
                isValid = false;
            } else {
                $('#youtube_video_url_error').text('');
            }
        }

        return isValid;
    }

    function isValidUrl(url) {
        // Regular expression for URL validation
        var urlPattern = /^(ftp|http|https):\/\/[^ "]+$/;
        return urlPattern.test(url);
    }

    $('#multiplereset').click(function () {
        $('#userForm')[0].reset();
    });
</script>
@endsection
