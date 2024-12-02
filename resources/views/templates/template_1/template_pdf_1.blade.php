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

.temp-user-info {
    background: #4d5279;
    padding: 30px;
}
.temp-user-img {
    position: relative;
    padding-left: 100px;
    min-height: 85px;
}
.temp-user-img img.img-fluid {
    width: 85px;
    height: 85px;
    border-radius: 100%;
    position: absolute;
    left: 0px;
    top: 0px;
}
.temp-user-name h2 {
    font-size: 29px;
    color: #fff;
    text-transform: capitalize;
    font-weight: 800;
    margin: 0px;
}
.temp-user-address {
    color: #fff;
    text-align: right;
    padding-left: 50px;
}
.temp-user-address h6 {
    font-size: 14px;
    font-weight: 400;
    margin: 0px 0px 10px 0px;
}
.temp-user-address p {
    margin: 0px;
    font-size: 14px;
    font-weight: 400;
}
.temp-personal-details h6 {
    font-size: 16px;
    font-weight: 500;
    color: #000;
    margin: 0px;
}
.temp-personal-details h6 span {
    margin-right: 10px;
    display: inline-block;
}
.temp-exp-desc {
    margin-bottom: 20px;
}
.professionalsummary p{
    color: #000;
    font-size: 15px;
    font-weight: 800;
    margin-bottom: 20px;
}
.temp-heading {
    color: #4d5279;
    font-size: 24px;
    line-height: 24px;
    font-weight: 700;
    margin: 0px 0px 10px 0px;
    text-transform: capitalize;
}
.temp-body-right ul {
    margin: 0px 0px 20px 0px;
    padding-left: 16px;
}
.temp-body-right ul li {
    color: #000;
    font-size: 14px;
    line-height: 19px;
    margin-bottom: 7px;
}
.temp-body-right ul li::marker {
    color: #4d5279;
}

.temp-body-left h3 {
    color: #000;
    font-size: 15px;
    font-weight: 800;
    margin-bottom: 10px;
}
.temp-body-left h3 span {
    display: block;
    font-weight: 400;
}
.temp-exp-date h6 {
    font-size: 14px;
    font-weight: 400;
    color: #000;
    margin: 0px;
    text-align: right;
}
.temp-exp-desc h4 {
    color: #000;
    font-size: 15px;
    font-weight: 800;
    margin-bottom: 5px;
}
.temp-exp-desc p {
    color: #000;
    font-size: 14px;
    line-height: 19px;
    margin-bottom: 15px;
}
.temp-body-left h3 a {
    font-weight: 400;
    color: #000;
    display: block;
    text-decoration: none !important;
}
.temp-exp-desc ul {
    margin-bottom: 15px;
    padding-left: 20px;
}
.temp-exp-desc li {
    color: #000;
    font-size: 14px;
    line-height: 19px;
    margin-bottom: 10px;
}
.temp-exp-desc li::marker {
    color: #4d5279;
}
.relativediv {
    position: relative;
}
.image_icon {
    position: relative;
    top: 5px;
}
/*Anshuman Design */
.page-break {
    page-break-after: always;
}

