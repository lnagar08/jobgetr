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
                        <div class="page-title page-btn">
                            <a class="btn btn-primary" href="{{ route('app-management.index', $userid) }}">Back</a>
                        </div>
                    </div>
                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing" >
                            <div class="widget-content widget-content-area br-6">
                            <ul class="app-managementview">
                                <li><span>Job Title</span><span class="app-managementspan">:</span>{{$JobApplyManagement->job_title}}</li>
                                <li><span>Company Name</span><span class="app-managementspan">:</span>{{$JobApplyManagement->company_name}}</li>
                                <li><span>Date</span><span class="app-managementspan">:</span>{{$JobApplyManagement->date}}</li>
                                <li><span>Link</span><span class="app-managementspan">:</span>{{$JobApplyManagement->link ?? ''}}</li>
                                <li><span>Remark</span><span class="app-managementspan">:</span>{{$JobApplyManagement->remark}}</li>
                                </ul>
                           
                        </div> 
                        </div> 
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