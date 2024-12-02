<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\JobApplyManagement;
use Auth;
use Hash;
use Session;
use Mail;
use validator;

class AppManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request,$id)
    {
        $JobApplyManagement = JobApplyManagement::where('user_id',$id)->get();
        return view('admin.AppManagement.index',compact('JobApplyManagement','id')); 
    }

    /**
     *  Add the data of new user.
     */
    public function create(Request $request,$id)
    {
       return view('admin.AppManagement.create',compact('id')); 
    }

    /**
     * Store the New user data.
     */
    public function store(Request $request,$id)
    {
        // dd($request->all());
      $this->validate($request, [
        'job_title' => 'required',
        'company_name' => 'required',
        'remark' => 'nullable|max:300',
        'link' => 'nullable|url', 
    ]);



        $remark = $request->filled('remark') ? $request->input('remark') : null;

        JobApplyManagement::create([
            'user_id' => $id,
            'job_title' => $request->input('job_title'),
            'company_name' => $request->input('company_name'),
            'link' => $request->input('link'),
            'remark' => $remark,
            'date' => now(), // Assuming you want to set the application date as the current date
        ]);


        
        return redirect()->route('app-management.index', $id)->with('success', 'New Job Application added successfully');

    }

    
    /**
     * Edit the user data.
     */
    public function edit($id)
    {
       //
    }

    /**
     * View the user data.
     */
    public function view($userid, $id)
    {
       $JobApplyManagement = JobApplyManagement::where('id', $id)->where('user_id', $userid)->first();
        return view('admin.AppManagement.view', compact('JobApplyManagement', 'userid')); 
    }

    
   
    /**
     * Update the user data.
     */
     public function delete($userid, $id)
    {
       
          $JobApplyManagement = JobApplyManagement::where('id', $id)->where('user_id', $userid)->delete();
        return redirect()->route('app-management.index', $userid)->with('success', 'Job Application deleted successfully');
    }


    
   
}
