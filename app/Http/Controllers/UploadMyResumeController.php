<?php

namespace App\Http\Controllers;

use App\Models\JobPreference;
use App\Models\User;
use App\Models\Userplan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Mail\EmailResumeUploadVerification;
use Mail;
use Illuminate\Support\Facades\View;

class UploadMyResumeController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->guard('web')->user()) {
            $user = auth()->guard('web')->user();
    
            if ($user->upload_resume == null) {
                return view('UploadMyResume.index', compact('user'));
            } elseif ($user->upload_resume_verify == null && $user->upload_resume != null) {
                $successMessage = 'Verification Email already sent to your email';
                return view('UploadMyResume.index', compact('user', 'successMessage'));
            } elseif($user->upload_resume_verify != null && $user->upload_resume != null)
            {
                return view('UploadMyResume.index', compact('user'));
            }
        } else {
            return redirect()->route('login');
        }
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|string|email',
            'upload_resume' => 'required|mimes:pdf,jpg,jpeg,png,gif|max:2048', // Adjust max file size as needed (in KB)
        ]);
    
        // Assign validated data to User instance
        $user = User::find($request->userid);
        $user->first_name = $validatedData['first_name'];
        $user->last_name = $validatedData['last_name'];
        $user->email = $validatedData['email'];
         if ($request->hasFile('upload_resume')) {
            $file = $request->file('upload_resume');
            $filename = '_'.time().'_'.$file->getClientOriginalName(); 
            $file->move(public_path('uploads'), $filename); // Move the file to the 'uploads' directory in public
            $user->upload_resume = url('/uploads/'.$filename); // Save the full URL file path to the database
        }
    
        $user->save();
         if ($user->upload_resume_verify === null) {
            $user->remember_token = Str::random(30); // Generate a random string of 60 characters
            $user->save();
        
            $details = [
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'email' => $user->email,
                'link' => url("/resumeupload/{$user->remember_token}"), // Enclose the URL path inside quotes
            ];
        
            // Mail::to($user->email)->send(new EmailResumeUploadVerification($details)); // Send verification email using Mail
            $content = View::make('emails.email-resumeupload-verification', ['data' => $details])->render();

            Mail::send([], [], function ($message) use ($user, $content) {
                $message->to($user->email)
                        ->subject('Your Email Verification Link')
                        ->setBody($content, 'text/html'); // Set the email body and specify it's HTML
            });    

            return redirect()->back()->with('success', 'Verification Email sent to your email');
        }else{
              $Userplan = Userplan::where('user_id', $user->id)->first();
                   
             if($Userplan){
                 return redirect()->back()->with('success', 'Resume Uploaded successfully');
             }else{
                 return redirect()->route('mysubscriptions.index')->with('success', 'Please process the payment');
             }
        }
    }


         public function resumeuploadverify(Request $request, $token)
        {
            
            if (auth()->guard('web')->user()) {
                $user = auth()->guard('web')->user();
                if($token == $user->remember_token)
                {
                    $user->upload_resume_verify = now();
                    $user->remember_token = null;
                    $user->save();   
                    $successMessage = 'Email Verification done successfully.';
                    return redirect()->route('mysubscriptions.index')->with('success', $successMessage);
                }else{  
                    $errorMessage = 'Verification link is expired. Please upload resume again';
                    return redirect()->route('upload-my-resume.index')->with('error', $errorMessage);
                }
                
            } else {
                return redirect()->route('login');
            }
        }

  
}
