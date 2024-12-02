@extends('layouts.admin')
@section('title', 'Plan Management')
@section('content')
<style>
    .error{
        color: red !important;
    }
</style>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="page-header d-flex justify-content-between">
            <div class="page-title">
                <h3>Create</h3>
            </div>
            <div class="page-title">
                <a class="btn btn-primary" href="{{ route('plan-management.index') }}">Back</a>
            </div>
        </div>
        @if (Session::has('error'))
            <div class="alert alert-danger text-center text-uppercase">
                    {{ Session::get('error') }}
            </div>
        @endif
        <div class="account-settings-container layout-top-spacing">
            <form method="post" action="{{ route('plan-management.store') }}" enctype="multipart/form-data" id="createPlanForm">
                @csrf
                <div class="account-content mt-2 mb-2">
                    <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                <div class="section general-info">
                                    <div class="info">
                                        <div class="user-management-title">
                                            <h4>Plan Details</h4>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="plan_name">Plan Name <span class="text-danger">*</span></label>
                                                                        <input type="text" name="plan_name" value="{{old('plan_name')}}" id="plan_name" class="form-control mb-4" placeholder="Plan Name">
                                                                        @error('plan_name')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="number_of_job_applications">Number Of Job Applications </label>
                                                                        <input type="number" name="number_of_job_applications" value="{{old('number_of_job_applications')}}" id="number_of_job_applications" class="form-control mb-4" placeholder="Number Of Job Applications">
                                                                        @error('number_of_job_applications')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="price">Price <span class="text-danger">*</span></label>
                                                                        <input type="number" name="price" value="{{old('price')}}" id="price" class="form-control mb-4" placeholder="Price Monthly">
                                                                        @error('price')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="description">Description </label>
                                                                        <textarea name="description"  id="description" class="form-control mb-4" rows="3">{{old('description')}}</textarea>
                                                                        @error('description')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
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
                                                <button type="submit" class="btn btn-primary">Create</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include jQuery Validation Plugin -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

<!-- Encapsulate jQuery code within a noConflict() wrapper -->
<script>
    jQuery.noConflict();
    (function($) {
        $(document).ready(function () {
            $('#createPlanForm').validate({
                rules: {
                    // Validation rules
                    plan_name: {
                        required: true
                    },
                    price: {
                        required: true,
                        number: true,
                    },
                },
                messages: {
                    // Error messages
                    plan_name: {
                        required: "Please enter a plan name"
                    },
                    price: {
                        required: "Please enter the price",
                        number: "Please enter a valid number",
                    },
                },
                errorPlacement: function(error, element) {
                    error.insertAfter(element); // Inserts the error message after the input field
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });

        $(document).ready(function() {
            $('#multiplereset').on('click', function() {
                $('#createPlanForm')[0].reset(); // Reset the form
            });
        });
    })(jQuery);
</script>
@endsection
