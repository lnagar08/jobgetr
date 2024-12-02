<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContantManagement;
use Illuminate\Http\Request;
use Session;

class ContantManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $CManage = ContantManagement::first();
        return view('admin.ContantManagement.create',compact('CManage')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->id == null) {
            ContantManagement::create($request->all());
            return redirect()->back()->with('success', 'Interface Content Manager successfully created');
        } else {
            $contantManagement = ContantManagement::findOrFail($request->id);
            $contantManagement->update($request->all());
            Session::put('SectionNmae', $request->currentsection);
            return redirect()->back()->with('success', "$request->currentsection updated successfully");
        }
    }
    


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContantManagement  $contantManagement
     * @return \Illuminate\Http\Response
     */
    public function show(ContantManagement $contantManagement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContantManagement  $contantManagement
     * @return \Illuminate\Http\Response
     */
    public function edit(ContantManagement $contantManagement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContantManagement  $contantManagement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContantManagement $contantManagement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContantManagement  $contantManagement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContantManagement $contantManagement)
    {
        //
    }
}
