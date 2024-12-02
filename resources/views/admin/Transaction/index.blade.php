@extends('layouts.admin')
@section('title', 'Transaction')
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
                            <h3>Transaction History</h3>
                        </div>
                    </div>
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center text-uppercase">
                                {{ Session::get('success') }}
                        </div>
                    @endif
                    <div class="mb-3 mt-3">
                          <a href="javascript:void(0);" id="JobGetrbtn" class="btn btn-primary text-white">JobGetr</a>
                          <a href="javascript:void(0);" id="Interviewbtn" class="btn btn-link text-dark">Interview</a>
                    </div>
                    <div class="row layout-top-spacing" id="cancel-row">
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing" id="JobGetrscreen">
                            <div class="widget-content widget-content-area br-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date">Date </label>
                                            <input type="date" id="transactionDate" class="form-control">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="table-responsive mb-4">
                                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Plan name</th>
                                                <th>Transaction ID</th>
                                                <th>Amount</th>
                                                <th>Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $jobGetrCount = 0;
                                            @endphp
                                            @foreach($Transaction as $key=> $Transactions)
                                             @if(!preg_match('/^interview_\d+/', $Transactions->plan_id))
                                            <tr>
                                                <td>{{ $jobGetrCount + 1 }}</td>
                                               <td>
                                                    @if ($Transactions->user)
                                                        {{ $Transactions->user->first_name ?: '' }} {{ $Transactions->user->last_name ?: '' }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($Transactions->user)
                                                        {{ $Transactions->user->email ?: '' }}
                                                    @endif
                                                </td>
                                                <td>{{ $Transactions->plan ? $Transactions->plan->name : '' }}</td>
                                                <td>{{ $Transactions->payment_id ?: '' }}</td>
                                                <td>$ {{ $Transactions->amount ?: 'N/A' }}</td>
                                                <td>{{ $Transactions->date ?: '' }}</td>
                                            </tr>                                        
                                                @php
                                                    $jobGetrCount++;
                                                @endphp
                                                @endif
                                            @endforeach
                                            @if($jobGetrCount === 0)
                                            <tr class="text-center">
                                                <td colspan="7">No data found</td>
                                            </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing" id="Interviewscreen" style="display:none;">
                            <div class="widget-content widget-content-area br-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date">Date </label>
                                            <input type="date" id="transactionDateInterview" class="form-control">
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="table-responsive mb-4">
                                    <table id="html5Interview" class="table table-hover non-hover" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Plan name</th>
                                                <th>Transaction ID</th>
                                                <th>Amount</th>
                                                <th>Created</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                            $interviewCount = 0;
                                            @endphp
                                            @foreach($Transaction as $key=> $Transactions)
                                            @php
                                                // Separate the prefix from plan_id and get the ID
                                                $prefix = 'interview_';
                                                $planId = substr($Transactions->plan_id, strlen($prefix));
                                                $iplan = App\Models\InterviewPlan::find($planId);
                                            @endphp
                                            
                                            @if($iplan && $prefix.$iplan->id == $Transactions->plan_id)
                                                    <tr>
                                                        <td>{{ $interviewCount + 1 }}</td>
                                                       <td>
                                                            @if ($Transactions->user)
                                                                {{ $Transactions->user->first_name ?: '' }} {{ $Transactions->user->last_name ?: '' }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($Transactions->user)
                                                                {{ $Transactions->user->email ?: '' }}
                                                            @endif
                                                        </td>
                                                        <td>{{ $iplan->plan_name ?: 'N/A' }}</td>
                                                        <td>{{ $Transactions->payment_id ?: '' }}</td>
                                                        <td>$ {{ $Transactions->amount ?: 'N/A' }}</td>
                                                        <td>{{ $Transactions->date ?: '' }}</td>
                                                    </tr>
                                                    @php
                                                    $interviewCount++;
                                                    @endphp
                                                    @endif
                                            @endforeach
                                             @if($interviewCount === 0)
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
    $('#html5Interview').DataTable({
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

    $('#transactionDate').change(function() {
        var selectedDate = $(this).val();
        $('#html5-extension tbody tr').each(function() {
            var dateColumn = $(this).find('td:eq(6)').text();
            
            if (selectedDate === '') {
                $(this).show();
            } else {
                if (dateColumn === selectedDate) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            }
        });
    });
    $('#transactionDateInterview').change(function() {
        var selectedDate = $(this).val();
        $('#html5Interview tbody tr').each(function() {
            var dateColumn = $(this).find('td:eq(6)').text();
            
            if (selectedDate === '') {
                $(this).show();
            } else {
                if (dateColumn === selectedDate) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            }
        });
    });


        $(document).ready(function() {
            $("#Interviewbtn").click(function() {
                $(this).removeClass("btn-link text-dark").addClass("btn-primary text-white");
                $("#JobGetrbtn").removeClass("btn-primary text-white").addClass("btn-link text-dark");
                   $("#JobGetrscreen").hide();
                $("#Interviewscreen").show();
                
            });
    
            $("#JobGetrbtn").click(function() {
                $(this).removeClass("btn-link text-dark").addClass("btn-primary text-white");
                $("#Interviewbtn").removeClass("btn-primary text-white").addClass("btn-link text-dark");
                $("#JobGetrscreen").show();
                $("#Interviewscreen").hide();
            });
        });

</script>            
@endsection 