<link rel="stylesheet" type="text/css" href="{{asset('templates/template_2/css/web.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
<div class="boxdesignwidthmain">
    <div class="boxdesign template_design">
    
        <div class="templates-design3">             
        <div class="temp-user-info3 header_clr_chng">
            <div class="row">
                <div class="col-md-5">
                    <div class="temp-user-name3 temp_user_static_name">
                        <h2 class="head_h2"><b>{{@$user->first_name}} {{@$user->last_name}}</b></h2>
                    </div>
                </div>
                <div class="col-md-7">
                    <?php
                        $mail_white = public_path('assets/images/mail-w.png');
                    
                        $mail_image_date = file_get_contents($mail_white);
                        
                        $mail_base64Image = 'data:image/' . pathinfo($mail_image_date, PATHINFO_EXTENSION) . ';base64,' . base64_encode($mail_image_date);
                    ?>
                    <div class="temp-user-address3">
                        <h6>{{@$user->address}} {{@$user->city ? ', '.@$user->city : ''}} {{@$user->country ? ', '.@$user->country : ''}} {{@$user->postal_code ? ', '.@$user->postal_code : ''}}</h6>
                        <ul>
                          <li>
                                @if(!empty(@$user->phone_number))
                                    <img src="{{ asset('assets/images/phone-w.png') }}" class="image_icon" alt="Phone icon"> {{ @$user->phone_number }}
                                @endif
                            </li>
                            <li>
                                @if(!empty(@$user->email))
                                    <img src="{{ $mail_base64Image }}" class="image_icon" alt="Email icon"> {{ @$user->email }}
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="templates3-leftrightspace"> 
          <div class="temp-exp-desc3rightmain">
              <div class="temp-exp-desc3rightmain-left">
            <div class="templates3-intro">
                <h3>{!! @$user->professional_summary !!}</h3>
            </div>

            <div class="temp-exp-desc3  temp-personal-details3">
                <!-- <h2 class="temp-heading3"><span>nursing officer</span></h2> -->
                @php
                    $dateOfBirth = \Carbon\Carbon::parse(@$user->date_of_birth);
                    $age = $dateOfBirth->diff(\Carbon\Carbon::now())->y;
                @endphp
                <h6><span>{{ $age ? $age. 'years old, ' : '' }}</span><span>{{@$user->driver_license ? 'Driving license '. @$user->driver_license : ''}}</span></h6> 
            </div>

            @if(@$employmentHistories && count(@$employmentHistories) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Professional Experience</span></h2>
                    @foreach($employmentHistories as $key => $value)
                        @php
                            $startDate = \Carbon\Carbon::parse($value->start_date)->format('F Y');
                            $endDate = $value->end_date ? \Carbon\Carbon::parse($value->end_date)->format('F Y') : 'Present';
                            $state = App\Models\State::where('id', $value->state_id)->first();
                        @endphp
                        <div class="temp-exp-desc3-main">
                            <div class="temp-exp3">
                                <div class="temp-exp-title3">
                                    <h3>{{$value->company}}
                                        <span>{{$value->city}} {{@$state->name ? ', '.$state->name : ''}}</span>
                                    </h3>
                                </div>
                                <div class="temp-exp-date3">
                                    <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                </div>
                            </div>
                            <h4>{{$value->job_title}}</h4>
                            {!! $value->description !!}
                        </div>
                    @endforeach
                </div>
            @endif

            @if(@$educations && count(@$educations) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Education</span></h2>
                    <div class="temp-exp-desc3-main education3">
                        @foreach($educations as $education_key => $education_value)
                            @php
                                $startDate = \Carbon\Carbon::parse($education_value->start_date)->format('F Y');
                                $endDate = $education_value->end_date?  \Carbon\Carbon::parse($education_value->end_date)->format('F Y') : 'Present';
                                $state = App\Models\State::where('id', $education_value->state_id)->first();
                            @endphp
                            <div class="repeat3">
                            <div class="temp-exp3">
                                <div class="temp-exp-title3 width100">
                                    <h6>{{$education_value->degree}}
                                        <span>{{$education_value->institution}}</span>
                                        <span>{{ $startDate }} - {{ $endDate }}</span>
                                    </h6>
                                    <h6>{{$education_value->city}} {{@$state->name ? ', '.$state->name : ''}}</h6>
                                </div>
                                <div class="description3">
                                    {!! $education_value->description !!}
                                    </div>
                            </div>
                            </div>
                            
                        @endforeach
                    </div>
                </div>
            @endif

            @if(@$internships && count(@$internships) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Internships</span></h2>
                    @foreach($internships as $internships_key => $internships_value)
                        @php
                             $startDate = \Carbon\Carbon::parse($internships_value->start_date)->format('F Y');
                                $endDate = $internships_value->end_date?  \Carbon\Carbon::parse($internships_value->end_date)->format('F Y') : 'Present';
                        @endphp
                        <div class="temp-exp-desc3-main">
                            <div class="temp-exp3">
                                <div class="temp-exp-title3">
                                    <h3>{{$internships_value->company}}
                                        <span>{{$internships_value->location}}</span>
                                    </h3>
                                </div>
                                <div class="temp-exp-date3">
                                    <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                </div>
                            </div>
                        
                            {!! $internships_value->description !!}
                        </div>
                    @endforeach
                </div>
            @endif

            
            @if(@$certificates && count(@$certificates) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Certifications</span></h2>
                    @foreach($certificates as $certificates_key => $certificates_value)
                        @php
                            $issued_date = \Carbon\Carbon::parse($certificates_value->issued_date)->format('F Y');
                        @endphp
                        <div class="temp-exp-desc3-main">
                            <div class="temp-exp3">
                                <div class="temp-exp-title3">
                                    <h3>{{$certificates_value->name}}
                                        <span>{{$certificates_value->organization}}</span>
                                        <a href="{{$certificates_value->url}}" >{{$certificates_value->url}}</a>
                                    </h3>
                                </div>
                                <div class="temp-exp-date3">
                                    <h6>{{ $issued_date }}</h6>
                                </div>
                            </div>
                        
                            {!! $certificates_value->description !!}
                        </div>
                    @endforeach
                </div>
            @endif

            @if(@$courses && count(@$courses) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Courses</span></h2>
                    @foreach($courses as $courses_key => $courses_value)
                        @php
                        $startDate = \Carbon\Carbon::parse($courses_value->start_date)->format('F Y');
                                $endDate = $courses_value->end_date?  \Carbon\Carbon::parse($courses_value->end_date)->format('F Y') : 'Present';
                        @endphp
                        <div class="temp-exp-desc3-main">
                            <div class="temp-exp3">
                                <div class="temp-exp-title3">
                                    <h3>{{$courses_value->course}}
                                        <span>{{$courses_value->institution}}</span>
                                    </h3>
                                </div>
                                <div class="temp-exp-date3">
                                    <h6>{{ $startDate }} - {{ $endDate }}</</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(@$references && count(@$references) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>References</span></h2>
                    <div class="temp-exp-desc3-main education3">
                        @foreach($references as $references_key => $references_value)
                            <div class="temp-exp3">
                                <div class="temp-exp-title3 width100">
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
                </div>
            @endif

            @if(@$links && count(@$links) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Links</span></h2>
                    <div class="temp-exp-desc3-main education3">
                        @foreach($links as $links_key => $links_value)
                            <div class="temp-exp3">
                                <div class="temp-exp-title3 width100">
                                    <h6>{{$links_value->link_title}}
                                        <span>
                                            {{$links_value->url}} 
                                        </span>
                                    </h6>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if(@$customSections && count(@$customSections) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Custom Section</span></h2>
                    <div class="temp-exp-desc3-main education3">
                        @foreach($customSections as $customSections_key => $customSections_value)
                            <div class="temp-exp3">
                                <div class="temp-exp-title3 width100">
                                    <h3>{{$customSections_value->header}}
                                        <span>
                                            {{$customSections_value->sub_header}} 
                                        </span>
                                    </h3>
                                </div>
                            </div>
                            {!! $customSections_value->description !!}
                        @endforeach
                    </div>
                </div>
            @endif


            @if(@$user->hobbies)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Hobbies</span></h2>
                    <div class="temp-exp-desc3-main education3">
                        {!! @$user->hobbies !!}
                    </div>
                </div>
            @endif
            </div>
            
            <div class="temp-exp-desc3rightmain-right">
            @if(@$skills && count(@$skills) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Key Skills</span></h2>
                    <div class="temp-exp-desc3-main">
                        <div class="temp-exp-desclist3"> 
                            <ul>
                                @php
                                    function getSkillWidth($level) {
                                        switch ($level) {
                                            case 'Novice':
                                                return 20;
                                            case 'Beginner':
                                                return 40;
                                            case 'Skillful':
                                                return 60;
                                            case 'Experienced':
                                                return 80;
                                            case 'Expert':
                                                return 100;
                                            default:
                                                return 0;
                                        }
                                    }
                                @endphp

                                @foreach($skills as $skill_key => $skill_value)
                                    <li>
                                        <span>{{ $skill_value->skill }}</span>
                                        @if($skill_value->level)
                                            <div class="progress">
                                                <div class="progress-bar" style="width: {{ getSkillWidth($skill_value->level) }}%"></div>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            @if(@$languages && count(@$languages) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>Languages</span></h2>
                    <div class="temp-exp-desc3-main">
                        <div class="temp-exp-desclist3"> 
                            <ul>
                                @php
                                    function getProficiencyPercentage($proficiency) {
                                        switch ($proficiency) {
                                            case 'Novice (A1-A2)':
                                                return 25;
                                            case 'Proficient (B1-B2)':
                                                return 50;
                                            case 'Highly proficient (C1-C2)':
                                                return 75;
                                            case 'Native':
                                                return 100;
                                            default:
                                                return 0;
                                        }
                                    }
                                @endphp
                                @foreach($languages as $languages_key => $language_value)
                                    <li>
                                        <span>{{$language_value->language}} {{$language_value->proficiency ? '('.$language_value->proficiency. ')' : ''}}</span>
                                        @if($language_value->proficiency)
                                            <div class="progress">
                                                <div class="progress-bar" style="width: {{ getProficiencyPercentage($language_value->proficiency) }}%"></div>
                                            </div>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif
            </div>
            </div>




        </div>
    </div>
    </div>
    <div class="space100"></div>
</div>