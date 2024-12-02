<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageManager;
use Illuminate\Http\Request;
use Session;

class PageManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $AboutUs = PageManager::where('key','AboutUs')->first();
        $ContactUs = PageManager::where('key','ContactUs')->first();
        $FAQ = PageManager::where('key','FAQ')->first();
        $TermsofUse = PageManager::where('key','TermsofUse')->first();
        $privacypolicy = PageManager::where('key','privacypolicy')->first();
        return view('admin.PageManager.create',compact('AboutUs','ContactUs','FAQ','TermsofUse','privacypolicy'));
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
        if($request->btnNaId == 'AboutUs')
        {
            $AboutUs = PageManager::where('key','AboutUs')->first();
            if($AboutUs)
            {
                $AboutUs->name = $request->name_about_us;
                $AboutUs->content = $request->content_about_us;
                $AboutUs->status = $request->status_about_us;
                $AboutUs->save();
            }else{
                $AboutUs = new PageManager;
                $AboutUs->name = $request->name_about_us;
                $AboutUs->content = $request->content_about_us;
                $AboutUs->status = $request->status_about_us;
                $AboutUs->key = "AboutUs";
                $AboutUs->save();
            }
            Session::put('pageName','AboutUs');
            return redirect()->back()->with('success',"About Us Page Updated successfully");
        }
        if($request->btnNaId == 'ContactUs')
        {
            $ContactUs = PageManager::where('key','ContactUs')->first();
            if($ContactUs)
            {
                $ContactUs->name = $request->name_contact_us;
                $ContactUs->content = $request->content_contact_us;
                $ContactUs->status = $request->status_contact_us;
                $ContactUs->save();
            }else{
                $ContactUs = new PageManager;
                $ContactUs->name = $request->name_contact_us;
                $ContactUs->content = $request->content_contact_us;
                $ContactUs->status = $request->status_contact_us;
                $ContactUs->key = "ContactUs";
                $ContactUs->save();
            }

            Session::put('pageName','ContactUs');
            return redirect()->back()->with('success',"Contact Us Page Updated successfully");
        }
        if($request->btnNaId == 'FAQ')
        {
            $FAQ = PageManager::where('key','FAQ')->first();
            if($FAQ)
            {
                $FAQ->name = $request->name_FAQ;
                $FAQ->content = $request->content_FAQ;
                $FAQ->status = $request->status_FAQ;
                $FAQ->save();
            }else{
                $FAQ = new PageManager;
                $FAQ->name = $request->name_FAQ;
                $FAQ->content = $request->content_FAQ;
                $FAQ->status = $request->status_FAQ;
                $FAQ->key = 'FAQ';
                $FAQ->save();
            }

            Session::put('pageName','FAQ');
            return redirect()->back()->with('success',"FAQ Page Updated successfully");
        }
        if($request->btnNaId == 'TermsofUse')
        {
            $TermsofUse = PageManager::where('Key','TermsofUse')->first();
            if($TermsofUse)
            {
                $TermsofUse->name = $request->name_TermsofUse;
                $TermsofUse->content = $request->content_TermsofUse;
                $TermsofUse->status = $request->status_TermsofUse;
                $TermsofUse->save();
            }else{
                $TermsofUse = new PageManager;
                $TermsofUse->name = $request->name_TermsofUse;
                $TermsofUse->content = $request->content_TermsofUse;
                $TermsofUse->status = $request->status_TermsofUse;
                $TermsofUse->key = "TermsofUse";
                $TermsofUse->save();
            }
            Session::put('pageName','TermsofUse');
            return redirect()->back()->with('success',"Terms of Use Page Updated successfully");
        }
        if($request->btnNaId == 'privacypolicy')
        {
            $privacypolicy = PageManager::where('Key','privacypolicy')->first();
            if($privacypolicy)
            {
                $privacypolicy->name = $request->name_privacypolicy;
                $privacypolicy->content = $request->content_privacypolicy;
                $privacypolicy->status = $request->status_privacypolicy;
                $privacypolicy->save();
            }else{
                $privacypolicy = new PageManager;
                $privacypolicy->name = $request->name_privacypolicy;
                $privacypolicy->content = $request->content_privacypolicy;
                $privacypolicy->status = $request->status_privacypolicy;
                $privacypolicy->key = "privacypolicy";
                $privacypolicy->save();
            }

            Session::put('pageName','privacypolicy');
            return redirect()->back()->with('success',"Privacy Policy Page Updated successfully");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PageManager  $pageManager
     * @return \Illuminate\Http\Response
     */
    public function show(PageManager $pageManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PageManager  $pageManager
     * @return \Illuminate\Http\Response
     */
    public function edit(PageManager $pageManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PageManager  $pageManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PageManager $pageManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PageManager  $pageManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(PageManager $pageManager)
    {
        //
    }
}
