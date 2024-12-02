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
use App\Models\Certificate;
use App\Models\ResumeTemplate;
use App\Models\UserResumeTemplate;
use Illuminate\Support\Str;
use App\Mail\NewPasswordEmail;
use Mail;

class DesignController extends Controller
{
   
    function designResume(){
        $resume_templates = ResumeTemplate::orderBy('id', 'asc')->take(4)->get();
        $user_selected_resume_templates = UserResumeTemplate::leftjoin('resume_templates', 'user_resume_templates.template_id', '=', 'resume_templates.id')
        ->where('user_resume_templates.user_id', auth()->guard('web')->user()->id)
        ->select(
            'resume_templates.*', 
            'user_resume_templates.color_code', 
            'user_resume_templates.font_family', 
            'user_resume_templates.layout', 
            'user_resume_templates.line_height',
            'user_resume_templates.user_id'
        )
        ->first();

        if(auth()->guard('web')->user()){
            $user = User::where('id', auth()->guard('web')->user()->id)->first();
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
            
            return view('resume-design', compact('user_selected_resume_templates', 'certificates', 'resume_templates', 'user', 'skills', 'employmentHistories', 'educations', 'courses', 'customSections', 'internships', 'languages', 'links', 'references'));
        }else{
            return view('resume-design', compact('user_selected_resume_templates','resume_templates'));
        }
    }

    public function formatPhoneNumber($phoneNumber)
    {
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        if (strlen($phoneNumber) === 11 && $phoneNumber[0] === '1') {
            $phoneNumber = substr($phoneNumber, 1);
        }
        $formattedPhoneNumber = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $phoneNumber);

        return $formattedPhoneNumber;
    }


    public function chooseResumeTemplate(Request $request){
        if (!$request->template_id) {
            return response()->json(['status' => 500, 'message' => 'Template ID required!']);
        }
        $resumeTemplate = ResumeTemplate::find($request->template_id);
        if (!$resumeTemplate) {
            return response()->json(['status' => 500, 'message' => 'Invalid Template ID!']);
        }

        $templatePath = str_replace('\\', '/', $resumeTemplate->template_path);
        if(auth()->guard('web')->user()){
            $user = User::where('id', auth()->guard('web')->user()->id)->first();
            $user->phone_number = $user->phone_number;
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
        }

        $viewData = [
            'user' => @$user,
            'skills' => @$skills,
            'employmentHistories' => @$employmentHistories,
            'educations' => @$educations,
            'courses' => @$courses,
            'customSections' => @$customSections,
            'internships' => @$internships,
            'languages' => @$languages,
            'links' => @$links,
            'references' => @$references,
            'certificates' => @$certificates
        ];

        return response()->json([
            'status' => 200,
            'message' => 'Data retrieved successfully',
            'html' => view($templatePath, $viewData)->render(),
        ]);
    }

    public function saveTemplateDetails(Request $request){

        if(!$request->template_id) return redirect()->back()->with('error', 'Template ID Required');
        $UserResumeTemplate = UserResumeTemplate::where('user_id', auth()->guard('web')->user()->id)->first();
        if($UserResumeTemplate){
            $newUserResumeTemplate = UserResumeTemplate::where('user_id', auth()->guard('web')->user()->id)->update([
                'template_id' => $request->template_id,
                // 'layout' => $request->layout,
                'line_height' => $request->line_height,
                'font_family' => $request->font_family,
                'color_code' => $request->color_code,
            ]);
        }else{
            $newUserResumeTemplate = UserResumeTemplate::create([
                'user_id' => auth()->guard('web')->user()->id,
                'template_id' => $request->template_id,
                // 'layout' => $request->layout,
                'line_height' => $request->line_height,
                'font_family' => $request->font_family,
                'color_code' => $request->color_code,
            ]);
        }
         
        if($request->flag === 'json'){
            return response()->json([
                'status' => 200,
                'message' => 'Default Template Saved Successfully',
            ]);
        }else{
            return redirect()->route('improve');
        }

    }
}
