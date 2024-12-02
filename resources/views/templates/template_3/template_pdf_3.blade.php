<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<style type="text/css">
h1,h2,h3,h4,h5,h6,p {
   margin: 0px 0px 5px 0px; 
}
table {
  border-collapse: collapse;
  width: 100%;
  vertical-align: top;
}
 
td, th {
  text-align: left;
  vertical-align: top;
  border-collapse: collapse;
}
.temp-user-info2 {
    background: #2f497e;
    padding: 20px 100px;
    margin-top: 30px;
    margin-bottom: 15px;
}
.temp-user-name2 {
    padding-left: 20px;
}
.temp-user-name2 h2 {
    font-size: 29px;
    color: #fff;
    text-transform: capitalize;
    font-weight: 800;
}
.temp-user-img2 img.img-fluid {
    width: 100px;
    height: 100px;
    border-radius: 100%;
    margin-top: -50px;
    box-shadow: 0px -1px 4px #747474;
}
.templates2-leftrightspace {
    padding: 0px 100px;
}
.temp-user-address2 {
    color: #000;
}
.temp-user-address2 h6 {
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0px;
}
.temp-user-address2 p {
    margin: 0px;
    font-size: 14px;
    font-weight: 400;
}
.temp-user-address22 {
    color: #000;
    text-align: right;
}
.temp-user-address22 p {
    margin: 0px;
    font-size: 14px;
    font-weight: 400;
}
.templates2addressrow {
    margin-bottom: 20px;
}
.templates2border {
    border-bottom: 2px solid #2f497e;
    padding-bottom: 10px;
    margin-bottom: 20px;
}
.professionalsummary p {
    color: #000;
    font-size: 14px;
    font-weight: 700;
    margin-bottom: 10px;
}
.temp-personal-details2 h6 {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    margin: 0px;
}
.temp-personal-details2 h6 span {
    margin-right: 10px;
}
.temp-heading2 {
    color: #2f497e;
    font-size: 18px;
    line-height: 19px;
    font-weight: 800;
    margin: 0px 0px 10px 0px;
    text-transform: capitalize;
}
.temp-exp-desc2-left h6 {
    color: #000;
    font-size: 14px;
    line-height: 17px;
    margin-bottom: 0px;
    font-weight: 500;
}
.temp-exp-title2 h3 {
    color: #000;
    font-size: 14px;
    font-weight: 800;
    margin-bottom: 10px;
}
.temp-exp-title2 h3 span {
    display: block;
    font-weight: 400;
}
.temp-exp-title22 {
    text-align: right;
}
.temp-exp-title22 h3 {
    color: #000;
    font-size: 14px;
    font-weight: 800;
    margin-bottom: 10px;
}
.temp-exp-desc2 p {
    color: #000;
    font-size: 14px;
    line-height: 19px;
    margin-bottom: 10px;
}
.temp-exp-title2 h3 a {
    display: block;
    font-weight: 400;
    color: #000;
    text-decoration: none !important;
}
.hobbieslist ul {
    margin-bottom: 0px;
    padding-left: 20px;
}
.hobbieslist li {
    color: #000;
    font-size: 14px;
    line-height: 17px;
    margin-bottom: 10px;
    font-weight: 500;
}
.hobbieslist li::marker {
    color: #2f497e;
}

.temp-exp-desclist2 .progress {
    width: 110px;
    height: 12px;
    background: none;
    border: 1px solid #2f497e;
    border-radius: 0px;
    overflow: hidden;
    position: absolute;
    right: 20px;
    top: 0px;
}
.temp-exp-desclist2 .progress .progress-bar {
    background: #2f497e;
    height: 12px;
}
.skillprogress {
    padding-right: 140px;
    position: relative;
    min-height: 15px;
    padding-bottom: 10px;
    padding-right: 25px;
}
.skillprogress span {
    display: block;
    word-break: break-all;
    width: 120px;
    color: #000;
    font-size: 14px;
    line-height: 17px;
    font-weight: 500;
}
.image_icon {
    position: relative;
    top: 3px;
}
.header_clr_chng{
    background-color:{{$template->color_code}}
}
.temp-heading2{
    color:{{$template->color_code}}
}
.temp-heading2::after {
    background: {{$template->color_code}}
}
.temp-exp-desclist2 .progress {
    border: 1px solid {{$template->color_code}}
}
.temp-exp-desclist2 .progress .progress-bar {
    background: {{$template->color_code}}
}
.templates2border {
    border-bottom: 2px solid {{$template->color_code}}
}
@if($template->line_height === 'Dense'){
    .template_design p {
        line-height: 25px;
    }
}
@elseif($template->line_height === 'Normal'){
    .template_design p {
        line-height: 20px;
    }
}@elseif($template->line_height === 'Loose'){
    .template_design p {
        line-height: 30px;
    }
}@endif{}
@if($template->font_family == 'cursive')
.template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span{
  font-family: "Kalam", cursive;
  font-weight: 300;
  font-style: normal;
}
@elseif($template->font_family == 'monospace')
.template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span{
  font-family: "IBM Plex Mono", monospace;
  font-weight: 400;
  font-style: normal;
}
@elseif($template->font_family == 'system-ui')
.template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span{
  font-family: system-ui;
   font-weight: 400;
  font-style: normal;
}
@endif
</style>


