@extends('layouts.admin')
@section('title', 'Job Preference')
@section('content')
<!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/table/datatable/datatables.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/table/datatable/custom_dt_html5.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/plugins/table/datatable/dt-global_style.css')}}">
<!-- END PAGE LEVEL CUSTOM STYLES -->
<style>
    .user-work{
        margin: 0px auto;
    position: relative;
    top: -6px;
    }
</style>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
                <div class="blockui-growl-message">
                    <i class="flaticon-exclamation"></i>  BlockUI Growl Notification
                </div>
                <div class="layout-px-spacing">

                    <div class="page-header d-flex justify-content-between">
                        <div class="page-title">
                            <h3>Job Preference</h3>
                        </div>
                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center text-uppercase">
                                {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4">
                                <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Job title</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                            <th>Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($JobPreference) > 0)
                                        @foreach($JobPreference as $key=> $Jobs)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td><a class="text-primary" href="{{ route('job-Preferences.show' , $Jobs->id) }}">{{ strlen($Jobs->job_level) > 10 ? substr($Jobs->job_level, 0, 10) . '...' : $Jobs->job_level }}</a></td>
                                            <td>{{$Jobs->user->first_name}}</td>
                                            <td>{{$Jobs->user->email}}</td>
                                             <td>
                                                <label class="switch @if($Jobs->status == 'true') s-danger @else s-success @endif mr-2">
                                                    <input onchange="toggleSwitch({{$Jobs->id}})" data-id="{{$Jobs->id}}" type="checkbox" @if($Jobs->status == 'true') checked @endif>
                                                    <span class="slider"></span>
                                                </label>
                                            </td>
                                            <td>{{$Jobs->created_at->format('Y-m-d') }}</td>
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

 <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
  <script src="{{asset('admin/plugins/table/datatable/datatables.js')}}"></script>
  <!-- NOTE TO Use Copy CSV Excel PDF Print Options You Must Include These Files  -->
  <script src="{{asset('admin/plugins/table/datatable/button-ext/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('admin/plugins/table/datatable/button-ext/jszip.min.js')}}"></script>
  <script src="{{asset('admin/plugins/table/datatable/button-ext/buttons.html5.min.js')}}"></script>
  <script src="{{asset('admin/plugins/table/datatable/button-ext/buttons.print.min.js')}}"></script>
  <script>
    function toggleSwitch(jobid) {
        var isChecked = $('[data-id="' + jobid + '"]').is(':checked'); // Check if the element is checked
        var status = isChecked ? 'true' : 'false'; // Determine the status based on whether the element is checked or not
        var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get the CSRF token
    
        // Display the loading overlay
        $.blockUI({
            message: '<h3 class="text-white">' + (status === 'true' ? 'Edit Mode ON' : 'Edit Mode OFF') + '</h3>',
            fadeIn: 800, 
            timeout: 4000, // unblock after 4 seconds
            overlayCSS: {
                backgroundColor: '#1b2024',
                opacity: 0.8,
                zIndex: 1200,
                cursor: 'wait'
            },
            css: {
                border: 0,
                color: '#fff',
                zIndex: 1201,
                padding: 0,
                backgroundColor: 'transparent'
            }
        });
    
        // Send an AJAX request to update the status
        $.ajax({
                url: "{{ route('job-Preferences.updateStatus') }}",
            method: 'POST',
            data: {
                _token: csrfToken,
                status: status,
                ids: jobid,
            },
            success: function(response) {
                // Remove the duplicate 'success' key here
                setTimeout(function() {
                    $.unblockUI(); // Unblock the UI
                }, 1000);
            },
            error: function(xhr, status, error) {
                console.error(xhr, status, error);
                $.unblockUI(); // Unblock the UI on error
            }
        });
    
    
        // Update the UI based on the status
        if (isChecked) {
            $('[data-id="' + jobid + '"]').closest('.switch').removeClass('s-success').addClass('s-danger');
        } else {
            $('[data-id="' + jobid + '"]').closest('.switch').removeClass('s-danger').addClass('s-success');
        }
    }
      
    $('#html5-extension').DataTable({
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: {
                buttons: [{
                    extend: 'csv',
                    className: 'btn'
                }]
            },
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
    });
   </script>            
@endsection 