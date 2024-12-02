@if(auth()->guard('web')->user())
    @php 
        $user = App\Models\User::where('id', auth()->guard('web')->user()->id)->first();
        $employmentHistories = $user->employmentHistories ? $user->employmentHistories : [];
        $educations = $user->educations ? $user->educations : [];
        $internships = $user->internships ? $user->internships : [];
        $courses = $user->courses ? $user->courses : [];
        $references = $user->references ? $user->references : [];
        $links = $user->links ? $user->links : [];
        $customSections = $user->customSections ? $user->customSections : [] ;
        $skills = $user->skills ? $user->skills : [];
        $languages = $user->languages ? $user->languages : [];
        $certificates = $user->certificates ? $user->certificates : [];
    @endphp
    @if(count($skills) == 0)
        <li class="check_exist"><button type="button" class="btn additionalbtn" id="side_skills">Skills<i class="la la-plus"></i></button></li>
    @endif
    @if(count($internships) == 0)
        <li class="check_exist"><button type="button" class="btn additionalbtn" id="side_internships">Internships<i class="la la-plus"></i></button></li>
    @endif
    @if(count($certificates) == 0)
        <li class="check_exist"><button type="button" class="btn additionalbtn" id="side_certificates" >Certificates<i class="la la-plus"></i></button></li>
    @endif
    @if(count($courses) == 0)
        <li class="check_exist"><button type="button" class="btn additionalbtn" id="side_courses" >Courses<i class="la la-plus"></i></button></li>
    @endif
    @if(count($references) == 0)
        <li class="check_exist"><button type="button" class="btn additionalbtn" id="side_references" >References<i class="la la-plus"></i></button></li>
    @endif
    @if(count($links) == 0)
        <li class="check_exist"><button type="button" class="btn additionalbtn" id="side_links" >Links<i class="la la-plus"></i></button></li>
    @endif
    @if(count($languages) == 0)
        <li class="check_exist"><button type="button" class="btn additionalbtn" id="side_language" >Languages<i class="la la-plus"></i></button></li>
    @endif
    @if(!auth()->guard('web')->user()->hobbies)
        <li class="check_exist"><button type="button" class="btn additionalbtn" id="side_hobbies" >Hobbies<i class="la la-plus"></i></button></li>
    @endif
    @if(count($customSections) == 0)
        <li class="check_exist"><button type="button" class="btn additionalbtn" id="side_custom_sections" >Custom section<i class="la la-plus"></i></button></li>
    @endif
@endif