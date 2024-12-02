<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Userplan;
use Illuminate\Support\Facades\Validator;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

     public function login(Request $request)
    {
        $user = User::where('email', $request->email)->where('id', '!=', 1)->where('status', '!=', 2)->first();
        if($user){
            if($user->status == 1){
                return redirect('/login')->withErrors(['email' => 'Whoops! Your account is temporarily suspended. Please contact the support team.']);
            } else {

                if(!auth()->guard('web')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
                    return redirect('/login')->with('email', 'Whoops! Invalid email and password.');
                } else {
                    $currentPlan = Userplan::where('user_id', auth()->guard('web')->user()->id)->first();
                    $currentDate = now();
                    if ($currentPlan) {
                        $completion_status =  json_decode($user->completion_status);
                        if(
                            $completion_status->personalDetai === 1 &&
                            $completion_status->choosePlan === 1  && 
                            $completion_status->contact_information === 1 && 
                            $completion_status->professionalsummary === 1 && 
                            $completion_status->side_employment_history === 1 && 
                            $completion_status->side_education === 1
                        ){
                            return redirect()->route('my-profile');
                        }else{
                            return redirect()->route('create-resume');
                        }
                    }else{
                        return redirect()->route('mysubscriptions.index');
                    }


                }
            }

        } else {
            return redirect('/login')->with('email', 'Whoops! Invalid email and password.');
        }

        
    
        
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
