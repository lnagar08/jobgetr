<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\EmploymentHistory;
use App\Models\Education;
use App\Models\Course;
use App\Models\CustomSection;
use App\Models\Internship;
use App\Models\Language;
use App\Models\Link;
use App\Models\Reference;
use App\Models\Skill;
use App\Models\State;
use App\Models\Plan;
use App\Models\Userplan;
use App\Models\ContantManagement;
use App\Models\UserResumeTemplate;
use App\Models\Certificate;
use App\Models\ResumeTemplate;
use Illuminate\Support\Str;
use App\Mail\NewPasswordEmail;
use App\Mail\EmailVerification;
use Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\View;

use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;


class WriteController extends Controller
{
   
    public function resumeCreation(Request $request){
        $Contantm = ContantManagement::first();
        $is_plan_expired = 1;
        $plan = Plan::get();
        if(auth()->guard('web')->user()){

            $user = User::where('id', auth()->guard('web')->user()->id)->first();
            
            $currentPlan = Userplan::where('user_id', auth()->guard('web')->user()->id)->first();  
            $currentDate = now();
            
            if ($currentPlan) {
                $is_plan_expired = 0; // Not expired
            }
        
            $employmentHistories = $user->employmentHistories;
            $educations = $user->educations;
            $internships = $user->internships;
            $courses = $user->courses;
            $references = $user->references;
            $links = $user->links;
            $customSections = $user->customSections;
            $skills = $user->skills;
            $languages = $user->languages;
            $certificates = $user->certificates;
            $states = State::orderBy('name', 'asc')->get();

            return view('resume-creation', compact('states', 'is_plan_expired', 'currentPlan', 'plan', 'user', 'skills', 'employmentHistories', 'educations', 'courses', 'customSections', 'internships', 'languages', 'links', 'references', 'certificates','Contantm'));
        }else{
            $states = State::orderBy('name', 'asc')->get();
            return view('resume-creation', compact('states','Contantm', 'is_plan_expired', 'plan'));
        } 
        return view('resume-creation');
    }
    
    function addAdditionalUL(){
        $html_ul_aditional_btns = view('ul-additional-section-btns')->render();
        return response()->json([
            'status' => 200,
            'message' => 'Get Ul successfully',
            'html_aditional_btns' => $html_ul_aditional_btns,
        ]);
    }
    function generateRandomPassword($length = 10) {
        return Str::random($length);
    }
    function checkUser(Request $request){
        $check_email_exist = User::where('email', $request->email)->where('status', 0)->first(); 
        if($check_email_exist){
            return response()->json([
                'status' => 200,
                'flag' => 'Login',
                'message' => ' Exist! user have to login first.'
            ]);
        }else{
            return response()->json([ 
                'status' => 200,
                'flag' => 'Signup',
                'message' => 'Please verify email otp',
            ]);
        }
    }
    public function validateCaptcha($request)
    {
        $recaptcha_response = $request->input('g-recaptcha-response');
        if (is_null($recaptcha_response)) {
            return response()->json([
                'message' => 'Please Complete the Recaptcha to proceed',
                'errors' => ['captcha' => 'reCAPTCHA verification failed.'],
            ], 422);
            
        }

        $url = "https://www.google.com/recaptcha/api/siteverify";

        $body = [
            'secret' => env("GOOGLE_RECAPTCHA_SECRET"),
            'response' => $recaptcha_response,
            'remoteip' => IpUtils::anonymize($request->ip()) //anonymize the ip to be GDPR compliant. Otherwise just pass the default ip address
        ];

        $response = Http::asForm()->post($url, $body);

        $result = json_decode($response);
        

        return $result;
    }
    function saveResumeData(Request $request){
        
        // Save Personal Details
        if($request->fieldset_name == 'personalDetail'){
            $request->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'g-recaptcha-response' => 'required',
                'email' => [
                    'required',
                    'email',
                    'max:255',
                    function ($attribute, $value, $fail) {
                        $user = auth()->user();
                        if ($user && $user->email === $value) {
                            return; // Skip validation if the email matches the current user's email
                        }
                        $exists = User::where('email', $value)->where('status', 0)->exists();
                        if ($exists) {
                            $fail('The email has already been taken.');
                        }
                    },
                ],
            ]);
            
