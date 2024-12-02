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

class ImproveController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function formatPhoneNumber($phoneNumber)
    {
        $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        if (strlen($phoneNumber) === 11 && $phoneNumber[0] === '1') {
            $phoneNumber = substr($phoneNumber, 1);
        }
        $formattedPhoneNumber = preg_replace('/(\d{3})(\d{3})(\d{4})/', '($1) $2-$3', $phoneNumber);

        return $formattedPhoneNumber;
    }

    public function index()
    {
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
        $template = UserResumeTemplate::leftjoin('resume_templates', 'user_resume_templates.template_id', '=', 'resume_templates.id')
        ->where('user_resume_templates.user_id', auth()->guard('web')->user()->id)->select('user_resume_templates.*', 'resume_templates.template_path', 'resume_templates.template_preview_image')->first();

        $templatePath = str_replace('\\', '/', $template->template_path);
        $preview_render = view($templatePath, $viewData)->render();
        return view('improve', compact('preview_render', 'template'));
    }
}
