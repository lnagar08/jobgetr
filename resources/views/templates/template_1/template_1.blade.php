<link rel="stylesheet" type="text/css" href="{{asset('templates/template_1/css/web.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

<div class="boxdesignwidthmain">
    <div class="boxdesign template_design">
    <div class="templates-design">
        <div class="temp-user-info header_clr_chng">
            <div class="row">
                <div class="col-md-6">
                    <div class="temp-user-img">
                        @if(@$user->profile_image)
                            <?php
                            // Get the full path to the image file
                            $imagePath = $user->profile_image;

                            // Read the image file contents
                            $imageData = file_get_contents($imagePath);

                            // Convert the image data to base64 format
                            $base64Image = 'data:image/' . pathinfo($imagePath, PATHINFO_EXTENSION) . ';base64,' . base64_encode($imageData);
                            ?>

                            <img src="{{ $base64Image }}" class="img-fluid" alt="Profile Image">
                        @endif
                        <div class="temp-user-name temp_user_static_name">
                            <h2>{{@$user->first_name}} {{@$user->last_name}}</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php
                        $mail_white = public_path('assets/images/mail-w.png');
                    
                        $mail_image_date = file_get_contents($mail_white);
                        
                        $mail_base64Image = 'data:image/' . pathinfo($mail_image_date, PATHINFO_EXTENSION) . ';base64,' . base64_encode($mail_image_date);
                    ?>
                    <div class="temp-user-address">
                    <h6>{{@$user->address}}{{@$user->city ? ', '.@$user->city : ''}}{{@$user->country ? ', '.@$user->country : ''}} {{@$user->postal_code ? @$user->postal_code : ''}}</h6>
                        <p>
                            @if(!empty(@$user->phone_number))
                                <img src="{{ asset('assets\images\phone-w.png') }}" class="image_icon" alt="Phone icon"> {{ @$user->phone_number }}
                            @endif
                        </p>
                        <p>
                            @if(!empty(@$user->email))
                                <img src="{{ $mail_base64Image }}" class="image_icon" alt="Email icon"> {{ @$user->email }}
                            @endif
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="temp-body">
            <div class="temp-body-left">
                <div class="temp-exp-desc temp-personal-details">
                    @php
                        $dateOfBirth = \Carbon\Carbon::parse(@$user->date_of_birth);
                        $age = $dateOfBirth->diff(\Carbon\Carbon::now())->y;
                    @endphp
                    <h6>{{ $age ? $age. 'years old, ' : '' }}</span><span>{{@$user->driver_license ? 'Driving license '. @$user->driver_license : ''}}</span></h6> 
                </div> 
                <h3>{!! @$user->professional_summary !!}</h3>

                @if(@$employmentHistories && count(@$employmentHistories) > 0)
                    <div class="temp-exp-desc">
                        <h2 class="temp-heading">Professional Experience</h2>
                        @foreach($employmentHistories as $key => $value)
                            @php
                                $startDate = \Carbon\Carbon::parse($value->start_date)->format('F Y');
                                
                                if($value->is_current_working == 1){
                                    $endDate = 'Present';
                                }else{
                                    $endDate = $value->end_date ? \Carbon\Carbon::parse($value->end_date)->format('F Y') : 'Present';
                                }
                                $state = App\Models\State::where('id', $value->state_id)->first();
                            @endphp
                            <div class="temp-exp">
                                <div class="temp-exp-title">
                                    <h3>{{$value->company}}
                                    <span>{{$value->city}} {{@$state->name ? ', '.$state->name : ''}} </span></h3>
                                </div>
                                <div class="temp-exp-date">
                                    <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                </div>
                            </div>
                            <h3>{{$value->job_title}}</h3>
                            {!! $value->description !!}
                        @endforeach
                    </div>
                @endif

                @if(@$educations && count(@$educations) > 0)
                    <div class="temp-exp-desc">
                        <h2 class="temp-heading">Education</h2>
                        @foreach($educations as $education_key => $education_value)
                            @php
                                $startDate = \Carbon\Carbon::parse($education_value->start_date)->format('F Y');
                                if($education_value->is_current_studying == 1){
                                    $endDate = 'Present';
                                }else{
                                    $endDate = $education_value->end_date ? \Carbon\Carbon::parse($education_value->end_date)->format('F Y') : 'Present';
                                }
                                $state = App\Models\State::where('id', $education_value->state_id)->first();
                            @endphp
                            <div class="temp-exp">
                                <div class="temp-exp-title">
                                    <h3>{{$education_value->degree}}
                                    <span>{{$education_value->institution}}, {{$education_value->city}} {{@$state->name ? ', '.$state->name : ''}}</span></h3>
                                </div>
                                <div class="temp-exp-date">
                                    <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                </div>
                            </div>
                            {!! $education_value->description !!}
                        @endforeach

                        
                    </div>
                @endif

                @if(@$internships &&  count(@$internships) > 0)
                    <div class="temp-exp-desc">
                        <h2 class="temp-heading">Internships</h2>
                        @foreach($internships as $internships_key => $internships_value)
                            @php
                                $startDate = \Carbon\Carbon::parse($internships_value->start_date)->format('F Y');
                                $endDate =$internships_value->end_date ?  \Carbon\Carbon::parse($internships_value->end_date)->format('F Y') : 'Present';
                            @endphp
                            <div class="temp-exp">
                                <div class="temp-exp-title">
                                    <h3>{{$internships_value->company}}
                                    <span>{{$internships_value->location}}</span></h3>
                                </div>
                                <div class="temp-exp-date">
                                    <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                </div>
                            </div>
                            <h3>{{$internships_value->job_title}}</h3>
                            {!! $internships_value->description !!}
                        @endforeach

                        
                    </div>
                @endif

                @if( @$courses &&  count(@$courses) > 0)
                    <div class="temp-exp-desc">
                        <h2 class="temp-heading">Courses</h2>
                        @foreach($courses as $courses_key => $courses_value)
                            @php
                                $startDate = \Carbon\Carbon::parse($courses_value->start_date)->format('F Y');
                                $endDate =$courses_value->end_date ?  \Carbon\Carbon::parse($courses_value->end_date)->format('F Y') : 'Present';
                            @endphp
                            <div class="temp-exp">
                                <div class="temp-exp-title">
                                    <h3>{{$courses_value->course}}
                                    <span>{{$courses_value->institution}}</span></h3>
                                </div>
                                <div class="temp-exp-date">
                                    <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if( @$certificates &&  count(@$certificates) > 0)
                    <div class="temp-exp-desc">
                        <h2 class="temp-heading">Certificates</h2>
                        @foreach($certificates as $certificates_key => $certificates_value)
                            @php
                                $issued_date = \Carbon\Carbon::parse($certificates_value->issued_date)->format('F Y');
                            @endphp
                            <div class="temp-exp">
                                <div class="temp-exp-title">
                                    <h3>{{$certificates_value->name}}
                                        <span>{{$certificates_value->organization}}</span>
                                        <a href="{{$certificates_value->url}}" >{{$certificates_value->url}}</a>
                                    </h3>
                                </div>
                                <div class="temp-exp-date">
                                    <h6>{{ $issued_date }}</h6>
                                </div>
                            </div> 
                            {!! $certificates_value->description !!}
                        @endforeach
                    </div>
                @endif

                @if( @$user->hobbies)
                    <div class="temp-exp-desc">
                        <h2 class="temp-heading">Hobbies</h2>
                        
                        {!! @$user->hobbies !!}
                    </div>
                @endif

                @if( @$references &&  count(@$references) > 0)
                    <div class="temp-exp-desc">
                        <h2 class="temp-heading">References</h2>
                        @foreach($references as $references_key => $references_value)
                            <div class="temp-exp">
                                <div class="temp-exp-title width100">
                                    <h3>{{$references_value->referent_company}}
                                        <span>
                                            {{$references_value->referent_name}} 
                                            {{$references_value->referent_email ? ', '.$references_value->referent_email : ''}}
                                            {{$references_value->referent_phone_number ? ', '.$references_value->referent_phone_number : ''}}
                                        </span>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if( @$links &&  count(@$links) > 0)
                    <div class="temp-exp-desc">
                        <h2 class="temp-heading">Links</h2>
                        @foreach($links as $links_key => $links_value)
                            <div class="temp-exp">
                                <div class="temp-exp-title width100">
                                    <h3>{{$links_value->link_title}}
                                        <span>{{$links_value->url}}</span>
                                    </h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

                @if( @$customSections &&  count(@$customSections) > 0)
                    <div class="temp-exp-desc">
                        <h2 class="temp-heading">Custom Section</h2>
                        @foreach($customSections as $customSections_key => $customSections_value)
                            <div class="temp-exp">
                                <div class="temp-exp-title">
                                    <h3>{{$customSections_value->header}}
                                    <span>{{$customSections_value->sub_header}}</span></h3>
                                </div>
                            </div>
                            {!! $customSections_value->description !!}
                        @endforeach

                        
                    </div>
                @endif
            </div>
            <div class="temp-body-right">
                
                @if(@$skills && count(@$skills) > 0)
                    <h2 class="temp-heading">Key Skills</h2>
                    <ul>
                        @foreach($skills as $skill_key => $skill_value)
                            <li>{{$skill_value->skill}}  <span>{{$skill_value->level ? '('.$skill_value->level. ')' : ''}}</span></li>
                        @endforeach
                    </ul>
                @endif

                @if(@$languages && count(@$languages) > 0)
                    <h2 class="temp-heading">Languages</h2>
                    <ul>
                        @foreach($languages as $languages_key => $languages_value)
                            <li>{{$languages_value->language}}  <span>{{$languages_value->proficiency ? '('.$languages_value->proficiency. ')' : ''}}</span></li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
 </div>
 <div class="space100"></div>
</div>
