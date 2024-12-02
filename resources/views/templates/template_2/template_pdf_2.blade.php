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
.temp-user-info3 {
    background: #e4a829;
    padding: 20px 60px;
    border-radius: 80px 0px 0px 80px;
    margin-top: 30px;
}
.temp-user-name3 h2 {
    font-size: 25px;
    color: #fff;
    text-transform: capitalize;
    font-weight: 800;
    line-height: 22px;
    margin-bottom: 5px;
}
.temp-user-address3 {
    text-align: right;
    color: #fff;
}
.temp-user-address3 h6 {
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0px;
}
.temp-user-address3 ul {
    margin: 0px;
    padding: 0px;
    list-style: none;
}
.temp-user-address3 ul li {
    display: inline-block;
    font-size: 14px;
    font-weight: 400;
    padding-left: 20px;
    position: relative;
}
.temp-user-address3 ul li:first-child::after {
    display: none;
} 
.temp-user-address3 ul li::after {
    content: "";
    position: absolute;
    left: 8px;
    top: 4px;
    width: 1px;
    height: 14px;
    background: #fff;
}
.templates3-leftrightspace {
    padding: 30px 60px;
}
.templates3-intro {
    margin-bottom: 30px;
}
.professionalsummary p{
    color: #000;
    font-size: 15px;
    font-weight: 800;
    margin-bottom: 10px;
}
.temp-exp-desc3 {
    padding-bottom: 10px;
}
.temp-personal-details3 {
    margin-bottom: 10px;
}
.temp-personal-details3 h6 {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    margin: 0px;
}
.temp-personal-details3 h6 span {
    margin-right: 10px;
}
.temp-heading3 {
    color: #e4a829;
    font-size: 18px;
    line-height: 19px;
    font-weight: 800;
    margin: 0px 0px 15px 0px;
    text-transform: capitalize;
    position: relative;
}
.temp-heading3 span {
    background: #fff;
    padding-right: 30px;
    z-index: 1;
    position: relative;
}
.temp-heading3::after {
    content: "";
    position: absolute;
    top: 9px;
    left: 0px;
    width: 100%;
    height: 3px;
    background: #e4a829;
    z-index: -1;
}
.temp-exp-desc3-main {
    padding-bottom: 10px;
}
.temp-exp-desc3-main h4 {
    color: #000;
    font-size: 15px;
    font-weight: 800;
    margin-bottom: 10px;
}
.temp-exp-desc3 p {
    color: #000;
    font-size: 14px;
    line-height: 19px;
    margin-bottom: 10px;
}
.temp-exp-title3 h3 {
    color: #000;
    font-size: 15px;
    font-weight: 800;
    margin-bottom: 10px;
}
.temp-exp-title3 h3 span {
    display: block;
    font-weight: 400;
}
.temp-exp-date3 h6 {
    font-size: 14px;
    font-weight: 500;
    color: #000;
    margin: 0px;
    text-align: right;
}
.temp-exp-title3 h3 a {
    font-weight: 400;
    color: #000;
    display: block;
    text-decoration: none !important;
}
.hobbieslist ul {
    margin-bottom: 10px;
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
    color: #e4a829;
}
.temp-exp-desclist3 .progress {
    width: 150px;
    height: 12px;
    background: none;
    border: 1px solid #e4a829;
    border-radius: 15px;
    overflow: hidden;
    position: absolute;
    right: 20px;
    top: 0px;
}
.temp-exp-desclist3 .progress .progress-bar {
    background: #e4a829;
    height: 12px;
}
.skillprogress {
    padding-right: 180px;
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
    top: 5px;
}
@if($template->color_code)

    .temp-user-info3.header_clr_chng {
        background-color: {{$template->color_code}};
    }
    .temp-heading3 {
        color: {{$template->color_code}};
    }
    .temp-heading3::after {
        background-color: {{$template->color_code}};
    }
    .temp-exp-desclist3 .progress {
        border: 1px solid {{$template->color_code}};
    }
    .temp-exp-desclist3 .progress .progress-bar {
        background-color:  {{$template->color_code}};
    }
