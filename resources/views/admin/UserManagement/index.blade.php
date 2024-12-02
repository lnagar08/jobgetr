@extends('layouts.admin')
@section('title', 'User Management')
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
    table.dataTable thead > tr > th.sorting_asc, table.dataTable thead > tr > th.sorting_desc, table.dataTable thead > tr > th.sorting {
     padding-right: 38px !important;
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
                            <h3>User Management</h3>
                        </div>
                        <div class="page-title page-btn">
                           <a class="btn btn-primary" href="{{route('user-management.create')}}">Create</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">
                    @if (Session::has('success'))
                              <div class="alert alert-success text-center text-uppercase">
                                      {{ Session::get('success') }}
                              </div>
                          @endif
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4">
                                <!-- Filter by Account Type (Plan) -->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <label for="filter-plan">Plans </label>
                                        <select id="filter-plan" class="form-control">
                                            <option value="">All Plans</option>
                                            @foreach($Plan as $plan)
                                                <option value="{{ $plan->name }}">{{ $plan->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    </div>
                                </div>
                                <table id="html5-extension" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 120px;">Name</th>
                                            <th style="min-width: 120px;">E-mail</th>
                                            <th style="min-width: 120px;">Date of birth</th>
                                            <th style="min-width: 120px;">Phone no.</th>
                                            <th style="min-width: 120px;">Account Type</th>
                                            <th>Created</th>
                                            <th>Status</th>
                                            <th style="min-width: 100px;" class="no-content">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($User) > 0)
                                        @foreach($User as $users)
                                        @php 
                                            $plan = App\Models\Userplan::select('plans.name')
                                                ->leftjoin('plans','plans.id','userplans.plan_id')
                                                ->where('userplans.user_id', $users->id)
                                                ->first();                                        
                                        @endphp
                                    
                                        <tr>
                                            <td class="d-flex user-meta-imgtd">
                                                <div class="user-meta-img">
                                            <img width="40" height="40" src="{{$users->profile_image ? $users->profile_image : asset('admin/assets/img/90x90.jpg')}}" alt="avatar">
                                            </div>  
                                            <div class="user-meta-info">
                                                <p class="user-name mt-3"><b>{{$users->first_name}} {{$users->last_name}}</b></p>
                                                <!--<p class="user-work"><b>{{$users->email}}</b></p>-->
                                            </div>  
                                            </td>
                                            <td>{{$users->email}}</td>
                                            <td>{{$users->date_of_birth}}</td>
                                            <td>{{$users->phone_number}}</td>
                                            <td>
                                                @if($plan)
                                                    {{ $plan->name }}
                                                @else
                                                    No plan.
                                                @endif
                                            </td>
                                            <td>{{ $users->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <label class="switch @if($users->status == 1) s-danger @else s-success @endif mr-2">
                                                    <input onchange="toggleSwitch({{$users->id}})" data-id="{{$users->id}}" type="checkbox" @if($users->status == 1) checked @endif>
                                                    <span class="slider"></span>
                                                </label>
                                            </td>
                                            <td>
                                                <ul class="table-controls">
                                                    <li><a target="__" href="https://jobgetr.daedaltech.online/resume/{{$users->slug}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="View"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                                    <li><a href="{{route('user-management.edit', $users->id)}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                    <li><a href="{{ route('app-management.index', $users->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="App Management"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg></a></li>
                                                    <!--<li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>-->
                                                </ul>   
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr class="text-center">
                                            <td colspan="7">No data found</td>
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
   function toggleSwitch(userId) {
    var isChecked = $('[data-id="' + userId + '"]').is(':checked'); // Check if the element is checked
    var status = isChecked ? '1' : '0'; // Determine the status based on whether the element is checked or not
    var csrfToken = $('meta[name="csrf-token"]').attr('content'); // Get the CSRF token

    // Display the loading overlay
    $.blockUI({
        message: '<h3 class="text-white">' + (status === '1' ? 'Suspended' : 'Active') + '</h3>',
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
            url: "{{ route('user-management.updateStatus') }}",
        method: 'POST',
        data: {
            _token: csrfToken,
            status: status,
            ids: userId,
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
        $('[data-id="' + userId + '"]').closest('.switch').removeClass('s-success').addClass('s-danger');
    } else {
        $('[data-id="' + userId + '"]').closest('.switch').removeClass('s-danger').addClass('s-success');
    }
}

        // DataTable initialization
        $('#filter-plan').insertAfter('.dt-buttons');
        var dataTable = $('#html5-extension').DataTable({
            dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
            buttons: [
                {
                    extend: 'csv',
                    className: 'btn'
                }
            ],
            language: {
                paginate: {
                    previous: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    next: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                info: "Showing page _PAGE_ of _PAGES_",
                search: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                searchPlaceholder: "Search...",
                lengthMenu: "Results :  _MENU_"
            },
            stripeClasses: [],
            lengthMenu: [7, 10, 20, 50],
            pageLength: 7
        });

        // Event listener for account type filter
        $('#filter-plan').on('change', function() {
            var planId = $(this).val();
            dataTable.column(4).search(planId).draw(); // Assuming account type column index is 4
        });
  </script>     
@endsection 