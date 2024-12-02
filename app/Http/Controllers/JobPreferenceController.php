<?php

namespace App\Http\Controllers;

use App\Models\JobPreference;
use App\Models\Userplan;
use Illuminate\Http\Request;

class JobPreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->guard('web')->user()->id;
        $Userplan = Userplan::where('user_id', $user_id)->first();
        if($Userplan)
        {
            $Jobs = JobPreference::where('user_id', $user_id)->first();
            return view('jobpreference.index', compact('Jobs'));
        }else{
            return redirect()->route('mysubscriptions.index');
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
        // return $request->all();
        
        // Validate the incoming request data
        $validatedData = $request->validate([
            'job_titles' => 'required|string',
            'gender' => 'required|in:male,female,other',
            'salary_range' => 'nullable|string',
            'hourly_rate' => 'nullable|string',
            'job_level' => 'required|in:entry,intermediate,advanced,senior',
            'legal_authorization' => 'required|in:Yes,No',
            'visa_sponsorship' => 'required|in:Yes,No',
            'ethnicity' => 'required|string',
            'protected_veterans' => 'required',
            'languages' => 'nullable|string',
            'disability' => 'required|in:Yes,No,No Answer,permission,certify',
        ]);
        
        // Check if it's a new job preference or an update
        if ($request->ids == 'null') {
            $jobPreference = new JobPreference();
        } else {
            $jobPreference = JobPreference::find($request->ids);
            if (!$jobPreference) {
                return redirect()->back()->with('error', 'Job preference not found');
            }
            if ($jobPreference->status != 'true') {
                return redirect()->back()->with('error', 'Job preference Editable mode is off');
            }
        }
    
        // Assign validated data to JobPreference instance
        $jobPreference->user_id = auth()->guard('web')->user()->id;
        $jobPreference->job_titles = $validatedData['job_titles'];
        $jobPreference->gender = $validatedData['gender'];
        $jobPreference->salary_range = $validatedData['salary_range'];
        $jobPreference->hourly_rate = $validatedData['hourly_rate'];
        $jobPreference->job_level = $validatedData['job_level'];
        $jobPreference->legal_authorization = $validatedData['legal_authorization'];
        $jobPreference->visa_sponsorship = $validatedData['visa_sponsorship'];
        $jobPreference->ethnicity = $validatedData['ethnicity'];
        $jobPreference->protected_veterans = $validatedData['protected_veterans'];
        $jobPreference->languages = $validatedData['languages'];
        $jobPreference->disability = $validatedData['disability'];
        $jobPreference->save();
    
        // Redirect back with success message
        return redirect()->back()->with('success', 'Job preference saved successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function show(JobPreference $jobPreference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function edit(JobPreference $jobPreference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPreference $jobPreference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPreference $jobPreference)
    {
        //
    }
}