<div class="boxdesign template_design">
    <div class="templates-design2">
        <div class="temp-user-info2 header_clr_chng">
             <table>
                  <tr>
                     <td style="width: 30%;">
                    <div class="temp-user-img2">
                        @if(!empty($user->profile_image) && $imageData = @file_get_contents($user->profile_image))
                            <img src="data:image/jpeg;base64,{{ base64_encode($imageData) }}" class="img-fluid" alt="">
                        @else
                            <img src="{{ asset('assets/images/no-preview.jpeg') }}" class="img-fluid" alt="">
                        @endif

                        <!--@if(@$user->profile_image)-->
                        <!--    <img src="{{@$user->profile_image ? url('/').'/'. @$user->profile_image : asset('assets/images/no-preview.jpeg')}}" class="img-fluid" alt="">-->
                        <!--@endif-->
                        </div>
                        </td>
                        <td style="width: 70%;">
                        <div class="temp-user-name2">
                            <h2><b>{{@$user->first_name}} {{@$user->last_name}}</b></h2>
                        </div>
                    </td>
               </tr>
            </table>
        </div>
        
        <div class="templates2-leftrightspace">
            <div class="templates2addressrow">
                @php
                    $phone_white = public_path('assets/images/phone.png');
                    $mail_white = public_path('assets/images/mail.png');
                    $phone_image_data = file_get_contents($phone_white);
                    $mail_image_data = file_get_contents($mail_white);
                    
                    $phone_base64Image = 'data:image/' . pathinfo($phone_white, PATHINFO_EXTENSION) . ';base64,' . base64_encode($phone_image_data);
                    $mail_base64Image = 'data:image/' . pathinfo($mail_white, PATHINFO_EXTENSION) . ';base64,' . base64_encode($mail_image_data);
                    
                @endphp
              <table>
                   <tr>
                <td style="padding-right: 10px; width: 65%;">
                    <div class="temp-user-address2">
                        <h6>{{@$user->address}} {{@$user->city ? ', '.@$user->city : ''}} {{@$user->country ? ', '.@$user->country : ''}} {{@$user->postal_code ? ', '.@$user->postal_code : ''}}</h6>
                        <p>
                            @if(!empty(@$user->phone_number))
                                <img src="{{ $phone_base64Image }}" style="width:15px;" class="image_icon" alt="Phone icon"> {{ @$user->phone_number }}
                            @endif
                        </p>
                    </div>
                </td>
                <td style="padding-left: 10px; width: 35%;">
                    <div class="temp-user-address22">
                        <p>
                            @if(!empty(@$user->email))
                                <img src="{{ $mail_base64Image }}" style="width:15px;" class="image_icon" alt="Email icon"> {{ @$user->email }}
                            @endif
                        </p>
                    </div>
                </td>
                </tr>
                 </table>
            </div>
            
            <div class="temp-exp-desc2rightmain">
                <div class="temp-exp-desc2rightmain-left">
            <div class="templates2-intro templates2border">
                <h3 class="professionalsummary" style="font-weight:bold !important;">
                   {!! @$user->professional_summary !!}
                </h3>
            </div>
            @php
                $dateOfBirth = \Carbon\Carbon::parse(@$user->date_of_birth);
                $age = $dateOfBirth->diff(\Carbon\Carbon::now())->y;
            @endphp
            @if($age || @$user->driver_license)
            <div class="temp-exp-desc2 templates2border temp-personal-details2">
                <h6><span>{{ $age ? $age. 'years old, ' : '' }}</span><span>{{@$user->driver_license ? 'Driving license '. @$user->driver_license : ''}}</span></h6> 
            </div>
            @endif
            @if(@$employmentHistories && count(@$employmentHistories) > 0)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b>Professional Experience</b></h2>
                    @foreach($employmentHistories as $key => $value)
                        @php
                            $startDate = \Carbon\Carbon::parse($value->start_date)->format('F Y');
                            $endDate = $value->end_date ? \Carbon\Carbon::parse($value->end_date)->format('F Y') : 'Present';
                            $state = App\Models\State::where('id', $value->state_id)->first();
                        @endphp
                        <div class="temp-exp-desc2-main">
                            <table>
                            <tr>    
                            <td style="width: 25%; padding-right: 10px;">
                            <div class="temp-exp-desc2-left">
                                <h6>{{ $startDate }} - {{ $endDate }}</h6>
                            </div>
                            </td>
                            <td style="width: 75%; padding-left: 10px;">
                            <div class="temp-exp-desc2-right">
                                <table>
                                    <tr>
                                    <td style="width: 65%; padding-right: 10px;">
                                    <div class="temp-exp-title2">
                                        <h3><b>{{$value->company}}</b>
                                        <span>{{$value->city}} {{@$state->name ? ', '.$state->name : ''}}</span></h3>
                                    </div>
                                    </td>
                                   <td style="width: 35%; padding-left: 10px;">
                                    <div class="temp-exp-title22">
                                        <h3><b>{{$value->job_title}}</b></h3>
                                    </div>
                                   </td>
                                </tr>
                                </table>
                                {!! $value->description !!}
                            </div>
                            </td>
                            </tr> 
                            </table>
                        </div>
                    @endforeach
                </div>
            @endif

            @if(@$educations && count(@$educations) > 0)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b><b>Education</b></h2>
                    @foreach($educations as $education_key => $education_value)
                        @php
                            $startDate = \Carbon\Carbon::parse($education_value->start_date)->format('F Y');
                            $endDate = $education_value->end_date?  \Carbon\Carbon::parse($education_value->end_date)->format('F Y') : 'Present';
                            $state = App\Models\State::where('id', $education_value->state_id)->first();
                        @endphp
                        <div class="temp-exp-desc2-main">
                            <table>
                                <tr>    
                            <td style="width: 25%; padding-right: 10px;">
                            <div class="temp-exp-desc2-left">
                                <h6>{{ $startDate }} - {{ $endDate }}</h6>
                            </div>
                             </td>
                            <td style="width: 75%; padding-left: 10px;">
                            <div class="temp-exp-desc2-right">
                               
                                    <div class="temp-exp-title2">
                                        <h3><b>{{$education_value->degree}}</b>
                                        <span>{{$education_value->institution}}, {{$education_value->city}} {{@$state->name ? ', '.$state->name : ''}}</span></h3>
                                    </div>
                               
                                {!! $education_value->description !!}
                            </div>
                            </td>
                            </tr>
                            </table>
                        </div>
                    @endforeach
                </div>
            @endif

            @if(@$internships && count(@$internships) > 0)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b>Internships</b></h2>
                    @foreach($internships as $internships_key => $internships_value)
                        @php
                            $startDate = \Carbon\Carbon::parse($internships_value->start_date)->format('F Y');
                            $endDate = $internships_value->end_date?  \Carbon\Carbon::parse($internships_value->end_date)->format('F Y') : 'Present';
                        @endphp
                        <div class="temp-exp-desc2-main">
                            <table>
                            <tr>    
                            <td style="width: 25%; padding-right: 10px;">
                            <div class="temp-exp-desc2-left">
                                <h6>{{ $startDate }} - {{ $endDate }}</h6>
                            </div>
                             </td>
                            <td style="width: 75%; padding-left: 10px;">
                            <div class="temp-exp-desc2-right">
                                 <table>
                                    <tr>
                                    <td style="width: 65%; padding-right: 10px;">
                                    <div class="temp-exp-title2">
                                        <h3><b>{{$internships_value->company}}</b>
                                        <span>{{$internships_value->location}}</span></h3>
                                    </div>
                                    </td>
                                   <td style="width: 35%; padding-left: 10px;">
                                    <div class="temp-exp-title22">
                                        <h3><b>{{$internships_value->job_title}}</b></h3>
                                    </div>
                                    </td>
                                </tr>
                                </table>
                                {!! $internships_value->description !!}
                            </div>
                             </td>
                            </tr> 
                            </table>
                        </div>
                    @endforeach
                </div>
            @endif
            
            @if(@$courses && count(@$courses) > 0)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b>Courses</b></h2>
                    @foreach($courses as $courses_key => $courses_value)
                        @php
                            $startDate = \Carbon\Carbon::parse($courses_value->start_date)->format('F Y');
                            $endDate = $courses_value->end_date?  \Carbon\Carbon::parse($courses_value->end_date)->format('F Y') : 'Present';
                        @endphp
                        <div class="temp-exp-desc2-main">
                             <table>
                                <tr>    
                            <td style="width: 25%; padding-right: 10px;">
                            <div class="temp-exp-desc2-left">
                                <h6>{{ $startDate }} - {{ $endDate }}</h6>
                            </div>
                             </td>
                            <td style="width: 75%; padding-left: 10px;">
                            <div class="temp-exp-desc2-right">
                                    <div class="temp-exp-title2">
                                        <h3><b>{{$courses_value->course}}</b>
                                        <span>{{$courses_value->institution}}</span></h3>
                                    </div>
                            </div>
                            </td>
                            </tr>
                            </table>
                        </div> 
                    @endforeach
                </div>
            @endif

            @if(@$certificates && count(@$certificates) > 0)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b>Certificates</b></h2>
                    @foreach($certificates as $certificates_key => $certificates_value)
                        @php
                            $issued_date = \Carbon\Carbon::parse($certificates_value->issued_date)->format('F Y');
                        @endphp
                        <div class="temp-exp-desc2-main">
                            <table>
                                <tr>    
                            <td style="width: 25%; padding-right: 10px;">
                            <div class="temp-exp-desc2-left">
                                <h6>{{ $issued_date }}</h6>
                            </div>
                             </td>
                            <td style="width: 75%; padding-left: 10px;">
                            <div class="temp-exp-desc2-right">
                                    <div class="temp-exp-title2">
                                        <h3><b>{{$certificates_value->name}}</b>
                                            <span>{{$certificates_value->organization}}</span>
                                            <a href="{{$certificates_value->url}}" >{{$certificates_value->url}}</a>
                                        </h3>
                                    </div>
                                {!! $certificates_value->description !!}
                            </div>
                             </td>
                            </tr>
                            </table>
                        </div>
                    @endforeach
                </div>
            @endif

            @if( @$user->hobbies)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b>Hobbies</b></h2>
                    <div class="temp-exp-desc2-main">
                        <div class="temp-exp-desc2-right hobbieslist">
                            {!! $user->hobbies !!}
                        </div>
                    </div>
                </div>
            @endif

            @if(@$references && count(@$references) > 0)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b>References</b></h2>
                    @foreach($references as $references_key => $references_value)
                        <div class="temp-exp-desc2-main">
                          <div class="temp-exp-title2">
                                <h3><b>{{$references_value->referent_company}}</b>
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
                
            @if(@$links && count(@$links) > 0)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b>Links</b></h2>
                    @foreach($links as $links_key => $links_value)
                        <div class="temp-exp-desc2-main">
                            <div class="temp-exp-title2">
                                <h3><b>{{$links_value->link_title}}</b>
                                    <span>
                                        {{$links_value->url}} 
                                    </span>
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            @if(@$customSections && count(@$customSections) > 0)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b>Custom Section</b></h2>
                    @foreach($customSections as $customSections_key => $customSections_value)
                        <div class="temp-exp-desc2-main">
                                <div class="temp-exp-title2">
                                    <h3><b>{{$customSections_value->header}}</b>
                                        <span>{{$customSections_value->sub_header}}</span>
                                    </h3>
                                </div>
                            {!! $customSections_value->description !!}
                        </div>
                    @endforeach
                </div>
            @endif
            </div>
            <div class="temp-exp-desc2rightmain-right">
            @if(@$skills && count(@$skills) > 0)
                <div class="temp-exp-desc2 templates2border">
                    <h2 class="temp-heading2"><b>Key Skills</b></h2>
                    <div class="temp-exp-desclist2"> 
                        <table>
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
                                @if($loop->iteration % 2 == 1)
                                        <tr>
                                    @endif
                                <td class="skillprogress" style="width: 50%;">
                                    <span>{{ $skill_value->skill }}</span>
                                    @if($skill_value->level)
                                        <div class="progress">
                                            <div class="progress-bar" style="width: {{ getSkillWidth($skill_value->level) }}%"></div>
                                        </div>
                                    @endif
                                    </td>
                               @if($loop->iteration % 2 == 0 || $loop->last)
                                        </tr>
                                    @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            @endif

            @if(@$languages && count(@$languages) > 0)
                <div class="temp-exp-desc2 templates2borderlast">
                    <h2 class="temp-heading2"><b>Languages</b></h2>
                    <div class="temp-exp-desclist2"> 
                       <table>
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
                               @if($loop->iteration % 2 == 1)
                                        <tr>
                                    @endif
                                <td class="skillprogress" style="width: 50%;">
                                    <span>{{$language_value->language}} {{$language_value->proficiency ? '('.$language_value->proficiency. ')' : ''}}</span>
                                    @if($language_value->proficiency)
                                        <div class="progress">
                                            <div class="progress-bar" style="width:{{ getProficiencyPercentage($language_value->proficiency) }}%"></div>
                                        </div>
                                    @endif
                                </td>
                                @if($loop->iteration % 2 == 0 || $loop->last)
                                        </tr>
                                    @endif
                            @endforeach
                        </table>
                    </div>
                </div>
            @endif
            </div>
            </div>
        </div>
    </div>
</div>