            $user_chec = User::where('email', $request->email)->where('status', 0)->first();
            
            if(!$user_chec){
                
                $captcha_validation = $this->validateCaptcha($request);
                
                
                if ($captcha_validation->success !== true) {
                    return response()->json([
                        'message' => 'reCAPTCHA verification failed.',
                        'errors' => ['captcha' => 'reCAPTCHA verification failed.'],
                    ], 422);
                }
            }

            $check_user  = User::where('email', $request->email)->where('status', 2)->first();
            if($check_user){
                $otp = mt_rand(100000, 999999);
                $otp_token = Hash::make($otp);
                $token_expiry_time = Carbon::now()->addMinutes(30);
                User::where('id', $check_user->id)->update([
                    'otp_token' => $otp_token,
                    'expire_time' => $token_expiry_time,
                ]);
                $details = [
                    'first_name' => $check_user->first_name,
                    'last_name' => $check_user->last_name,
                    'email' => $check_user->email,
                    'otp' => $otp,
                ];
                // Mail::to($check_user->email)->send(new EmailVerification($details));    

                $content = View::make('emails.email-varification', ['data' => $details])->render();
                Mail::send([], [], function ($message) use ($check_user, $content) {
                    $message->to($check_user->email)
                            ->subject('Your Email Verification OTP')
                            ->setBody($content, 'text/html'); // Set the email body as HTML
                });

                return response()->json([
                    'status' => 200,
                    'message' => 'OTP send successfully',
                    'flag' => 'verify_otp',
                ]);
            }
            
            $destinationPath = public_path().'/uploads';
            $imagePath ='';
            
            //Signup Or Get user detail 
            if(!auth()->guard('web')->user() ){
                $user_details = $this->UserSignup($request->all());
                if($user_details == 'verify_otp'){
                    return response()->json([
                        'status' => 200,
                        'message' => 'OTP send successfully',
                        'flag' => 'verify_otp',
                    ]);
                }
            }
            
            $url = url('/');
            
            if($request->file('profile_image')){
                $request->validate([
                    'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);
                $imageName = '_'.time().'_'.$request->profile_image->getClientOriginalName(); 
                $request->profile_image->move($destinationPath, $imageName);
                $imagePath = $url.'/uploads/'.$imageName;
            }
            $completion_status = json_decode(auth()->guard('web')->user()->completion_status, true);
            $completion_status['personalDetai'] = 1;
            User::where('id', auth()->guard('web')->user()->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'driver_license' => $request->driver_license,
                'date_of_birth' => $request->date_of_birth,
                'profile_image' => $imagePath ? $imagePath : auth()->guard('web')->user()->profile_image,
                'completion_status' => json_encode($completion_status),
            ]);

            $user = User::where('id', auth()->guard('web')->user()->id)->first();
            $html_ul_aditional_btns = view('ul-additional-section-btns')->render();
        
            return response()->json([
                'status' => 200,
                'message' => 'Perosnal Detail saved successfully',
                'html_ul' => view('layouts.resume-header-ul')->render(),
                'html_aditional_btns' => $html_ul_aditional_btns,
                'user' => $user,
            ]);

        }
        $completion_status = json_decode(auth()->guard('web')->user()->completion_status, true);
        // Save Contact Details
        if($request->fieldset_name == 'contact_information'){
           $request->validate([
                'country' => 'required|string|max:255',
                'city' => 'required|string|max:255',
                'postal_code' => 'required|string|max:255',
                'phone_number' => [
                    'required',
                    'regex:/^\+?1?\s?-?\s?\(?\d{3}\)?[-.\s]?\d{3}[-.\s]?\d{4}$/',
                ],
                'address' => 'required|string|max:255',
            ], [
                'phone_number.regex' => 'Please enter a valid US phone number.',
            ]);

            $completion_status['contact_information'] = 1;
            User::where('id', auth()->guard('web')->user()->id)->update([
                'country' => $request->country,
                'city' => $request->city,
                'postal_code' => $request->postal_code,
                'phone_number' => $request->phone_number,
                'address' => $request->address,
                'completion_status' => json_encode($completion_status)

            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Contact Detail saved successfully',
            ]);

        }

