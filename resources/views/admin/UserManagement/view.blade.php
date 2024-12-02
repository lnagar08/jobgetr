@extends('layouts.admin')
@section('title', 'User Management')
@section('content') 
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="page-header d-flex justify-content-between">
                        <div class="page-title">
                            <h3>View</h3>
                        </div>
                        <div class="page-title">
                            <a class="btn btn-primary" href="{{route('user-management.index')}}">Back</a>
                        </div>
                    </div>

                    <!-- <nav class="breadcrumb-two mt-2" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="javascript:void(0);" class="breadcrumb-link">Personal Details</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="breadcrumb-link">Contact Information</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="breadcrumb-link">Professional Summary</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="breadcrumb-link">Employment History</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="breadcrumb-link">Education</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);" class="breadcrumb-link">Skills</a></li>
                            <li class="breadcrumb-item" aria-current="page"><a href="javascript:void(0);" class="breadcrumb-link">Additional Section</a></li>
                        </ol>
                    </nav> -->



                    <div class="row layout-top-spacing" id="cancel-row">
                    

                    </div> 
                </div>
               
<script>
    $(document).ready(function () {
        $('.breadcrumb-item').on('click', function () {
            // Remove 'active' class from all breadcrumb items
            $('.breadcrumb-item').removeClass('active');

            // Add 'active' class to the clicked breadcrumb item
            $(this).addClass('active');
        });
    });
</script> 
@endsection 