/* .template_design p, .template_design h1, .template_design h2, .template_design h3, .template_design h4, .template_design h5, .template_design h6, .template_design li, .template_design span{
    font-family:{{$template->font_family}}
} */
.header_clr_chng{
    background-color:{{$template->color_code}}
}
.temp-heading, .clr_span{
    color:{{$template->color_code}}
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
    <div class="templates-design">
        <div class="temp-user-info header_clr_chng">
            <table>
                <tr>
                    <td style="width: 50%;">
                        <div class="temp-user-img">
                            @if(!empty($user->profile_image) && $imageData = @file_get_contents($user->profile_image))
                            <img src="data:image/jpeg;base64,{{ base64_encode($imageData) }}" class="img-fluid" alt="">
                            @else
                                <img src="{{ asset('assets/images/no-preview.jpeg') }}" class="img-fluid" alt="Profile Image">
                            @endif
                            <div class="temp-user-name">
                                <h2><b>{{@$user->first_name}} {{@$user->last_name}}</b></h2>
                            </div>
                        </div>
                    </td>
                    <td style="width: 50%;">
                        @php
                            $phone_white = public_path('assets/images/phone-w.png');
                            $mail_white = public_path('assets/images/mail-w.png');
                            $phone_image_data = file_get_contents($phone_white);
                            $mail_image_data = file_get_contents($mail_white);
                            
                            $phone_base64Image = 'data:image/' . pathinfo($phone_white, PATHINFO_EXTENSION) . ';base64,' . base64_encode($phone_image_data);
                            $mail_base64Image = 'data:image/' . pathinfo($mail_white, PATHINFO_EXTENSION) . ';base64,' . base64_encode($mail_image_data);
                        
                        @endphp
                        <div class="temp-user-address">
                        <h6>{{@$user->address}}{{@$user->city ? ', '.@$user->city : ''}}{{@$user->country ? ', '.@$user->country : ''}} {{@$user->postal_code ? @$user->postal_code : ''}}</h6>
                            <p>
                                @if(!empty(@$user->phone_number))
                                    <img src="{{ $phone_base64Image }}" style="width:15px;" class="image_icon" alt="Phone icon"> {{ @$user->phone_number }}
                                @endif
                            </p>
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
       
        
        
        <div class="temp-body relativediv">
            <div class="rightdiv" style="position: absolute;right: 0px;top: 0px;width:230px; height:90%; background: #f5f5f5;"">
           @if(count($skills) > 0 || count(@$languages) > 0) 
                        
                            <div class="temp-body-right" style="padding: 30px;">
                                @if(@$skills && count(@$skills) > 0)
                                    <h2 class="temp-heading"><b>Key Skills</b></h2>
                                    <ul>
                                        @foreach($skills as $skill_key => $skill_value)
                                            <li>{{$skill_value->skill}}  <span class="clr_span" >{{$skill_value->level ? '('.$skill_value->level. ')' : ''}}</span></li>
                                        @endforeach
                                    </ul>
                                @endif
                
                                @if(@$languages && count(@$languages) > 0)
                                    <h2 class="temp-heading"><b>Languages</b></h2>
                                    <ul>
                                        @foreach($languages as $languages_key => $languages_value)
                                            <li>{{$languages_value->language}}  <span class="clr_span">{{$languages_value->proficiency ? '('.$languages_value->proficiency. ')' : ''}}</span></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div> 
                         
                    @endif
                    </div>
            <!--<table>-->
            <!--    <tr>-->
            <!--        <td style="width: 70%;padding: 30px;">-->
                        <div class="temp-body-left" style="width: 60%;padding: 30px;">    
                        <div class="temp-exp-desc temp-personal-details">
                                @php
                                    $dateOfBirth = \Carbon\Carbon::parse(@$user->date_of_birth);
                                    $age = $dateOfBirth->diff(\Carbon\Carbon::now())->y;
                                @endphp
                                <h6><span>{{ $age ? $age. 'years old, ' : '' }}</span><span>{{@$user->driver_license ? 'Driving license '. @$user->driver_license : ''}}</span></h6> 
                                <h3 class="professionalsummary">{!! @$user->professional_summary !!}</h3>
                            </div>
                           
                                @if(@$educations && count(@$educations) > 0)
                                    <div class="temp-exp-desc">
                                        <h2 class="temp-heading"><b>Education</b></h2>
                                        @foreach($educations as $education_key => $education_value)
                                            @php
                                                $startDate = \Carbon\Carbon::parse($education_value->start_date)->format('F Y');
                                                $endDate = $education_value->end_date?  \Carbon\Carbon::parse($education_value->end_date)->format('F Y') : 'Present';
                                                $state = App\Models\State::where('id', $education_value->state_id)->first();
                                            @endphp
                                            <table>
                                                <tr>
                                                <td class="temp-exp-title" style="padding-right: 10px;width: 65%;">
                                                    <h3><b>{{$education_value->degree}}</b>
                                                    <span>{{$education_value->institution}}, {{$education_value->city}} {{@$state->name ? ', '.$state->name : ''}}</span></h3>
                                                </td>
                                                <td class="temp-exp-date" style="padding-left: 10px;width: 35%;">
                                                    <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                                </td> 
                                                </tr>
                                            </table>
                                            {!! $education_value->description !!}
                                        @endforeach
                                    </div>
                                @endif
                                @if(@$employmentHistories && count(@$employmentHistories) > 0)
                                    <div class="temp-exp-desc">
                                        <h2 class="temp-heading"><b>Professional Experience</b></h2>
                                        @foreach($employmentHistories as $key => $value)
                                            @php
                                                $startDate = \Carbon\Carbon::parse($value->start_date)->format('F Y');
                                                $endDate = $value->end_date ? \Carbon\Carbon::parse($value->end_date)->format('F Y') : 'Present';
                                                $state = App\Models\State::where('id', $value->state_id)->first();
                                            @endphp
                                            <table>
                                                <tr>
                                                    <td class="temp-exp-title" style="padding-right: 10px;width: 65%;">
                                                        <h3><b>{{$value->company}}</b>
                                                        <span>{{$value->city}} {{@$state->name ? ', '.$state->name : ''}} </span></h3>
                                                    </td>
                                                    <td class="temp-exp-date" style="padding-left: 10px;width: 35%;">
                                                        <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                                    </td>
                                                </tr>
                                            </table>
                                            <h4><b>{{$value->job_title}}</b></h4>
                                            {!! $value->description !!}
                                        @endforeach
                                    </div>
                                @endif
                            @if( @$courses &&  count(@$courses) > 0)
                                <div class="temp-exp-desc">
                                    <h2 class="temp-heading"><b>Courses</b></h2>
                                    @foreach($courses as $courses_key => $courses_value)
                                        @php
                                            $startDate = \Carbon\Carbon::parse($courses_value->start_date)->format('F Y');
                                            $endDate =$courses_value->end_date ?  \Carbon\Carbon::parse($courses_value->end_date)->format('F Y') : 'Present';
                                        @endphp
                                        <table>
                                            <tr>
                                            <td class="temp-exp-title" style="padding-right: 10px;width: 65%;">
                                                <h3><b>{{$courses_value->course}}</b>
                                                <span>{{$courses_value->institution}}</span></h3>
                                            </td>
                                            <td class="temp-exp-date" style="padding-left: 10px;width: 35%;">
                                                <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                            </td>
                                            </tr>
                                        </table>
                                    @endforeach
                                </div>
                            @endif
                            
                            @if(@$internships &&  count(@$internships) > 0)
                                <div class="temp-exp-desc">
                                    <h2 class="temp-heading"><b>Internships</b></h2>
                                    @foreach($internships as $internships_key => $internships_value)
                                        @php
                                            $startDate = \Carbon\Carbon::parse($internships_value->start_date)->format('F Y');
                                            $endDate =$internships_value->end_date ?  \Carbon\Carbon::parse($internships_value->end_date)->format('F Y') : 'Present';
                                        @endphp
                                        <table>
                                            <tr>
                                            <td class="temp-exp-title" style="padding-right: 10px;width: 65%;">
                                                <h3><b>{{$internships_value->company}}</b>
                                                <span>{{$internships_value->location}}</span></h3>
                                            </td>
                                            <td class="temp-exp-date" style="padding-left: 10px;width: 35%;">
                                                <h6>{{ $startDate }} - {{ $endDate }}</h6>
                                            </td> 
                                            </tr>
                                        </table>
                                        <h4><b>{{$internships_value->job_title}}</b></h4>
                                        {!! $internships_value->description !!}
                                    @endforeach
                                </div>
                            @endif
                            
                            @if( @$certificates &&  count(@$certificates) > 0)
                                <div class="temp-exp-desc">
                                    <h2 class="temp-heading"><b>Certificates</b></h2>
                                    @foreach($certificates as $certificates_key => $certificates_value)
                                        @php
                                            $issued_date = \Carbon\Carbon::parse($certificates_value->issued_date)->format('F Y');
                                        @endphp
                                        <table>
                                            <tr>
                                            <td class="temp-exp-title" style="padding-right: 10px;width: 65%;">
                                                <h3><b>{{$certificates_value->name}}</b>
                                                    <span>{{$certificates_value->organization}}</span>
                                                    <a href="{{$certificates_value->url}}" >{{$certificates_value->url}}</a>
                                                </h3>
                                            </td>
                                            <td class="temp-exp-date" style="padding-left: 10px;width: 35%;">
                                                <h6>{{ $issued_date }}</h6>
                                            </td>    
                                            </tr>
                                        </table> 
                                        {!! $certificates_value->description !!}
                                    @endforeach
                                </div>
                            @endif
                            @if(@$references &&  count(@$references) > 0 || @$user->hobbies || @$links &&  count(@$links) > 0 || @$customSections &&  count(@$customSections) > 0)
                              
                                @if( @$references &&  count(@$references) > 0)
                                    <div class="temp-exp-desc">
                                        <h2 class="temp-heading"><b>References</b></h2>
                                        @foreach($references as $references_key => $references_value)
                                            <table>
                                                <tr>
                                                    <td class="temp-exp-title" style="padding-right: 10px;width: 100%;">
                                                        <h3><b>{{$references_value->referent_company}}</b>
                                                            <span>
                                                                {{$references_value->referent_name}} 
                                                                {{$references_value->referent_email ? ', '.$references_value->referent_email : ''}}
                                                                {{$references_value->referent_phone_number ? ', '.$references_value->referent_phone_number : ''}}
                                                            </span>
                                                        </h3>
                                                    </td>
                                                </tr>
                                            </table>
                                        @endforeach
                                    </div>
                                @endif
                                
                                @if( @$user->hobbies)
                                    <div class="temp-exp-desc">
                                        <h2 class="temp-heading"><b>Hobbies</b></h2>
                                        {!! @$user->hobbies !!}
                                    </div>
                                @endif
                                @if( @$links &&  count(@$links) > 0)
                                    <div class="temp-exp-desc">
                                        <h2 class="temp-heading"><b>Links</b></h2>
                                        @foreach($links as $links_key => $links_value)
                                            <table>
                                                <tr>
                                                <td class="temp-exp-title" style="padding-right: 10px;width: 100%;">
                                                    <h3><b>{{$links_value->link_title}}</b>
                                                        <span>{{$links_value->url}}</span>
                                                    </h3>
                                                </td>
                                                </tr>
                                            </table>
                                        @endforeach
                                    </div>
                                @endif
                                @if( @$customSections &&  count(@$customSections) > 0)
                                    <div class="temp-exp-desc">
                                        <h2 class="temp-heading"><b>Custom Section</b></h2>
                                        @foreach($customSections as $customSections_key => $customSections_value)
                                            <table>
                                                <tr>
                                                <td class="temp-exp-title" style="padding-right: 10px;width: 100%;">
                                                    <h3><b>{{$customSections_value->header}}</b>
                                                    <span>{{$customSections_value->sub_header}}</span></h3>
                                                </td>
                                                </tr>
                                            </table>
                                            {!! $customSections_value->description !!}
                                        @endforeach
                                    </div>
                                @endif
                            @endif
                                
                                

                            
                            
                            
                            
                            
                            
                            
                        </div>  
            <!--        </td>-->
                  
                       
            <!--    </tr>-->
            <!--</table> -->
            
        </div>
    </div>
</div>