        // Save Professional Summary
        if($request->fieldset_name == 'professionalsummary'){
            $request->validate([
                'professional_summary' => 'required|string|max:255',
            ]);
            $completion_status['professionalsummary'] = 1;
            User::where('id', auth()->guard('web')->user()->id)->update([
                'professional_summary' => $request->professional_summary,
                'completion_status' => json_encode($completion_status)
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Professional Summery saved successfully',
            ]);
        }

        
        // Save Employment History
        if($request->fieldset_name == 'side_employment_history'){
           
            $employment_history_ids = $request->employment_history_ids ? $request->employment_history_ids : [];
            
            $job_title = $request->job_title ?$request->job_title :  [];
            $company = $request->company ? $request->company :  [];
            $start_date = $request->start_date ?  $request->start_date :  [];
            $is_current_working = $request->is_current_working ? $request->is_current_working :  [];
            $end_date = $request->end_date ? $request->end_date :  [];
            $city =  $request->city ? $request->city :  [];
            $state_id =  $request->state_id ? $request->state_id :  [];
            $description = $request->description ? $request->description :  [];

            // Convert "0000-00-00" to null for end_date
            $end_date = array_map(function ($date) {
                return $date === '0000-00-00' ? null : $date;
            }, $end_date);

            EmploymentHistory::where('user_id', auth()->guard('web')->user()->id)
            ->whereNotIn('id', $employment_history_ids)->delete();

            if(count($job_title)){
                foreach ($job_title as $key => $value) {
                    $employment_history_arr = array(
                        'user_id' => auth()->guard('web')->user()->id,
                        'job_title' => $value,
                        'company' => $company[$key],
                        'start_date' => $start_date[$key],
                        'end_date' => isset($end_date[$key]) ? $end_date[$key] : null,
                        'is_current_working' => isset($is_current_working[$key]) ? $is_current_working[$key] : null,
                        'city' => $city[$key],
                        'state_id' => $state_id[$key],
                        'description' => $description[$key],
                    );
                    if(isset($employment_history_ids[$key])){
                        EmploymentHistory::where('id', $employment_history_ids[$key])->update($employment_history_arr);
                    }else{
                        EmploymentHistory::create($employment_history_arr);
                    }
                    
                }
            }
            $completion_status['side_employment_history'] = 1;
            User::where('id', auth()->guard('web')->user()->id)->update([
                'completion_status' => json_encode($completion_status)
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Employment History saved successfully',
            ]);
        }

        // Save Education History
        if ($request->fieldset_name == 'side_education') {
            $education_history_ids = $request->education_history_ids ?? [];
            $institution = $request->institution ?? [];
            $degree = $request->degree ?? [];
            $start_date = $request->start_date ?? [];
            $end_date = $request->end_date ?? [];
            $education_is_current_studying = $request->education_is_current_studying ? $request->education_is_current_studying : [];
            $city = $request->city ?? [];
            $state_id = $request->state_id ?? [];
            $description = $request->description ?? [];
        
            // Convert "0000-00-00" to null for end_date
            $end_date = array_map(function ($date) {
                return $date === '0000-00-00' ? null : $date;
            }, $end_date);
        
            // Delete records that are not in the updated list
            Education::where('user_id', auth()->guard('web')->user()->id)
                ->whereNotIn('id', $education_history_ids)
                ->delete();
        
            // Loop through the data and either update existing records or create new ones
            foreach ($institution as $key => $value) {
                $education_arr = [
                    'user_id' => auth()->guard('web')->user()->id,
                    'institution' => $value ?? null,
                    'degree' => $degree[$key] ?? null,
                    'start_date' => $start_date[$key] ?? null,
                    'end_date' => $end_date[$key] ?? null,
                    'is_current_studying' => isset($education_is_current_studying[$key]) ? $education_is_current_studying[$key] : null,
                    'city' => $city[$key] ?? null,
                    'state_id' => $state_id[$key] ?? null,
                    'description' => $description[$key] ?? null,
                ];
        
                // Check if education_history_ids exist, if yes, update; otherwise, create a new record
                if (isset($education_history_ids[$key]) && in_array($education_history_ids[$key], $education_history_ids)) {
                    Education::where('id', $education_history_ids[$key])
                        ->update($education_arr);
                } else {
                    Education::create($education_arr);
                }
                $completion_status['side_education'] = 1;
                User::where('id', auth()->guard('web')->user()->id)->update([
                    'completion_status' =>json_encode($completion_status)
                ]);
            }
        
            return response()->json([
                'status' => 200,
                'message' => 'Education saved successfully',
            ]);
        }
        
