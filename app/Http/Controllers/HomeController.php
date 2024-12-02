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
use App\Models\UserResume;
use App\Models\Setting;
use App\Models\JobApplyManagement;
use Illuminate\Support\Str;
use App\Mail\NewPasswordEmail;
use Mail;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\Helpers\UrlEncrypter;
use App\Mail\UserContactUs;
use App\Models\ContactUs;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function resetPassword(Request $request){
        if(auth()->guard('web')->user()){
            return view('reset-password');
        }else{
            return redirect()->route('login');
        }
    }

    public function updateResetPassword(Request $request){
        $user = auth()->guard('web')->user();

        if (!$user) {
            return redirect()->route('login');
        }

        $data = $request->validate([
            'current_password' => ['required', 'string', 'min:8'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if (!Hash::check($data['current_password'], $user->password)) {
            return back()->withErrors(['current_password' => 'The current password is incorrect.']);
        }

        $user->password = Hash::make($data['password']);
        $user->save();

        return redirect()->back()->with('success', 'Password updated successfully.');

    }

    public function shareResume(){
        $user_slug = auth()->guard('web')->user()->slug;
        $resume_link = url('/').'/resume/'.$user_slug;
        return view('resume-share', compact('resume_link'));
        
    }

   

    public function finalResume(Request $request, $user_slug){
        if($user_slug){
            $user = User::where('slug', $user_slug)->first();
            $employmentHistories = @$user->employmentHistories;
            $educations = @$user->educations;
            $internships = @$user->internships;
            $courses = @$user->courses;
            $references = @$user->references;
            $links = @$user->links;
            $customSections = @$user->customSections;
            $skills = @$user->skills;
            $languages = @$user->languages;
            $certificates = @$user->certificates;
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
        ->where('user_resume_templates.user_id', $user->id)->select('user_resume_templates.*', 'resume_templates.template_path', 'resume_templates.template_preview_image')->first();
        if($template){
            $templatePath = str_replace('\\', '/', $template->template_path);
            $preview_render = view($templatePath, $viewData)->render();
        }else{
            abort(500);
        }
        return view('final-resume', compact('preview_render', 'template'));
        
    }

     public function downloadPDF()
    {          
        // return view('pdf-generater');
        $pdf = PDF::loadView('pdf-generater');
        return $pdf->stream('Resume.pdf');
        // return $pdf->download('Resume.pdf');
    }
    
    public function myProfile(){
      if(auth()->guard('web')->user()){
            $user_resume = UserResume::where('user_id', auth()->guard('web')->user()->id)->get();
            $user = User::where('id', auth()->guard('web')->user()->id)->first();
            $setting = Setting::where('key_', 'twitter_link')->first();
            $youtube_video = Setting::where('key_', 'youtube_video_url')->first();
            $youtube_video_desc = Setting::where('key_', 'youtube_video_description ')->first();
            $profile_text_block = Setting::where('key_', 'profile_text_block ')->first();
            $employmentHistories = $user->employmentHistories;
            $educations = $user->educations;
            $JobApplyManagement = JobApplyManagement::where('user_id', auth()->guard('web')->user()->id)->get();
            
            return view('my-profile', compact('setting', 'youtube_video', 'youtube_video_desc', 'profile_text_block', 'user_resume', 'user', 'employmentHistories', 'educations','JobApplyManagement'));
        }else{
            return redirect()->route('login');
        }
    }

    public function uploadResume(Request $request){
        
        if(auth()->guard('web')->user()){
            $request->validate([
                'title' => 'required|string',
                'user_resume' => 'required|file|mimes:csv,doc,docx,pdf,xls,xlsx,jpeg,jpg,png,gif',
            ]);
    
            // Store the user resume file
            $destinationPath = public_path().'/uploads/user_resume';
            $fileName = '_'.time().'_'.$request->user_resume->getClientOriginalName();
            $request->user_resume->move($destinationPath, $fileName);
            $filePath = 'uploads/user_resume/'.$fileName;
    
            // Create a new UserResume instance
            $userResume = new UserResume([
                'user_id' => auth()->guard('web')->user()->id,
                'title' => $request->title,
                'file_path' => $filePath,
            ]);
    
            // Save the UserResume instance to the database
            $userResume->save();
            return redirect()->back()->with('success', 'Resume uploaded successfully.');
        }else{
            return redirect()->route('login');
        }
    }
    
    public function deleteResume(Request $request){

        if(auth()->guard('web')->user()){
            if($request->resume_id){
               UserResume::where('user_id', auth()->guard('web')->user()->id)->where('id', $request->resume_id)->delete();
                return response()->json([
                    'status' =>  200,
                    'message' => 'deleted successfully'
                ]);
            }else{
                 return response()->json([
                    'status' =>  500,
                    'message' => 'Resume Not Found.'
                ]);
            }
        }else{
            return redirect()->route('login');
        }
    }
    
     public function saveContactUs(Request $request){

        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        ContactUs::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
        // Mail::to('rs9613609@gmail.com')->send(new UserContactUs($data));

        $content = View::make('emails.user_contact_us_email', ['data' => $data])->render();
        Mail::send([], [], function ($message) use ($request, $content) {
            $message->to('noreply@resumegpt.co')
                    ->subject('New Contact Form Submission')
                    ->setBody($content, 'text/html'); // Set the email body and specify it's HTML
        });

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    
     public function switch(Request $request)
     {
        $user = auth()->guard('web')->user();
        if ($user) {
            $user->remember_token = Str::random(35);
            $user->save();
            
            $email = urlencode($user->email);
            $logintoken = urlencode($user->remember_token);
            
            $redirectUrl = "https://jobgetr.daedaltech.online/OpenInterview/public/switch/{$email}/to/{$logintoken}";
            
            return redirect()->away($redirectUrl);
        }
    
        return redirect()->route('login');

     }


  
}
