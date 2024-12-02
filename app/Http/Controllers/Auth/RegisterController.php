<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Plan;
use App\Models\Userplan;
use Illuminate\Support\Carbon;
use App\Mail\EmailVerification;
use App\Models\UserResumeTemplate;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                function ($attribute, $value, $fail) {
                    $user = auth()->user();
                    if ($user && $user->email === $value) {
                        return; // Skip validation if the email matches the current user's email
                    }
                    $exists = User::where('email', $value)->whereIn('status', [0, 1 , 4])->exists();
                    if ($exists) {
                        $fail('The email has already been taken.');
                    }
                },
            ],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }
     
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    function userCreate(Request $request){

        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                function ($attribute, $value, $fail) {
                    $user = auth()->user();
                    if ($user && $user->email === $value) {
                        return; // Skip validation if the email matches the current user's email
                    }
                    $exists = User::where('email', $value)->whereIn('status', [0, 1 , 4])->exists();
                    if ($exists) {
                        $fail('The email has already been taken.');
                    }
                },
            ],
            'password' => ['required', 'string', 'min:8'],
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::where('email', $request->email)->where('status', 2)->first();
        $jsonData = [
            "personalDetai" =>  0,
            "contact_information" => 0,
            "professionalsummary" => 0,
            "side_employment_history" => 0,
            "side_education" => 0,
            "choosePlan" => 0,
        ];
        if($user){
            User::where('id', $user->id)->update([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'password' => Hash::make($request->password),
                'completion_status' => json_encode($jsonData),
            ]);
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
            
            $content = View::make('emails.email-varification', ['data' => $details])->render();

            Mail::send([], [], function ($message) use ($user, $content) {
                $message->to($user->email)
                        ->subject('Your Email Verification OTP')
                        ->setBody($content, 'text/html'); // Set the email body and specify it's HTML
            });

        }else{
            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => 2,
                'completion_status' => json_encode($jsonData),
            ]);
            UserResumeTemplate::create([
                'user_id' => $user->id,
                'template_id' => 1,
            ]);
            $slug = $this->generateSlug($user);
            $user->update(['slug' => $slug]);
    
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
                        ->setBody($content, 'text/html'); // Set the email body and specify it's HTML
            });
        }
        return back()->with('model-open', 'Please open the model.')->withInput();
        
    }

    function validateOTP(Request $request){
        $email  = $request->email;
        $otp = $request->email_otp;
        $user = User::where('email', $email)->where('status', 2)->first();
     

        if(!Hash::check($otp, $user->otp_token) || $user->expire_time < Carbon::now()){
            return redirect()->back()->with(['error' =>  'Invalid OTP, Please check your OTP', 'model-open' => 'Please open the model.'])->withInput();
        }else{
            User::where('id', $user->id)->update([ 
                'status' => 0,
                'email_verified_at' => Carbon::now(),
            ]);  
            auth()->login($user);
            return redirect()->route('home');
        }
    }
    protected function create(array $data)
    {

        // $email  = $request->email;
        // $otp = $request->email_otp;
        // $user = User::where('email', $email)->where('status', 2)->first();

        // if(!Hash::check($otp, $user->otp_token) || $user->expire_time < Carbon::now()){
        //     return redirect()->back()->with('error', 'Invalid OTP, Please check your OTP');
        // }else{
        //     User::where('id', $user->id)->update([
        //         'status' => 0
        //     ]);  
        //     return $user;
        // }
    }

    private function generateSlug(User $user)
    {
        $slug = $this->generateUniqueRandomString(20);
        while (User::where('slug', $slug)->where('id', '!=', $user->id)->exists()) {
            $slug = $this->generateUniqueRandomString(20);
        }
        return $slug;
    }

    private function generateUniqueRandomString($length = 20)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
    
   public function switchuser(Request $request, $email, $token)
    {
        // Find the user by email and remember token
        $user = User::where('email', $email)->where('remember_token', $token)->first();
    
        if ($user) {
            $user->remember_token = null;
            $user->save();
            
            Auth::login($user);
    
            // Redirect the user to their dashboard or any desired route
            return redirect()->route('create-resume');
        } else {
            // Handle invalid email or token
            return redirect()->route('login')->with('error', 'Invalid email or token');
        }
    }
    
    
    
}
