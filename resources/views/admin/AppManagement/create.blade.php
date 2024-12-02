@extends('layouts.admin')
@section('title', 'App Management')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing">
                    <div class="page-header d-flex justify-content-between">
                        <div class="page-title">
                            <h3>App Management</h3>
                        </div>
                        <div class="page-title page-btn">
                            <a class="btn btn-primary" href="{{ route('app-management.index', $id) }}">Back</a>
                        </div>
                    </div>
                    <div class="account-settings-container layout-top-spacing">
                        <div class="general-info section general-infomain">
                             @if (Session::has('success'))
                              <div class="alert alert-success mt-2 mb-2 successMessage">
                                      {{ Session::get('success') }}
                              </div>
                          @endif
                    <form method="post" id="userForm" action="{{ route('app-management.store', $id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="account-content mt-2 mb-2">
                            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                        <div class="row">
                                         <div class="col-sm-12 mb-3"><h4>Create</h4></div>
                                         <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="job_title">Job Title</label>
                                                    <input type="text" id="job_title" name="job_title" placeholder="Enter job title" value="{{old('job_title')}}" class="form-control">
                                                    @error('job_title')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="company_name">Company Name</label>
                                                <input type="text" id="company_name" name="company_name" placeholder="Enter company name" value="{{old('company_name')}}" class="form-control">
                                                 @error('company_name')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                            </div>
                                         </div>
                                         <div class="col-sm-12 mb-3">
                                                <label for="remark">Link</label>
                                                <input id="link" name="link" placeholder="Enter link.."  value="{{old('link')}}"  class="form-control">
                                                 @error('link')
                                                      <div class="text-danger">{{ $message }}</div>
                                                  @enderror
                                         </div>
                                         <div class="col-sm-12 mb-3">
                                                <label for="remark">Remark</label>
                                                <textarea id="remark" name="remark" placeholder="Enter remark.." class="form-control">{{old('remark')}}</textarea>
                                                 @error('remark')
                                                      <div class="text-danger">{{ $message }}</div>
                                                  @enderror
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
                    </form>
                    </div>
    </div>
 </div>
@endsection 