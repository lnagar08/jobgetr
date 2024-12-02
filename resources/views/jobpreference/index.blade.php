@include('layouts/header')
<section class="job-preference-sec">
    <div class="container"> 
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="logindesign">
                    <!-- Display error messages -->
                    @if(session('error'))
                        <div class="alert alert-danger text-center">
                            {{ session('error') }}
                        </div>
                    @endif
                    <!-- Display success message -->
                    @if(session('success'))
                        <div class="alert alert-success text-center">
                            {!! session('success') !!}. Visit <a href="{{ route('my-profile') }}" class="btn-link">My Profile</a>.
                        </div>
                    @endif
                    <form action="{{route('job-preference.store')}}" method="post">
                        @csrf
                        <input name="ids" type="hidden" @if($Jobs && $Jobs->id) value="{{ $Jobs->id }}" @else value="null" @endif >
                        <div class="row">
                            <div class="form-group col-md-12 preferencessec">
                                 <h4>Welcome to Job Preferences!</h4>
                                  <h6>Enter the details for the jobs you would like jobgetr.ai to apply for below. Once complete, the job applications will begin!</h6>
                                  <h2>Voluntary Disclosures</h2>
                                </div>
                            </div>
                        <div class="row">
                            
                            <div class="form-group col-md-12">
                                <label>Gender</label>
                                <select @if($Jobs && $Jobs->status == 'false') disabled @endif class="form-control" name="gender" id="gender">
                                    <option @if($Jobs && $Jobs->gender == 'male') selected @endif value="male">Male</option>
                                    <option @if($Jobs && $Jobs->gender == 'female') selected @endif value="female">Female</option>
                                    <option @if($Jobs && $Jobs->gender == 'other') selected @endif value="other">Other</option>
                                </select>
                                @error('gender')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_titles">Job Titles</label>
                            <textarea name="job_titles" rows="4" class="form-control" @if($Jobs && $Jobs->status == 'false') readonly @endif id="job_titles" placeholder="Project Manager, Sr. Project Manager, Technical Project Manager, Customer Service Analyst, Senior Cloud Architect, etc.">@if($Jobs && $Jobs->job_titles){{ $Jobs->job_titles }}@endif</textarea>
                            @error('job_titles')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="salary_range">Salary Range Desired</label>
                                <input type="text" class="form-control" @if($Jobs && $Jobs->status == 'false') readonly @endif name="salary_range" @if($Jobs && $Jobs->salary_range) value="{{ $Jobs->salary_range }}" @endif  id="salary_range" placeholder="Example: $45-50k USD">
                                @error('salary_range')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="hourly_rate">Hourly Rate</label>
                                <input type="text" class="form-control" @if($Jobs && $Jobs->status == 'false') readonly @endif name="hourly_rate" @if($Jobs && $Jobs->hourly_rate) value="{{ $Jobs->hourly_rate }}" @endif id="hourly_rate" placeholder="Example: $15-17 US">
                                @error('hourly_rate')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_level">Job Level</label>
                            <select @if($Jobs && $Jobs->status == 'false') disabled @endif class="form-control" name="job_level">
                                <option @if($Jobs && $Jobs->job_level == 'entry') selected @endif  value="entry"> Entry Level (1-3 years experience)</option>
                                <option @if($Jobs && $Jobs->job_level == 'intermediate') selected @endif  value="intermediate"> Intermediate (3-5 years experience)</option>
                                <option @if($Jobs && $Jobs->job_level == 'advanced') selected @endif  value="advanced"> Advanced (5-10 years experience)</option>
                                <option @if($Jobs && $Jobs->job_level == 'senior') selected @endif  value="senior"> Senior (10+ years experience)</option>
                            </select>
                            @error('job_level')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="legal_authorization">Are you legally authorized to work in the United States?</label>
                            <select @if($Jobs && $Jobs->status == 'false') disabled @endif class="form-control" name="legal_authorization" id="legal_authorization">
                                <option value="Yes" {{ old('legal_authorization', $Jobs->legal_authorization ?? '') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ old('legal_authorization', $Jobs->legal_authorization ?? '') == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                             @error('legal_authorization')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="visa_sponsorship">Will you now or in the future require sponsorship for employment visa status?</label>
                            <select @if($Jobs && $Jobs->status == 'false') disabled @endif class="form-control" name="visa_sponsorship" id="visa_sponsorship">
                                <option value="Yes" {{ old('visa_sponsorship', $Jobs->visa_sponsorship ?? '') == 'Yes' ? 'selected' : '' }}>Yes</option>
                                <option value="No" {{ old('visa_sponsorship', $Jobs->visa_sponsorship ?? '') == 'No' ? 'selected' : '' }}>No</option>
                            </select>
                            @error('visa_sponsorship')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="ethnicity">What is your race/ethnicity ?</label>
                            <select @if($Jobs && $Jobs->status == 'false') disabled @endif class="form-control" name="ethnicity" id="ethnicity">
                                <option value="American Indian or Alaska Natic (Not Hispanic or Latino) (United States)" {{ old('ethnicity', $Jobs->ethnicity ?? '') == 'American Indian or Alaska Natic (Not Hispanic or Latino) (United States)' ? 'selected' : '' }}>American Indian or Alaska Natic (Not Hispanic or Latino) (United States)</option>
                                <option value="Asian (Not Hispanic or Latino) (United States)" {{ old('ethnicity', $Jobs->ethnicity ?? '') == 'Asian (Not Hispanic or Latino) (United States)' ? 'selected' : '' }}>Asian (Not Hispanic or Latino) (United States)</option>
                                <option value="Black or African American (Not Hispanic or Latino) (United States)" {{ old('ethnicity', $Jobs->ethnicity ?? '') == 'Black or African American (Not Hispanic or Latino) (United States)' ? 'selected' : '' }}>Black or African American (Not Hispanic or Latino) (United States)</option>
                                <option value="Decline to State (United States)" {{ old('ethnicity', $Jobs->ethnicity ?? '') == 'Decline to State (United States)' ? 'selected' : '' }} >Decline to State (United States)</option>
                                <option value="Hispanic or Latino (United States)" {{ old('ethnicity', $Jobs->ethnicity ?? '') == 'Hispanic or Latino (United States)' ? 'selected' : '' }} >Hispanic or Latino (United States)</option>
                                <option value="Native Hawaiian or Pacific Islander (Not Hispanic or Latino) (United States)" {{ old('ethnicity', $Jobs->ethnicity ?? '') == 'Native Hawaiian or Pacific Islander (Not Hispanic or Latino) (United States)' ? 'selected' : '' }} >Native Hawaiian or Pacific Islander (Not Hispanic or Latino) (United States)</option>
                                <option value="Two or More Races (Not Hispanic or Latino) (United States)" {{ old('ethnicity', $Jobs->ethnicity ?? '') == 'Two or More Races (Not Hispanic or Latino) (United States)' ? 'selected' : '' }} >Two or More Races (Not Hispanic or Latino) (United States)</option>
                                <option value="White (Not Hispanic or Latino) (United States)" {{ old('ethnicity', $Jobs->ethnicity ?? '') == 'White (Not Hispanic or Latino) (United States)' ? 'selected' : '' }} >White (Not Hispanic or Latino) (United States)</option>
                            </select>
                            @error('ethnicity')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="protected_veterans">Do you identify as one of the following protected veterans?</label>
                            <select @if($Jobs && $Jobs->status == 'false') disabled @endif class="form-control" name="protected_veterans" id="protected_veterans">
                                <option value="I identify as one or more of the classifications or protected veterans listed above" {{ old('protected_veterans', $Jobs->protected_veterans ?? '') == 'I identify as one or more of the classifications or protected veterans listed above' ? 'selected' : '' }}>I identify as one or more of the classifications or protected veterans listed above</option>
                                <option value="I identify as a veteran, just not a protected veteran" {{ old('protected_veterans', $Jobs->protected_veterans ?? '') == 'I identify as a veteran, just not a protected veteran' ? 'selected' : '' }}>I identify as a veteran, just not a protected veteran</option>
                                <option value="I am not a veteran" {{ old('protected_veterans', $Jobs->protected_veterans ?? '') == 'I am not a veteran' ? 'selected' : '' }}>I am not a veteran</option>
                                <option value="I do not wish to self-identify" {{ old('protected_veterans', $Jobs->protected_veterans ?? '') == 'I do not wish to self-identify' ? 'selected' : '' }}>I do not wish to self-identify</option>
                            </select>
                            @error('protected_veterans')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="languages">Languages</label>
                            <input type="text" class="form-control" @if($Jobs && $Jobs->status == 'false') readonly @endif name="languages" id="languages" placeholder="Enter languages" value="{{ old('languages', $Jobs->languages ?? '') }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Please check one of the boxes below</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disability" id="disability_yes" value="Yes" {{ old('disability', $Jobs->disability ?? '') == 'Yes' ? 'checked' : '' }}>
                                <label class="form-check-label" for="disability_yes">
                                    Yes, I have a disability, or have had one in the past
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disability" id="disability_no" value="No" {{ old('disability', $Jobs->disability ?? '') == 'No' ? 'checked' : '' }}>
                                <label class="form-check-label" for="disability_no">
                                    No, I do not have a disability and have not had one in the past
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disability" id="disability_no_answer" value="No Answer" {{ old('disability', $Jobs->disability ?? '') == 'No Answer' ? 'checked' : '' }}>
                                <label class="form-check-label" for="disability_no_answer">
                                    I do not want to answer
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disability" id="disability_permission" value="permission" {{ old('disability', $Jobs->disability ?? '') == 'permission' ? 'checked' : '' }}>
                                <label class="form-check-label" for="disability_no_answer">
                                    I grant permission for jobgetr.ai to apply for jobs on my behalf using the details and resume I have provided.
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="disability" id="disability_certify" value="certify" {{ old('disability', $Jobs->disability ?? '') == 'certify' ? 'checked' : '' }}>
                                <label class="form-check-label" for="disability_no_answer">
                                    I certify the information I have provided is true to the best of my knowledge.
                                </label>
                            </div>
                            @error('disability')
                                    <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group text-center">
                            @if($Jobs && $Jobs->status == 'true') 
                                <button type="submit" class="btn btn-info">Save</button>
                            @endif

                            @if(!$Jobs || !$Jobs->id)
                                <button type="submit" class="btn btn-info">Save</button>
                            @endif
                        </div>
                        <div class="form-group complete-center">
                            <p>Once complete, visit your 'My Profile' for updates. <a href="{{ route('my-profile') }}" class="btn-link">My Profile</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</section>
@include('layouts/footer')
