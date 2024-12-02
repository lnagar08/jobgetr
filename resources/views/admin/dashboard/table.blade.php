@extends('layouts.admin')
@section('title', 'Dashboard : Sales')
@section('content') 

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">
        <div class="container">

        <div class="page-header">
            <div class="page-title">
                <h3>Table</h3>
            </div>
        </div>

        

            <div class="row layout-top-spacing">                        
                <div id="tableProgress" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Table</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Created</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($user as $users)
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>{{$users->name}}</td>
                                                    <td>{{$users->email}}</td>
                                                    <td><p class="text-danger">{{$users->created_at}}</p></td>
                                                    <td class="text-center">
                                                        <ul class="table-controls">
                                                            <li><a href="javascript:void(0);"  data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                </div>   
            </div>
            </div>
    </div>
@endsection 