        // Save Skills
        if ($request->fieldset_name == 'side_skills') {
            $skill_ids = $request->skill_ids ? $request->skill_ids : [];
           
        
            $skill = $request->skill ? $request->skill : [];
            $level = $request->level ? $request->level : [];
        
            // Delete skills that are not in the updated list
            Skill::where('user_id', auth()->guard('web')->user()->id)
                ->whereNotIn('id', $skill_ids)
                ->delete();
        
            // Loop through the data and either update existing skills or create new ones
            if ($skill && count($skill) > 0) {
                foreach ($skill as $key => $value) {
                    if ($value != null) {
                        $skill_arr = [
                            'user_id' => auth()->guard('web')->user()->id,
                            'skill' => $value,
                            'level' => isset($level[$key]) ? $level[$key] : '',
                        ];
        
                        // Check if skill_ids exist, if yes, update; otherwise, create a new skill
                        if (isset($skill_ids[$key]) && in_array($skill_ids[$key], $skill_ids)) {
                            Skill::where('id', $skill_ids[$key])
                                ->update($skill_arr);
                        } else {
                            Skill::create($skill_arr);
                        }
                    }
                }
            }
        
            return response()->json([
                'status' => 200,
                'message' => 'Skill saved successfully',
            ]);
        }
        
        // Save Internship History
        if ($request->fieldset_name == 'side_internships') {
            // Initialize arrays for internship details
            $internship_ids = $request->internship_ids ? $request->internship_ids : [];
            $job_title = $request->job_title ? $request->job_title : [];
            $company = $request->company ? $request->company : [];
            $start_date = $request->start_date ? $request->start_date : [];
            $end_date = $request->end_date ? $request->end_date : [];
            $is_currently_pursuing_internship = $request->is_currently_pursuing_internship ? $request->is_currently_pursuing_internship : [];
            $city =  $request->city ? $request->city :  [];
            $state_id =  $request->state_id ? $request->state_id :  [];
            $description = $request->description ? $request->description : [];

            // Delete internships that are not in the updated list
            Internship::where('user_id', auth()->guard('web')->user()->id)
                ->whereNotIn('id', $internship_ids)
                ->delete();
            // Loop through the data and either update existing internships or create new ones
            if (count($job_title)) {
                foreach ($job_title as $key => $value) {
                    $internship_arr = [
                        'user_id' => auth()->guard('web')->user()->id,
                        'job_title' => $value,
                        'company' => $company[$key] ?? null,
                        'start_date' => $start_date[$key] ?? null,
                        'end_date' => isset($end_date[$key]) ? $end_date[$key] : null,
                        'is_currently_pursuing_internship' => isset($is_currently_pursuing_internship[$key]) ? $is_currently_pursuing_internship[$key] : null,
                        'city' => isset($city[$key]) ? $city[$key] : null,
                        'state_id' => isset($state_id[$key]) ? $state_id[$key] : null,
                        'description' => $description[$key] ?? null,
                    ];
                    // Check if internship_ids exist, if yes, update; otherwise, create a new internship
                    if (isset($internship_ids[$key]) && in_array($internship_ids[$key], $internship_ids)) {
                        Internship::where('id', $internship_ids[$key])
                            ->update($internship_arr);
                    } else {
                        Internship::create($internship_arr);
                    }
                }
            }

            $data = Internship::where('user_id',auth()->guard('web')->user()->id)->get();
            if (!empty($data)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Internships saved successfully',
                    'data' => $data,
                ]);
            }
        }

        // Save Reference History
        if ($request->fieldset_name == 'side_references') {
            // Initialize arrays for reference details
            $reference_ids = $request->references_ids ?? [];
            $referent_name = $request->referent_name ?? [];
            $referent_company = $request->referent_company ?? [];
            $referent_email = $request->referent_email ?? [];
            $referent_phone_number = $request->referent_phone_number ?? [];
            
            // Delete references that are not in the updated list
            Reference::where('user_id', auth()->guard('web')->user()->id)
                ->whereNotIn('id', $reference_ids)
                ->delete();
        
            // Loop through the data and either update existing references or create new ones
            if (count($referent_name)) {
                foreach ($referent_name as $key => $value) {
                    $reference_arr = [
                        'user_id' => auth()->guard('web')->user()->id,
                        'referent_name' => $value,
                        'referent_company' => $referent_company[$key] ?? null,
                        'referent_email' => $referent_email[$key] ?? null,
                        'referent_phone_number' => $referent_phone_number[$key] ?? null,
                    ];
        
                    // Check if reference_ids exist, if yes, update; otherwise, create a new reference
                    if (isset($reference_ids[$key]) && in_array($reference_ids[$key], $reference_ids)) {
                        Reference::where('id', $reference_ids[$key])
                            ->update($reference_arr);
                    } else {
                        Reference::create($reference_arr);
                    }
                }
            }
        
            // Return JSON response
            $data = Reference::where('user_id',auth()->guard('web')->user()->id)->get();
            if (!empty($data)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Reference saved successfully',
                    'data' => $data,
                ]);
            }
        }
        

        // Save Course History
        if ($request->fieldset_name == 'side_courses') {
            // Initialize arrays for course details
            $course_ids = $request->courses_ids ?? [];
            $is_currently_pursuing_course = $request->is_currently_pursuing_course ? $request->is_currently_pursuing_course : [];
            $institution = $request->institution ?? [];
            $course = $request->course ?? [];
            $start_date = $request->start_date ?? [];
            $end_date = $request->end_date ?? [];
        
            // Delete courses that are not in the updated list
            Course::where('user_id', auth()->guard('web')->user()->id)
                ->whereNotIn('id', $course_ids)
                ->delete();
        
            // Loop through the data and either update existing courses or create new ones
            if (count($institution)) {
                foreach ($institution as $key => $value) {
                    $course_arr = [
                        'user_id' => auth()->guard('web')->user()->id,
                        'institution' => $value,
                        'course' => $course[$key],
                        'start_date' => $start_date[$key],
                        'end_date' => $end_date[$key] ?? null,
                        'is_currently_pursuing_course' => isset($is_currently_pursuing_course[$key]) ? $is_currently_pursuing_course[$key] : null,
                    ];
        
                    // Check if course_ids exist, if yes, update; otherwise, create a new course
                    if (isset($course_ids[$key]) && in_array($course_ids[$key], $course_ids)) {
                        Course::where('id', $course_ids[$key])
                            ->update($course_arr);
                    } else {
                        Course::create($course_arr);
                    }
                }
            }
        
            // Return JSON response
            $data = Course::where('user_id',auth()->guard('web')->user()->id)->get();
            if (!empty($data)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Courses saved successfully',
                    'data' => $data,
                ]);
            }
        }
        

        // Save Skill History
        if ($request->fieldset_name == 'side_links') {
            // Initialize arrays for link details
            $link_ids = $request->link_ids ?? [];
            $link_title = $request->link_title ?? [];
            $url = $request->url ?? [];
        
            // Delete links that are not in the updated list
            Link::where('user_id', auth()->guard('web')->user()->id)
                ->whereNotIn('id', $link_ids)
                ->delete();
        
            // Loop through the data and either update existing links or create new ones
            if (count($link_title)) {
                foreach ($link_title as $key => $value) {
                    $link_arr = [
                        'user_id' => auth()->guard('web')->user()->id,
                        'link_title' => $value,
                        'url' => $url[$key] ?? null,
                    ];
        
                    // Check if link_ids exist, if yes, update; otherwise, create a new link
                    if (isset($link_ids[$key]) && in_array($link_ids[$key], $link_ids)) {
                        Link::where('id', $link_ids[$key])
                            ->update($link_arr);
                    } else {
                        Link::create($link_arr);
                    }
                }
            }
        
            // Return JSON response
            $data = Link::where('user_id',auth()->guard('web')->user()->id)->get();
            if (!empty($data)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Links saved successfully',
                    'data' => $data,
                ]);
            }
        }
        

        // Save Language 
        if ($request->fieldset_name === 'side_language') {
            $language_ids = $request->language_ids ?? [];
            $language = $request->language ?? [];
            $proficiency = $request->proficiency ?? [];
        
            // Delete languages that are not in the updated list
            Language::where('user_id', auth()->guard('web')->user()->id)
                ->whereNotIn('id', $language_ids)
                ->delete();
        
            // Loop through the data and either update existing languages or create new ones
            if (count($language)) {
                foreach ($language as $key => $value) {
                    $language_arr = [
                        'user_id' => auth()->guard('web')->user()->id,
                        'language' => $value,
                        'proficiency' => $proficiency[$key] ?? null,
                    ];
        
                    // Check if language_ids exist, if yes, update; otherwise, create a new language
                    if (isset($language_ids[$key]) && in_array($language_ids[$key], $language_ids)) {
                        Language::updateOrCreate(['id' => $language_ids[$key]], $language_arr);
                    } else {
                        Language::create($language_arr);
                    }
                }
            }
        
            // Return JSON response
            $data = Language::where('user_id',auth()->guard('web')->user()->id)->get();
            if (!empty($data)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Languages saved successfully',
                    'data' => $data,
                ]);
            }
        }
        

        // Save Custom Section 
        if ($request->fieldset_name == 'side_custom_sections') {
            $custom_section_ids = $request->custom_section_ids ?? [];
            $header = $request->header ?? [];
            $sub_header = $request->sub_header ?? [];
            $description = $request->description ?? [];
        
            // Delete custom sections that are not in the updated list
            CustomSection::where('user_id', auth()->guard('web')->user()->id)
                ->whereNotIn('id', $custom_section_ids)
                ->delete();
        
            // Loop through the data and either update existing custom sections or create new ones
            if (count($header)) {
                foreach ($header as $key => $value) {
                    $custom_section_arr = [
                        'user_id' => auth()->guard('web')->user()->id,
                        'header' => $value,
                        'sub_header' => $sub_header[$key] ?? null,
                        'description' => $description[$key] ?? null,
                    ];
        
                    // Check if custom_section_ids exist, if yes, update; otherwise, create a new custom section
                    if (isset($custom_section_ids[$key]) && in_array($custom_section_ids[$key], $custom_section_ids)) {
                        CustomSection::where('id', $custom_section_ids[$key])
                            ->update($custom_section_arr);
                    } else {
                        CustomSection::create($custom_section_arr);
                    }
                }
            }
            
            $data = CustomSection::where('user_id',auth()->guard('web')->user()->id)->get();
            if (!empty($data)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Custom Sections saved successfully',
                    'data' => $data,
                ]);
            }
        }
        

        // Save Hobbies
        if($request->fieldset_name == 'side_hobbies'){
            if($request->hobbies){
                $request->validate([
                    'hobbies' => 'string|max:255',
                ]);
           }
            User::where('id', auth()->guard('web')->user()->id)->update([
                'hobbies' => $request->hobbies,
            ]);
            return response()->json([
                'status' => 200,
                'message' => 'Hobbies saved successfully',
            ]);

        }

        // Save Certificates
        if ($request->fieldset_name == 'side_certificates') {
            // Initialize arrays for certificate details
            $certificate_ids = $request->certificate_ids ?? [];
            $name = $request->name ?? [];
            $organization = $request->organization ?? [];
            $issued_date = $request->issued_date ?? [];
            $url = $request->url ?? [];
            $description = $request->description ?? [];
        
            // Delete certificates that are not in the updated list
            Certificate::where('user_id', auth()->guard('web')->user()->id)
                ->whereNotIn('id', $certificate_ids)
                ->delete();
        
            // Loop through the data and either update existing certificates or create new ones
            if (count($name)) {
                foreach ($name as $key => $value) {
                    $certificate_arr = [
                        'user_id' => auth()->guard('web')->user()->id,
                        'name' => $value,
                        'organization' => $organization[$key] ?? null,
                        'issued_date' => $issued_date[$key] ?? null,
                        'url' => $url[$key] ?? null,
                        'description' => isset($description[$key]) ?  $description[$key] : ''
                    ];
        
                    // Check if certificate_ids exist, if yes, update; otherwise, create a new certificate
                    if (isset($certificate_ids[$key]) && in_array($certificate_ids[$key], $certificate_ids)) {
                        Certificate::where('id', $certificate_ids[$key])
                            ->update($certificate_arr);
                    } else {
                        Certificate::create($certificate_arr);
                    }
                }
            }
        
            // Return JSON response
            $data = Certificate::where('user_id',auth()->guard('web')->user()->id)->get();
            if (!empty($data)) {
                return response()->json([
                    'status' => 200,
                    'message' => 'Certificates saved successfully',
                    'data' => $data,
                ]);
            }
        }
        
        

    }
    function userSignup($data){
        $password = $this->generateRandomPassword();
        $jsonData = [
            "personalDetai" =>  0,
            "contact_information" => 0,
            "professionalsummary" => 0,
            "side_employment_history" => 0,
            "side_education" => 0,
            "choosePlan" => 0,
        ];
        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($password),
            'completion_status' => json_encode($jsonData),
            'status' => 2,

        ]);
        
        $slug = $this->generateSlug($user);
        $user->update(['slug' => $slug]);
        $details = [
            'password' => $password,
            'first_name' => $user->first_name,
            'change_password' => url('/').'/reset-password',
        ];
        UserResumeTemplate::create([
            'user_id' => $user->id,
            'template_id' => 1,
        ]);
        // Send the user an email with their new password
        // Mail::to($user->email)->send(new NewPasswordEmail($details));

        $content = View::make('emails.new-password', ['details' => $details])->render();
        Mail::send([], [], function ($message) use ($user, $content) {
            $message->to($user->email)
                    ->subject('Jobgetr Login Password')
                    ->setBody($content, 'text/html'); // Set the email body as HTML
        });

        // If user is not verified with the email address
        if($user->status == 2){
            // Token Send 
            $otp = mt_rand(100000, 999999);
            $otp_token = Hash::make($otp);
            $token_expiry_time = Carbon::now()->addMinutes(30);
            User::where('id', $user->id)->update([
                'otp_token' => $otp_token,
                'expire_time' => $token_expiry_time,
            ]);

            $details = [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'otp' => $otp,
            ];
            // Mail::to($user->email)->send(new EmailVerification($details));

            $content = View::make('emails.email-varification', ['data' => $details])->render();
            Mail::send([], [], function ($message) use ($user, $content) {
                $message->to($user->email)
                        ->subject('Your Email Verification OTP')
                        ->setBody($content, 'text/html'); // Set the email body as HTML
            });
            return 'verify_otp';
        }
        auth()->login($user);
        
        return $user;
    }

    function loginPopup(Request $request) {
        $user = User::where('email', $request->email)->where('id', '!=', 1)->first();
        if($user->status == 1)
        {
            return response()->json([
                'status' => 500,
                'message' => 'Whoops! Your account is temporarily suspended. Please contact the support team.',
            ]);
        }else{
            if($user){
                if(!auth()->guard('web')->attempt(['email' => $request->input('email'),  'password' => $request->input('password')])){
                    return response()->json([
                        'status' => 500,
                        'message' => 'Whoops! invalid email and password.',
                    ]);
                }else{ 

                    return response()->json([
                        'status' => 200,
                        'message' => 'Login Successfully',
                        'data' => auth()->guard('web')->user(),
                        'html' => view('layouts.resume-header-ul')->render(),
                    ]);
                }
            }else{
                return response()->json([
                    'status' => 500,
                    'message' => 'Whoops! invalid email and password.',
                ]);
            }
        }
    }
    function deleteResumeSection(Request $request)
    {
        $user_id = auth()->guard('web')->user()->id;
        
        if($request->fieldset == 'side_employment_history'){
            EmploymentHistory::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_employment_history'
            ]);
        }
        if($request->fieldset == 'side_education'){
            Education::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_education'
            ]);
        }
        if($request->fieldset == 'side_skills'){
            Skill::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_skills'
            ]);
        }
        if($request->fieldset == 'side_internships'){
            Internship::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_internships'
            ]);
        }
        if($request->fieldset == 'side_references'){
            Reference::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_references'
            ]);
        }
        if($request->fieldset == 'side_courses'){
            Course::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_courses'
            ]);
        }
        if($request->fieldset == 'side_links'){
            Link::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_links'
            ]);
        }
        if($request->fieldset == 'side_language'){
            Language::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_language'
            ]);
        }
        if($request->fieldset == 'side_hobbies'){
            User::where('id', $user_id)->update(['hobbies' => null]);
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
            ]);
        }
        if($request->fieldset == 'side_custom_sections'){
            CustomSection::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_custom_sections'
            ]);
        }
        if($request->fieldset == 'side_certificates'){
            Certificate::where('user_id', $user_id)->delete();
            return response()->json([
                'status' => 200,
                'message' => 'Section Data Deleted Successfully',
                'Field' => 'side_certificates'
            ]);
        }
    }

    private function generateSlug(User $user)
    {
        $slug = $this->generateUniqueRandomString(20);
        // Check if the generated slug is unique
        while (User::where('slug', $slug)->where('id', '!=', $user->id)->exists()) {
            $slug = $this->generateUniqueRandomString(20);
        }
        return $slug;
    }

    private function generateUniqueRandomString($length = 20)
    {
        // Generate a random string with both numbers and alphabets
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    public function validateOTP(Request $request){
        $email  = $request->email;
        $otp = $request->email_otp;
        $user = User::where('email', $email)->where('status', 2)->first();

        if(!Hash::check($otp, $user->otp_token) || $user->expire_time < Carbon::now()){
            return response()->json([
                'status' => 200,
                'flag' => 'invalid_otp',
                'message' => 'Invalid OTP, Please check your OTP'
            ]);
        }else{
            User::where('id', $user->id)->update([
                'status' => 0
            ]);
            auth()->login($user);
            return response()->json([
                'status' => 200,
                'flag' => 'next_step',
                'message' => 'OTP Validate successfully!'
            ]);
        }
    }

    function resendOTP(Request $request){
        $email = $request->email;
        $user = User::where('email', $email)->where('status', 2)->first();
        $otp = mt_rand(100000, 999999);
        $otp_token = Hash::make($otp);
        $token_expiry_time = Carbon::now()->addMinutes(30);
        User::where('id', $user->id)->update([
            'otp_token' => $otp_token,
            'expire_time' => $token_expiry_time,
        ]);

        $details = [
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'email' => $user->email,
            'otp' => $otp,
        ];
        // Mail::to($user->email)->send(new EmailVerification($details));
        $content = View::make('emails.email-varification', ['data' => $details])->render();
            Mail::send([], [], function ($message) use ($user, $content) {
                $message->to($user->email)
                        ->subject('Your Email Verification OTP')
                        ->setBody($content, 'text/html'); // Set the email body as HTML
            });
        return response()->json([
            'status' => 200,
            'message' => 'Resend OTP to you email address!',
        ]);
    }
    
    
}
