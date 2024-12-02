<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\JobPreference;
use Illuminate\Http\Request;

class AJobPreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $JobPreference = JobPreference::get();
        return view('admin.JobPreference.index',compact('JobPreference'));
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
     //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function show(JobPreference $jobPreference ,$id)
    {
        $Jobs = JobPreference::find($id);
        return view('admin.JobPreference.show',compact('Jobs'));
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
    
    public function updateStatus(Request $request)
    {
        $Job = JobPreference::find($request->ids);
        
        $Job->status = $request->status;       
        $Job->save();
            return response()->json([
                'status' => 200,
                'success' => true   
            ]);     
    }
    
    
}
