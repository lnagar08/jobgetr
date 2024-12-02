<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\EmploymentHistory;
use App\Models\CustomSection;
use App\Models\Internship;
use App\Models\Certificate;
use App\Models\Education;
use App\Models\Reference;
use App\Models\Language;
use App\Models\Course;
use App\Models\User;
use App\Models\State;
use App\Models\Skill;
use App\Models\Link;
use App\Models\Plan;
use App\Models\Userplan;
use App\Mail\NewPasswordEmail;
use App\Models\UserResumeTemplate;
use Illuminate\Support\Facades\View;
use Auth;
use Hash;
use Session;
use Mail;
use validator;

class UserManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $User = User::where('id','!=',1)->orderBy('id','desc')->get();
        $Plan = Plan::get();
        return view('admin.UserManagement.index',compact('User','Plan')); 
    }

    /**
     *  Add the data of new user.
     */
    public function create()
    {
        $State = State::get();
        $Plan = Plan::get();
        return view('admin.UserManagement.create',compact('State','Plan')); 
    }

    /**
     * Store the New user data.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'email' => 'required|email|unique:users',
        ]);

        $emailPart = strstr($request->email, '@', true);
        $dobYear = date('Y', strtotime($request->date_of_birth));
        $password = $emailPart . $dobYear;

        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->nationality = $request->nationality;
        $user->driver_license = $request->driver_license;
        $user->date_of_birth = $request->date_of_birth;
        $user->password = Hash::make($password);
        $user->email_verified_at = now();
        $user->desired_job_title = $request->desired_job_title;
        $destinationPath = public_path().'/uploads';
        $imagePath ='';
        if ($request->hasFile('profile_image')) {
            $imageName = '_'.time().'_'.$request->profile_image->getClientOriginalName(); 
            $request->profile_image->move($destinationPath, $imageName);
            $imagePath = 'uploads/'.$imageName;
            $user->profile_image =  url($imagePath);
        }
        $user->country = $request->country;
        $user->city = $request->city;
        $user->postal_code = $request->postal_code;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->professional_summary = $request->professional_summary;
        $user->slug = $this->generateSlug($user);
        $user->hobbies = $request->hobbies;
        $user->save();
        $id = $user->id;
        
        $plan = Plan::find($request->plan_id);
        $userplan = new Userplan;
        $userplan->user_id = $id;
        $userplan->plan_id = $request->plan_id;
        $userplan->price = $plan->price;
        $userplan->save();

        

        $details = [
            'password' => $password,
            'first_name' => $user->first_name,
            'change_password' => url('/').'/reset-password',
        ];      
        
        $content = View::make('emails.new-password', ['details' => $details])->render();

        Mail::send([], [], function ($message) use ($user, $content) {
            $message->to($user->email)
                    ->subject('Jobgetr and Openinterview Login Password')
                    ->setBody($content, 'text/html'); // Set the email body and specify it's HTML
        });

        // Mail::to($user->email)->send(new NewPasswordEmail($details));

        
        if ($request->has('EH_job_title') && is_array($request->EH_job_title)) {
            foreach ($request->EH_job_title as $key => $value) {
                if (!empty($value)) {
                    $Empy = new EmploymentHistory;
                    $Empy->user_id = $id;
                    $Empy->job_title = $value;
                    $Empy->company = $request->has('EH_company') && isset($request->EH_company[$key]) ? $request->EH_company[$key] : null;
                    $Empy->start_date = $request->has('EH_start_date') && isset($request->EH_start_date[$key]) ? $request->EH_start_date[$key] : null;
                    $Empy->end_date = $request->has('EH_end_date') && isset($request->EH_end_date[$key]) ? $request->EH_end_date[$key] : null;
                    $Empy->is_current_working = $request->has('EH_is_current_working') && isset($request->EH_is_current_working[$key]) ? $request->EH_is_current_working[$key] : 0;
                    $Empy->state_id = $request->has('EH_state_id') && isset($request->EH_state_id[$key]) ? $request->EH_state_id[$key] : null;
                    $Empy->city = $request->has('EH_city') && isset($request->EH_city[$key]) ? $request->EH_city[$key] : null;
                    $Empy->description = $request->has('EH_description') && isset($request->EH_description[$key]) ? $request->EH_description[$key] : null;
                    $Empy->save();
                }
            }
        }       
            
        if ($request->has('Ed_institution') && is_array($request->Ed_institution)) {
                foreach ($request->Ed_institution as $key => $value) {
                    if (!empty($value)) {
                        $Education = new Education;
                        $Education->user_id = $id;
                        $Education->institution = $value;
                        $Education->degree = $request->has('Ed_degree') && isset($request->Ed_degree[$key]) ? $request->Ed_degree[$key] : null;
                        $Education->start_date = $request->has('Ed_start_date') && isset($request->Ed_start_date[$key]) ? $request->Ed_start_date[$key] : null;
                        $Education->end_date = $request->has('Ed_end_date') && isset($request->Ed_end_date[$key]) ? $request->Ed_end_date[$key] : null;
                        $Education->is_current_studying = $request->has('Ed_is_current_studying') && isset($request->Ed_is_current_studying[$key]) ? $request->Ed_is_current_studying[$key] : 0;
                        $Education->city = $request->has('Ed_city') && isset($request->Ed_city[$key]) ? $request->Ed_city[$key] : null;
                        $Education->state_id = $request->has('Ed_state_id') && isset($request->Ed_state_id[$key]) ? $request->Ed_state_id[$key] : null;
                        $Education->description = $request->has('Ed_description') && isset($request->Ed_description[$key]) ? $request->Ed_description[$key] : null;
                        $Education->save();
                    }
                }
        }
            
        if ($request->has('skill') && is_array($request->skill)) {
                foreach ($request->skill as $key => $value) {
                    if (!empty($value)) {
                        $Skill = new Skill;
                        $Skill->user_id = $id;
                        $Skill->skill = $value;
                        $Skill->level = $request->has('level') && isset($request->level[$key]) ? $request->level[$key] : null;
                        $Skill->save();
                    }
                }
        }

        if ($request->has('Is_job_title') && is_array($request->Is_job_title)) {
                foreach ($request->Is_job_title as $key => $value) {
                    if (!empty($value)) {
                        $Internship = new Internship;
                        $Internship->user_id = $id;
                        $Internship->job_title = $value;
                        $Internship->company = $request->has('Is_company') && isset($request->Is_company[$key]) ? $request->Is_company[$key] : null;
                        $Internship->start_date = $request->has('Is_start_date') && isset($request->Is_start_date[$key]) ? $request->Is_start_date[$key] : null;
                        $Internship->end_date = $request->has('Is_end_date') && isset($request->Is_end_date[$key]) ? $request->Is_end_date[$key] : null;
                        $Internship->is_currently_pursuing_internship = $request->has('Is_currently_pursuing_internship') && isset($request->Is_currently_pursuing_internship[$key]) ? $request->Is_currently_pursuing_internship[$key] : 0;
                        $Internship->city = $request->has('Is_city') && isset($request->Is_city[$key]) ? $request->Is_city[$key] : null;
                        $Internship->state_id = $request->has('Is_state_id') && isset($request->Is_state_id[$key]) ? $request->Is_state_id[$key] : null;
                        $Internship->description = $request->has('Is_description') && isset($request->Is_description[$key]) ? $request->Is_description[$key] : null;
                        $Internship->save();
                    }
                }
        }

        if ($request->has('cer_name') && is_array($request->cer_name)) {
            foreach ($request->cer_name as $key => $value) {
                if (!empty($value)) {
                    $Certificate = new Certificate;
                    $Certificate->user_id = $id;
                    $Certificate->name = $value;
                    $Certificate->organization = $request->has('cer_organization') && isset($request->cer_organization[$key]) ? $request->cer_organization[$key] : null;
                    $Certificate->issued_date = $request->has('cer_issued_date') && isset($request->cer_issued_date[$key]) ? $request->cer_issued_date[$key] : null;
                    $Certificate->url = $request->has('cer_url') && isset($request->cer_url[$key]) ? $request->cer_url[$key] : null;
                    $Certificate->description = $request->has('cer_description') && isset($request->cer_description[$key]) ? $request->cer_description[$key] : null;
                    $Certificate->save();
                }
            }
        }
              
        if ($request->has('Co_institution') && is_array($request->Co_institution)) {
            foreach ($request->Co_institution as $key => $value) {
                if (!empty($value)) {
                    $Course = new Course;
                    $Course->user_id = $id;
                    $Course->institution = $value;
                    $Course->course = $request->has('Co_course') && isset($request->Co_course[$key]) ? $request->Co_course[$key] : null;
                    $Course->start_date = $request->has('Co_start_date') && isset($request->Co_start_date[$key]) ? $request->Co_start_date[$key] : null;
                    $Course->end_date = $request->has('Co_end_date') && isset($request->Co_end_date[$key]) ? $request->Co_end_date[$key] : null;
                    $Course->is_currently_pursuing_course = $request->has('Co_is_currently_pursuing_course') && isset($request->Co_is_currently_pursuing_course[$key]) ? $request->Co_is_currently_pursuing_course[$key] : null;
                    $Course->save();
                }
            }
        }
                    
        if ($request->has('referent_name') && is_array($request->referent_name)) {
            foreach ($request->referent_name as $key => $value) {
                if (!empty($value)) {
                    $Reference = new Reference;
                    $Reference->user_id = $id;
                    $Reference->referent_name = $value;
                    $Reference->referent_company = $request->has('referent_company') && isset($request->referent_company[$key]) ? $request->referent_company[$key] : null;
                    $Reference->referent_email = $request->has('referent_email') && isset($request->referent_email[$key]) ? $request->referent_email[$key] : null;
                    $Reference->referent_phone_number = $request->has('referent_phone_number') && isset($request->referent_phone_number[$key]) ? $request->referent_phone_number[$key] : null;
                    $Reference->save();
                }
            }
        }
            
        if ($request->has('link_title') && is_array($request->link_title)) {
            foreach ($request->link_title as $key => $value) {
                if (!empty($value)) {
                $Link = new Link;
                $Link->user_id = $id;
                $Link->link_title = $value;
                $Link->url = $request->has('url') && isset($request->url[$key]) ? $request->url[$key] : null;
                $Link->save();
                }
            }
        }
             
        if ($request->has('language') && is_array($request->language)) {
            foreach ($request->language as $key => $value) {
                if (!empty($value)) {
                $Language = new Language;
                $Language->user_id = $id;
                $Language->language = $value;
                $Language->proficiency = $request->has('proficiency') && isset($request->proficiency[$key]) ? $request->proficiency[$key] : null;
                $Language->save();
                }
            }
        }
        if ($request->has('header') && is_array($request->header)) {
            foreach ($request->header as $key => $value) {
                if (!empty($value)) {
                $CustomSection = new CustomSection;
                $CustomSection->user_id = $id;
                $CustomSection->header = $value;
                $CustomSection->sub_header = $request->has('sub_header') && isset($request->sub_header[$key]) ? $request->sub_header[$key] : null;
                $CustomSection->description = $request->has('description') && isset($request->description[$key]) ? $request->description[$key] : null;
                $CustomSection->save();
                }
            }
        }

        return redirect()->route('user-management.edit', $id);
    }

    
    /**
     * Edit the user data.
     */
    public function edit($id)
    {
        // Retrieve the user by ID
        $User = User::find($id);
        $userPlans = $User->plans;
        $EmploymentHistory = $User->employmentHistories;
        $State = State::all();
        $Education = $User->educations;
        $Skill = $User->skills;
        $Internship = $User->internships;
        $Course = $User->courses;
        $Reference = $User->references;
        $Link = $User->links;
        $Language = $User->languages;
        $CustomSection = $User->customSections;
        $Certificate = $User->certificates;
        $Plan = Plan::get();
        return view('admin.UserManagement.edit',compact('User','userPlans','Plan','id','State','EmploymentHistory','Education','Skill','Internship','Certificate','Course','Reference','Link','Language','CustomSection')); 
    }

    /**
     * View the user data.
     */
    public function view($id)
    {
        $User = User::find($id);
        return view('admin.UserManagement.view',compact('User','id')); 
    }
    
    public function show(){
        
    }

    /**
     * Update the user data.
     */
    public function update(Request $request,$id)
    {
        if($request->SectionNmae == "PersonalDetails")
        {
            $destinationPath = public_path().'/uploads';
            $imagePath ='';
            Session::put('SectionNmae','PersonalDetails');
            $PersonalDetails = User::find($id);
            $PersonalDetails->first_name = $request->first_name;
            $PersonalDetails->last_name = $request->last_name;
            $PersonalDetails->email = $request->email;
            $PersonalDetails->nationality = $request->nationality;
            $PersonalDetails->driver_license = $request->driver_license;
            $PersonalDetails->date_of_birth = $request->date_of_birth;
            $PersonalDetails->project_url = $request->project_url;
            $PersonalDetails->desired_job_title = $request->desired_job_title;
            if ($request->hasFile('profile_image')) {
                $imageName = '_'.time().'_'.$request->profile_image->getClientOriginalName(); 
                $request->profile_image->move($destinationPath, $imageName);
                $imagePath = 'uploads/'.$imageName;
                $PersonalDetails->profile_image =  url($imagePath);
            }
            $PersonalDetails->save();
            
            $plan = Plan::find($request->plan_id);

            $userplan = Userplan::where('user_id', $id)->first();
            if ($userplan) {
                $userplan->plan_id = $request->plan_id;
                $userplan->price = $plan->price;
                $userplan->price = $plan->price;
                $userplan->save();
            } else {
                $userplan = new Userplan();
                $userplan->user_id = $id;
                $userplan->plan_id = $request->plan_id;
                $userplan->price = $plan->price;
                $userplan->price = $plan->price;
                $userplan->save();
            }
    
            return redirect()->back()->with('success',"Personal Details updated successfully");
        
        }elseif($request->SectionNmae == "ContactInformation")
        {
            Session::put('SectionNmae','ContactInformation');
            $PersonalDetails = User::find($id);
            $PersonalDetails->country = $request->country;
            $PersonalDetails->city = $request->city;
            $PersonalDetails->postal_code = $request->postal_code;
            $PersonalDetails->phone_number = $request->phone_number;
            $PersonalDetails->address = $request->address;
            $PersonalDetails->save();

             return redirect()->back()->with('success',"Contact Information updated successfully");
         
        }elseif($request->SectionNmae == "ProfessionalSummary")
        {
            Session::put('SectionNmae','ProfessionalSummary');
            $Prof = User::find($id);
            $Prof->professional_summary = $request->professional_summary;
            $Prof->save();

             return redirect()->back()->with('success',"Professional Summary updated successfully");
         
        }elseif($request->SectionNmae == "Hobbies")
        {
            Session::put('SectionNmae','Hobbies');
            $hob = User::find($id);
            $hob->hobbies = $request->hobbies;
            $hob->save();

             return redirect()->back()->with('success',"Hobbies updated successfully");
         
        }elseif($request->SectionNmae == "EmploymentHistory")
        {
            
            Session::put('SectionNmae','EmploymentHistory');
            EmploymentHistory::where('user_id', $id)->delete();
            if ($request->has('EH_job_title') && is_array($request->EH_job_title)) {
                foreach ($request->EH_job_title as $key => $value) {
                    $Empy = new EmploymentHistory;
                    $Empy->user_id = $id;
                    $Empy->job_title = $value;
                    $Empy->company = $request->has('EH_company') && isset($request->EH_company[$key]) ? $request->EH_company[$key] : null;
                    $Empy->start_date = $request->has('EH_start_date') && isset($request->EH_start_date[$key]) ? $request->EH_start_date[$key] : null;
                    $Empy->end_date = $request->has('EH_end_date') && isset($request->EH_end_date[$key]) ? $request->EH_end_date[$key] : null;
                    $Empy->is_current_working = $request->has('EH_is_current_working') && isset($request->EH_is_current_working[$key]) ? $request->EH_is_current_working[$key] : 0;
                    $Empy->state_id = $request->has('EH_state_id') && isset($request->EH_state_id[$key]) ? $request->EH_state_id[$key] : null;
                    $Empy->city = $request->has('EH_city') && isset($request->EH_city[$key]) ? $request->EH_city[$key] : null;
                    $Empy->description = $request->has('EH_description') && isset($request->EH_description[$key]) ? $request->EH_description[$key] : null;
                    $Empy->save();
                }
            }
             return redirect()->back()->with('success',"Employment History updated successfully");

        }elseif($request->SectionNmae == "Education")
        {
            Session::put('SectionNmae','Education');
            Education::where('user_id', $id)->delete();
            if ($request->has('Ed_institution') && is_array($request->Ed_institution)) {
                foreach ($request->Ed_institution as $key => $value) {
                    $Education = new Education;
                    $Education->user_id = $id;
                    $Education->institution = $value;
                    $Education->degree = $request->has('Ed_degree') && isset($request->Ed_degree[$key]) ? $request->Ed_degree[$key] : null;
                    $Education->start_date = $request->has('Ed_start_date') && isset($request->Ed_start_date[$key]) ? $request->Ed_start_date[$key] : null;
                    $Education->end_date = $request->has('Ed_end_date') && isset($request->Ed_end_date[$key]) ? $request->Ed_end_date[$key] : null;
                    $Education->is_current_studying = $request->has('Ed_is_current_studying') && isset($request->Ed_is_current_studying[$key]) ? $request->Ed_is_current_studying[$key] : 0;
                    $Education->city = $request->has('Ed_city') && isset($request->Ed_city[$key]) ? $request->Ed_city[$key] : null;
                    $Education->state_id = $request->has('Ed_state_id') && isset($request->Ed_state_id[$key]) ? $request->Ed_state_id[$key] : null;
                    $Education->description = $request->has('Ed_description') && isset($request->Ed_description[$key]) ? $request->Ed_description[$key] : null;
                    $Education->save();
                }
            }
            return redirect()->back()->with('success',"Education updated successfully");

        }elseif($request->SectionNmae == "Skills")
        {
            Session::put('SectionNmae','Skills');

            Skill::where('user_id', $id)->delete();
            if ($request->has('skill') && is_array($request->skill)) {
                foreach ($request->skill as $key => $value) {
                    $Skill = new Skill;
                    $Skill->user_id = $id;
                    $Skill->skill = $value;
                    $Skill->level = $request->has('level') && isset($request->level[$key]) ? $request->level[$key] : null;
                    $Skill->save();
                }
            }
             return redirect()->back()->with('success',"Skills updated successfully");

        }elseif($request->SectionNmae == "Internships")
        { 
            Session::put('SectionNmae','Internships');
            Internship::where('user_id', $id)->delete();
            if ($request->has('Is_job_title') && is_array($request->Is_job_title)) {
                foreach ($request->Is_job_title as $key => $value) {
                    $Internship = new Internship;
                    $Internship->user_id = $id;
                    $Internship->job_title = $value;
                    $Internship->company = $request->has('Is_company') && isset($request->Is_company[$key]) ? $request->Is_company[$key] : null;
                    $Internship->start_date = $request->has('Is_start_date') && isset($request->Is_start_date[$key]) ? $request->Is_start_date[$key] : null;
                    $Internship->end_date = $request->has('Is_end_date') && isset($request->Is_end_date[$key]) ? $request->Is_end_date[$key] : null;
                    $Internship->is_currently_pursuing_internship = $request->has('Is_currently_pursuing_internship') && isset($request->Is_currently_pursuing_internship[$key]) ? $request->Is_currently_pursuing_internship[$key] : 0;
                    $Internship->city = $request->has('Is_city') && isset($request->Is_city[$key]) ? $request->Is_city[$key] : null;
                    $Internship->state_id = $request->has('Is_state_id') && isset($request->Is_state_id[$key]) ? $request->Is_state_id[$key] : null;
                    $Internship->description = $request->has('Is_description') && isset($request->Is_description[$key]) ? $request->Is_description[$key] : null;
                    $Internship->save();
                }
            }
              return redirect()->back()->with('success',"Internship updated successfully");

        }elseif($request->SectionNmae == "Certificate")
        { 
            Session::put('SectionNmae','Certificate');
            Certificate::where('user_id', $id)->delete();
            if ($request->has('cer_name') && is_array($request->cer_name)) {
                foreach ($request->cer_name as $key => $value) {
                    $Certificate = new Certificate;
                    $Certificate->user_id = $id;
                    $Certificate->name = $value;
                    $Certificate->organization = $request->has('cer_organization') && isset($request->cer_organization[$key]) ? $request->cer_organization[$key] : null;
                    $Certificate->issued_date = $request->has('cer_issued_date') && isset($request->cer_issued_date[$key]) ? $request->cer_issued_date[$key] : null;
                    $Certificate->url = $request->has('cer_url') && isset($request->cer_url[$key]) ? $request->cer_url[$key] : null;
                    $Certificate->description = $request->has('cer_description') && isset($request->cer_description[$key]) ? $request->cer_description[$key] : null;
                    $Certificate->save();
                }
            }
              return redirect()->back()->with('success',"Certificate updated successfully");

        }elseif($request->SectionNmae == "Courses")
        { 
            Session::put('SectionNmae','Courses');
            Course::where('user_id', $id)->delete();
            if ($request->has('Co_institution') && is_array($request->Co_institution)) {
                foreach ($request->Co_institution as $key => $value) {
                    $Course = new Course;
                    $Course->user_id = $id;
                    $Course->institution = $value;
                    $Course->course = $request->has('Co_course') && isset($request->Co_course[$key]) ? $request->Co_course[$key] : null;
                    $Course->start_date = $request->has('Co_start_date') && isset($request->Co_start_date[$key]) ? $request->Co_start_date[$key] : null;
                    $Course->end_date = $request->has('Co_end_date') && isset($request->Co_end_date[$key]) ? $request->Co_end_date[$key] : null;
                    $Course->is_currently_pursuing_course = $request->has('Co_is_currently_pursuing_course') && isset($request->Co_is_currently_pursuing_course[$key]) ? $request->Co_is_currently_pursuing_course[$key] : null;
                    $Course->save();
                }
            }
            return redirect()->back()->with('success',"Courses updated successfully");

        }elseif($request->SectionNmae == "References")
        {
            Session::put('SectionNmae','References');
            Reference::where('user_id', $id)->delete();
            if ($request->has('referent_name') && is_array($request->referent_name)) {
                foreach ($request->referent_name as $key => $value) {
                    $Reference = new Reference;
                    $Reference->user_id = $id;
                    $Reference->referent_name = $value;
                    $Reference->referent_company = $request->has('referent_company') && isset($request->referent_company[$key]) ? $request->referent_company[$key] : null;
                    $Reference->referent_email = $request->has('referent_email') && isset($request->referent_email[$key]) ? $request->referent_email[$key] : null;
                    $Reference->referent_phone_number = $request->has('referent_phone_number') && isset($request->referent_phone_number[$key]) ? $request->referent_phone_number[$key] : null;
                    $Reference->save();
                }
            }
            return redirect()->back()->with('success',"References updated successfully");

        }elseif($request->SectionNmae == "Links")
        {
            Session::put('SectionNmae','Links');
            Link::where('user_id', $id)->delete();
            if ($request->has('link_title') && is_array($request->link_title)) {
                foreach ($request->link_title as $key => $value) {
                    $Link = new Link;
                    $Link->user_id = $id;
                    $Link->link_title = $value;
                    $Link->url = $request->has('url') && isset($request->url[$key]) ? $request->url[$key] : null;
                    $Link->save();
                }
            }
             return redirect()->back()->with('success',"Links updated successfully");

        }elseif($request->SectionNmae == "Languages")
        {
            Session::put('SectionNmae','Languages');
            Language::where('user_id', $id)->delete();
            if ($request->has('language') && is_array($request->language)) {
                foreach ($request->language as $key => $value) {
                    $Language = new Language;
                    $Language->user_id = $id;
                    $Language->language = $value;
                    $Language->proficiency = $request->has('proficiency') && isset($request->proficiency[$key]) ? $request->proficiency[$key] : null;
                    $Language->save();
                }
            }
            return redirect()->back()->with('success',"Languages updated successfully");

        }elseif($request->SectionNmae == "Customsection")
        {
            Session::put('SectionNmae','Customsection');
            CustomSection::where('user_id', $id)->delete();
            if ($request->has('header') && is_array($request->header)) {
                foreach ($request->header as $key => $value) {
                    $CustomSection = new CustomSection;
                    $CustomSection->user_id = $id;
                    $CustomSection->header = $value;
                    $CustomSection->sub_header = $request->has('sub_header') && isset($request->sub_header[$key]) ? $request->sub_header[$key] : null;
                    $CustomSection->description = $request->has('description') && isset($request->description[$key]) ? $request->description[$key] : null;
                    $CustomSection->save();
                }
            }

            return redirect()->back()->with('success',"Custom Section updated successfully");

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

    function generateRandomPassword($length = 10) {
        return Str::random($length);
    }

    /**
     * find email.
     */
    public function uniqueemail(Request $request)
    {
        // Retrieve the count of users with similar email addresses
        $usersCount = User::where('email', 'LIKE', '%' . $request->email . '%')->count();
            return response()->json([
                'status' => 200,
                'count' => $usersCount 
            ]);           
    }
    
    /**
     * User status update.
     */
    public function updateStatus(Request $request)
    {
        $user = User::find($request->ids);
        $user->status = $request->status;       
        $user->save();
            return response()->json([
                'status' => 200,
                'success' => true   
            ]);     
    }

    
   
}
