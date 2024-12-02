@extends('layouts.admin')
@section('title', 'Questions')
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
                            <h3>Questions</h3>
                        </div>
                        <div class="page-title page-btn">
                           <a class="btn btn-primary" href="{{route('questions.create')}}">Create</a>
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
                                            <th>#</th>
                                            <th>Questions</th>
                                            <th>Created</th>
                                            <th class="no-content" style="width:64px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($Questions) > 0)
                                        @foreach($Questions as $key=> $quest)
                                        <tr id="deleteRoute_{{ $quest->id }}">
                                            <td>Q.{{$key+1}}</td>
                                            <td>{{ strlen($quest->questions) > 150 ? substr($quest->questions, 0, 150) . ' .....' : $quest->questions }}</td>
                                            <td>{{$quest->created_at->format('Y-m-d') }}</td>
                                            <td>
                                                <ul class="table-controls">
                                                    <li><a href="#" data-toggle="tooltip" onclick="viewpage({{$key+1}}, {{ json_encode($quest->questions) }})" data-placement="top" title="View" data-original-title="View"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg></a></li>
                                                    <li><a href="{{route('questions.edit', $quest->id)}}" data-toggle="tooltip" data-placement="top" title="Edit" data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                    <li ><a href="javascript:void(0);" onclick="deletePlan({{ $quest->id }})" data-toggle="tooltip" data-placement="top" title="Delete" data-original-title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle text-danger"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                                </ul>   
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr class="text-center">
                                            <td colspan="4">No data found</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div> 
                </div>
                !-- Modal -->
                <div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <p class="modal-text"></p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
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
    function deletePlan(id) {
    swal({
        title: 'Are you sure to Delete?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Delete',
        padding: '2em'
    }).then(function(result) {
        if (result.value) {
            var url = "{{ route('questions.destroy', ':id') }}";
            url = url.replace(':id', id); // Replace the placeholder with the actual id

            // Get the CSRF token value from the meta tag
            var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Send AJAX request to delete the plan
            $.ajax({
                type: "DELETE",
                url: url,
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include CSRF token in the request headers
                },
                success: function(response) {
                    // If deletion is successful, hide the delete route
                    $('#deleteRoute_' + id).hide();
                    swal(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    );

                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);

                },
                error: function(xhr, status, error) {
                    // Handle errors if any
                    swal(
                        'Error!',
                        'Failed to delete the plan.',
                            'error'
                        );
                    }
                });
            }
        });
    }

    function viewpage(quesid, questcontent) {
        $('#exampleModalLabel').text("Q."+quesid);
        $('.modal-text').text(questcontent);
        $('#questionModal').modal('show');
    }



   </script>            
@endsection 