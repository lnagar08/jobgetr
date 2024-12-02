@include('layouts.resume-header')

<section class="job-preference-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="logindesign">
                    <form action="{{route('upload-my-resume.store')}}" method="POST" enctype="multipart/form-data">
                     @csrf
                                            <input type="hidden" id="userid" name="userid" value="{{ $user->id ?? '' }}">
                        
                        
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="row">
                            <div class="form-group col-md-12 preferencessec">
                                 <h4>Upload My Resume</h4>
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $user->first_name ?? '' }}" placeholder="Enter first name" required>
                                            @error('first_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $user->last_name ?? '' }}" placeholder="Enter last name" required>
                                             @error('last_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="last_name">Email </label>
                                            <input type="email" id="email" name="email" class="form-control" value="{{ $user->email ?? '' }}" placeholder="Enter email" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                     <label for="upload_resume">Upload Resume  <a href="{{$user->upload_resume ?? 'javascript:void(0)' }}"><i class="la la-download"></i></a></label>
                                    <input type="file" id="upload_resume" name="upload_resume" class="form-control" required>
                                    <span id="upload_resume_error" class="text-danger"></span>
                                    @error('upload_resume')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group form-check checkdesign">
                                    <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" required>By uploading resume you agree to our <a href="{{route('terms-of-use')}}">Terms of Service</a> and <a href="{{route('privacy-policy')}}">Privacy Policy</a>
                                </label>
                            </div>
                       
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-info">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('form').submit(function(event) {
            // Prevent the default form submission
            event.preventDefault();
            
            var upload_resume = $('#upload_resume').val();

            if (!upload_resume) {
                $('#upload_resume_error').text('Please upload your resume.');
                return false;
            }

            var fileExtension = upload_resume.split('.').pop().toLowerCase();
            if (fileExtension !== 'pdf' && !isImageFile(fileExtension)) {
                $('#upload_resume_error').text('Please upload a PDF or image file.');
                return false;
            }

            // If all validations pass, submit the form
            this.submit();
        });

        // Function to validate email format
        function isValidEmail(email) {
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailPattern.test(email);
        }

        // Function to check if the file is an image
        function isImageFile(extension) {
            var imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];
            return imageExtensions.includes(extension);
        }
    });
</script>
