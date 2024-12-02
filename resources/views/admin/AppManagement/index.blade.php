@extends('layouts.admin')
@section('title', 'App Management')
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
                            <h3>App Management</h3>
                        </div>
                        <div class="page-title page-btn">
                           <a class="btn btn-primary" href="{{ route('app-management.create', $id) }}">Create</a>
                        </div>
                    </div>

                    <div class="row layout-top-spacing" id="cancel-row">
                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                            @if (Session::has('success'))
                              <div class="alert alert-success text-center text-uppercase">
                                      {{ Session::get('success') }}
                              </div>
                          @endif
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4">
                                <table id="html5-extension" class="table table-hover" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th style="min-width: 120px;">Job Title</th>
                                            <th style="min-width: 120px;">Company name</th>
                                            <th style="min-width: 120px;">Date</th>
                                            <th class="no-content">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!is_null($JobApplyManagement) && count($JobApplyManagement) > 0)
                                        @foreach($JobApplyManagement as $JobApply)
                                        <tr>
                                            <td>{{$JobApply->job_title}}</td>
                                            <td>{{$JobApply->company_name}}</td>
                                            <td>{{ $JobApply->date }}</td>
                                            <td>
                                                <ul class="table-controls">
                                                    <li><a href="{{ route('app-management.view', ['userid' => $id, 'id' => $JobApply->id]) }}" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/><circle cx="12" cy="12" r="3"/></svg></a></li>
                                                    <li><a href="{{ route('app-management.delete', ['userid' => $id, 'id' => $JobApply->id]) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                                </ul>   
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr class="text-center">
                                            <td colspan="5">No data found</td>
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
  </script>     
@endsection 