@endif
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
    <div class="templates-design3">  
    
        <div class="temp-user-info3 header_clr_chng">
            <table>
                <tr>
                <td style="width: 40%;">
                    <div class="temp-user-name3">
                    <h2><b>{{@$user->first_name}} {{@$user->last_name}}</b></h2>
                    </div>
                </td>
                <td style="width: 60%;">
                    @php
                        $phone_white = public_path('assets/images/phone-w.png');
                        $mail_white = public_path('assets/images/mail-w.png');
                        $phone_image_data = file_get_contents($phone_white);
                        $mail_image_data = file_get_contents($mail_white);
                        
                        $phone_base64Image = 'data:image/' . pathinfo($phone_white, PATHINFO_EXTENSION) . ';base64,' . base64_encode($phone_image_data);
                        $mail_base64Image = 'data:image/' . pathinfo($mail_white, PATHINFO_EXTENSION) . ';base64,' . base64_encode($mail_image_data);
                        
                    @endphp
                    <div class="temp-user-address3">
                        <h6>{{@$user->address}} {{@$user->city ? ', '.@$user->city : ''}} {{@$user->country ? ', '.@$user->country : ''}} {{@$user->postal_code ? ', '.@$user->postal_code : ''}}</h6>
                        <ul>
                          <li>
                                @if(!empty(@$user->phone_number))
                                    <img src="{{ $phone_base64Image }}" style="width:15px;" class="image_icon" alt="Phone icon"> {{ @$user->phone_number }}
                                @endif
                            </li>
                            <li>
                                @if(!empty(@$user->email))
                                    <img src="{{ $mail_base64Image }}" style="width:15px;" class="image_icon" alt="Email icon"> {{ @$user->email }}
                                @endif
                            </li>
                        </ul>
                        </div>
                </td>
                </tr>
            </table>
        </div>

        <div class="templates3-leftrightspace"> 
          <div class="temp-exp-desc3rightmain">
           <div class="temp-exp-desc3rightmain-left">
             <table>  
                 <tr>
                     <td style="width: 100%;">
                    <div class="templates3-intro">
                        <h3 class="professionalsummary">{!! @$user->professional_summary !!}</h3>
                    </div>
                    </td>
                </tr>
            </table>  

            <div class="temp-exp-desc3  temp-personal-details3">
                @php
                    $dateOfBirth = \Carbon\Carbon::parse(@$user->date_of_birth);
                    $age = $dateOfBirth->diff(\Carbon\Carbon::now())->y;
                @endphp
                <h6><span>{{ $age ? $age. 'years old, ' : '' }}</span><span>{{@$user->driver_license ? 'Driving license '. @$user->driver_license : ''}}</span></h6> 
            </div>

            @if(@$employmentHistories && count(@$employmentHistories) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span>  <b>Professional Experience</b>  </span></h2>
                    @foreach($employmentHistories as $key => $value)
                        @php
                            $startDate = \Carbon\Carbon::parse($value->start_date)->format('F Y');
                            $endDate = $value->end_date ? \Carbon\Carbon::parse($value->end_date)->format('F Y') : 'Present';
                            $state = App\Models\State::where('id', $value->state_id)->first();
                        @endphp
                        <div class="temp-exp-desc3-main">
                            <table>
                             <tr>   
                               <td style="padding-right: 10px; width: 65%;">
                                <div class="temp-exp-title3">
                                    <h3><b>{{$value->company}}</b>
                                        <span>{{$value->city}} {{@$state->name ? ', '.$state->name : ''}}</span>
                                    </h3>
                                </div>
                                </td>
                                <td style="padding-left: 10px; width: 35%;">
                                <div class="temp-exp-date3">
                                    <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                </div>
                                </td> 
                             </tr>     
                            </table>
                            <h4><b>{{$value->job_title}}</b></h4>
                            {!! $value->description !!}
                        </div>
                    @endforeach
                </div>
            @endif

            @if(@$educations && count(@$educations) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span> <b>Education</b> </span></h2>
                    <div class="temp-exp-desc3-main">
                        @foreach($educations as $education_key => $education_value)
                            @php
                                $startDate = \Carbon\Carbon::parse($education_value->start_date)->format('F Y');
                                $endDate = $education_value->end_date?  \Carbon\Carbon::parse($education_value->end_date)->format('F Y') : 'Present';
                                $state = App\Models\State::where('id', $education_value->state_id)->first();
                            @endphp
                            <table>
                            <tr>
                                <td style="padding-right: 10px; width: 100%;">
                                    <div class="temp-exp-title3">
                                    <h6>{{$education_value->degree}}
                                        <span>{{$education_value->institution}}</span>
                                        <span>{{ $startDate }} - {{ $endDate }}</span>
                                    </h6>
                                    <h6>{{$education_value->city}} {{@$state->name ? ', '.$state->name : ''}}</h6>
                                    </div>
                                    <div class="description3">
                                    {!! $education_value->description !!}
                                    </div>
                                </td>
                                
                            </tr>
                            </table>
                            
                        @endforeach
                    </div>
                </div>
            @endif

            @if(@$internships && count(@$internships) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span> <b>Internships</b> </span></h2>
                    @foreach($internships as $internships_key => $internships_value)
                        @php
                             $startDate = \Carbon\Carbon::parse($internships_value->start_date)->format('F Y');
                                $endDate = $internships_value->end_date?  \Carbon\Carbon::parse($internships_value->end_date)->format('F Y') : 'Present';
                        @endphp
                        <div class="temp-exp-desc3-main">
                        <table>
                             <tr> 
                              <td style="padding-right: 10px; width: 65%;">
                                <div class="temp-exp-title3">
                                    <h3><b>{{$internships_value->company}}</b>
                                        <span>{{$internships_value->location}}</span>
                                    </h3>
                                </div>
                                </td>
                                <td style="padding-left: 10px; width: 35%;">
                                <div class="temp-exp-date3">
                                    <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                </div>
                                </td>
                            </tr>
                          </table>
                            {!! $internships_value->description !!}
                        </div>
                    @endforeach
                </div>
            @endif

            
            @if(@$certificates && count(@$certificates) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span> <b>Certifications</b> </span></h2>
                    @foreach($certificates as $certificates_key => $certificates_value)
                        @php
                            $issued_date = \Carbon\Carbon::parse($certificates_value->issued_date)->format('F Y');
                        @endphp
                        <div class="temp-exp-desc3-main">
                           <table>
                            <tr> 
                              <td style="padding-right: 10px; width: 65%;">
                                <div class="temp-exp-title3">
                                    <h3><b>{{$certificates_value->name}}</b>
                                        <span>{{$certificates_value->organization}}</span>
                                        <a href="{{$certificates_value->url}}" >{{$certificates_value->url}}</a>
                                    </h3>
                                </div>
                              </td>
                              <td style="padding-left: 10px; width: 35%;">
                                <div class="temp-exp-date3">
                                    <h6>{{ $issued_date }}</h6>
                                </div>
                              </td>
                            </tr>
                          </table>
                            {!! $certificates_value->description !!}
                        </div>
                    @endforeach
                </div>
            @endif

            @if(@$courses && count(@$courses) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span> <b>Courses</b> </span></h2>
                    @foreach($courses as $courses_key => $courses_value)
                        @php
                        $startDate = \Carbon\Carbon::parse($courses_value->start_date)->format('F Y');
                                $endDate = $courses_value->end_date?  \Carbon\Carbon::parse($courses_value->end_date)->format('F Y') : 'Present';
                        @endphp
                        <div class="temp-exp-desc3-main">
                            <table>
                             <tr> 
                              <td style="padding-right: 10px; width: 65%;">
                                <div class="temp-exp-title3">
                                    <h3><b>{{$courses_value->course}}</b>
                                        <span>{{$courses_value->institution}}</span>
                                    </h3>
                                </div>
                                </td>
                                <td style="padding-left: 10px; width: 35%;">
                                <div class="temp-exp-date3">
                                    <h6>{{ $startDate }} - {{ $endDate }}</</h6>
                                </div>
                            </td>
                            </tr>
                          </table>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(@$references && count(@$references) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span> <b>References</b> </span></h2>
                    <div class="temp-exp-desc3-main">
                        @foreach($references as $references_key => $references_value)
                             <table>
                                <tr> 
                                <td style="width: 100%;">
                                <div class="temp-exp-title3">
                                    <h3><b>{{$references_value->referent_company}}</b>
                                        <span>
                                            {{$references_value->referent_name}} 
                                            {{$references_value->referent_email ? ', '.$references_value->referent_email : ''}}
                                            {{$references_value->referent_phone_number ? ', '.$references_value->referent_phone_number : ''}}
                                        </span>
                                    </h3>
                                </div>
                                </td>
                                </tr> 
                            </table>
                        @endforeach
                    </div>
                </div>
            @endif

            @if(@$links && count(@$links) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span> <b>Links</b> </span></h2>
                    <div class="temp-exp-desc3-main">
                        @foreach($links as $links_key => $links_value)
                            <table>
                                <tr> 
                                <td style="width: 100%;">
                                <div class="temp-exp-title3">
                                    <h6>{{$links_value->link_title}}
                                        <span>
                                            {{$links_value->url}} 
                                        </span>
                                    </h6>
                                </div>
                                </td>
                                </tr> 
                            </table>
                        @endforeach
                    </div>
                </div>
            @endif

            @if(@$customSections && count(@$customSections) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span<b>Custom Section</b> </span></h2>
                    <div class="temp-exp-desc3-main">
                        @foreach($customSections as $customSections_key => $customSections_value)
                           <table>
                                <tr> 
                                <td style="width: 100%;">
                                <div class="temp-exp-title3">
                                    <h3><b>{{$customSections_value->header}}</b>
                                        <span>
                                            {{$customSections_value->sub_header}} 
                                        </span>
                                    </h3>
                                </div>
                            </td>
                                </tr> 
                            </table>
                            {!! $customSections_value->description !!}
                        @endforeach
                    </div>
                </div>
            @endif


            @if(@$user->hobbies)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span> <b>Hobbies</b> </span></h2>
                    <div class="temp-exp-desc3-main hobbieslist">
                        {!! @$user->hobbies !!}
                    </div>
                </div>
            @endif
            </div>
            
            <div class="temp-exp-desc3rightmain-right">
            @if(@$skills && count(@$skills) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span> <b>Key Skills</b> </span></h2>
                    <div class="temp-exp-desc3-main">
                        <div class="temp-exp-desclist3"> 
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
                </div>
            @endif

            @if(@$languages && count(@$languages) > 0)
                <div class="temp-exp-desc3">
                    <h2 class="temp-heading3"><span> <b>Languages</b> </span></h2>
                    <div class="temp-exp-desc3-main">
                        <div class="temp-exp-desclist3"> 
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
                                                    <div class="progress-bar" style="width: {{ getProficiencyPercentage($language_value->proficiency) }}%"></div>
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
                </div>
            @endif
            </div>
            </div>




        </div>
    </div>
</div>