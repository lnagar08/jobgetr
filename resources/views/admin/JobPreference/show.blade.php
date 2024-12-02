@extends('layouts.admin')
@section('title', 'Job Preference')
@section('content')
<div id="content" class="main-content">
    <div class="layout-px-spacing ">
        <div class="page-header d-flex justify-content-between">
            <div class="page-title">
                <h3>View</h3>
            </div>
            <div class="page-title page-btn">
                <a class="btn btn-primary" href="{{ route('job-Preferences.index') }}">Back</a>
            </div>
        </div>
        <div class="row layout-top-spacing job-Preferencesadmin">
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">    
         <div class="card component-card_4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                <div class="user-profile">
                    <img src="{{ $Jobs->user->profile_image ? url('/'). '/'. $Jobs->user->profile_image  : asset('admin/assets/img/90x90.jpg')}}" class="" height="100" alt="...">
                 </div>
                 </div>
                 <div class="col-md-10">
                    <div class="user-info">
                        <h6 class="card-user_name"><b>Name :</b> {{ $Jobs->user->first_name }}</h6>
                            <h6 class="card-user_name"><b>Email :</b> {{ $Jobs->user->email }}</h6>
                            <h6 class="card-title"><b>Gender :</b> {{ $Jobs->gender }}</h6>
                        <h6 class="card-title"><b>Job Title :</b> {{ $Jobs->job_titles }}</h6>
                        <h6 class="card-title"><b>Race Ethnicity :</b> {{ $Jobs->race_ethnicity }}</h6>
                        <h6 class="card-title"><b>Salary Range :</b> {{ $Jobs->salary_range }}</h6>
                        <h6 class="card-title"><b>Hourly Rate :</b> {{ $Jobs->hourly_rate }}</h6>
                        <h6 class="card-title"><b>Languages :</b> {{ $Jobs->languages }}</h6>
                        <h6 class="card-title"><b>Job Level :</b> @if($Jobs->job_level == 'entry') Entry Level (1-3 years experience) @elseif($Jobs->job_level == 'intermediate') Intermediate (3-5 years experience) @elseif($Jobs->job_level == 'advanced') Advanced (5-10 years experience) @elseif($Jobs->job_level == 'senior') Senior (10+ years experience) @endif</h6>
                    </div>
                    <div class="mt-3 mb-3">
                        <h6><strong>Q.1</strong> Are you legally authorized to work in the United States ?</h6>
                        <h6><strong>Ans.</strong> {{ $Jobs->legal_authorization }}</h6>
                    </div>
                    <div class="mt-3 mb-3">
                        <h6><strong>Q.2</strong> Will you now or in the future require sponsorship for employment visa status ?</h6>
                        <h6><strong>Ans.</strong> {{ $Jobs->visa_sponsorship }}</h6>
                    </div>
                    <div class="mt-3 mb-3">
                        <h6><strong>Q.3</strong> What is your ethnicity ?</h6>
                        <h6><strong>Ans.</strong> {{ $Jobs->ethnicity }}</h6>
                    </div>
                    <div class="mt-3 mb-3">
                        <h6><strong>Q.4</strong> Do you identify as one of the following protected veterans ?</h6>
                        <h6><strong>Ans.</strong> {{ $Jobs->protected_veterans }}</h6>
                    </div>
                    <div class="mt-3 mb-3">
                        <h6><strong>Q.5</strong> Please check one of the boxes below:</h6>
                        <h6><strong>Ans.</strong> 
                        @if($Jobs->disability == "Yes")
                        Yes, I have a disability, or have had one in the past
                        @elseif($Jobs->disability == "No")
                         No, I do not have a disability and have not had one in the past
                        @elseif($Jobs->disability == "No Answer")
                         I do not want to answer
                        @endif
                        </h6>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>    
        </div>
    </div>           
@endsection 