<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Session;

class SettingController extends Controller
{
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $youtube_video_url = Setting::where('key_','youtube_video_url')->first();
        $youtube_video_description = Setting::where('key_','youtube_video_description')->first();
        $profile_text_block = Setting::where('key_','profile_text_block')->first();
        $interview_price_1   = Setting::where('key_','interview_price_1')->first();
        $interview_price_5   = Setting::where('key_','interview_price_5')->first();
        $interview_price_10   = Setting::where('key_','interview_price_10')->first();
        return view('admin.settings.create',compact('youtube_video_url','youtube_video_description','profile_text_block','interview_price_1','interview_price_5','interview_price_10')); 
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
        
        if($request->btnNaId == "UserProfile")
        {
            Session::put('settingName','UserProfile');

            if($request->youtube_video_url)
            {
                $Setting = Setting::where('key_','youtube_video_url')->count();
                if($Setting > 0)
                {
                    $Setting = Setting::where('key_','youtube_video_url')->first();
                    $Setting->value = $request->youtube_video_url;
                    $Setting->save();
                }else{
                    $Setting = new Setting;
                    $Setting->key_ = 'youtube_video_url';
                    $Setting->value = $request->youtube_video_url;
                    $Setting->save();
                    
                }
            }else{
                $Setting = Setting::where('key_','youtube_video_url')->first();
                if($Setting)
                {
                    if($request->youtube_video_url == '' || $request->youtube_video_url == null)
                    {
                        $Setting->value = null;
                        $Setting->save();
                    }
                }
            }

            if($request->youtube_video_description)
            {
                $Setting = Setting::where('key_','youtube_video_description')->count();
                if($Setting > 0)
                {
                    $Setting = Setting::where('key_','youtube_video_description')->first();
                    $Setting->value = $request->youtube_video_description;
                    $Setting->save();
                }else{
                    $Setting = new Setting;
                    $Setting->key_ = 'youtube_video_description';
                    $Setting->value = $request->youtube_video_description;
                    $Setting->save();

                }
            }else{
                $Setting = Setting::where('key_','youtube_video_description')->first();
                if($Setting)
                {
                    if($request->youtube_video_description == '' || $request->youtube_video_description == null)
                    {
                        $Setting->value = null;
                        $Setting->save();
                    }
                }
            }

            if($request->profile_text_block)
            {
                $Setting = Setting::where('key_','profile_text_block')->count();
                if($Setting > 0)
                {
                    $Setting = Setting::where('key_','profile_text_block')->first();
                    $Setting->value = $request->profile_text_block;
                    $Setting->save();
                }else{
                    $Setting = new Setting;
                    $Setting->key_ = 'profile_text_block';
                    $Setting->value = $request->profile_text_block;
                    $Setting->save();

                }
            }else{
                $Setting = Setting::where('key_','profile_text_block')->first();
                if($Setting)
                {
                    if($request->profile_text_block == '' || $request->profile_text_block == null)
                    {
                        $Setting->value = null;
                        $Setting->save();
                    }
                }
            }
            
            return redirect()->route('settings.create')->with('success', 'User Profile Settings Updated  successfully!');
        }
        
        if($request->btnNaId == "PriceInterview")
        {
            Session::put('settingName','PriceInterview');
            
            if($request->interview_price_1)
            {
                $Setting = Setting::where('key_','interview_price_1')->count();
                if($Setting > 0)
                {
                    $Setting = Setting::where('key_','interview_price_1')->first();
                    $Setting->value = $request->interview_price_1;
                    $Setting->save();
                }else{
                    $Setting = new Setting;
                    $Setting->key_ = 'interview_price_1';
                    $Setting->value = $request->interview_price_1;
                    $Setting->save();

                }
            }else{
                $Setting = Setting::where('key_','interview_price_1')->first();
                if($Setting)
                {
                    if($request->interview_price_1 == '' || $request->interview_price_1 == null)
                    {
                        $Setting->value = null;
                        $Setting->save();
                    }
                }
            }
            
            if($request->interview_price_5)
            {
                $Setting = Setting::where('key_','interview_price_5')->count();
                if($Setting > 0)
                {
                    $Setting = Setting::where('key_','interview_price_5')->first();
                    $Setting->value = $request->interview_price_5;
                    $Setting->save();
                }else{
                    $Setting = new Setting;
                    $Setting->key_ = 'interview_price_5';
                    $Setting->value = $request->interview_price_5;
                    $Setting->save();

                }
            }else{
                $Setting = Setting::where('key_','interview_price_5')->first();
                if($Setting)
                {
                    if($request->interview_price_5 == '' || $request->interview_price_5 == null)
                    {
                        $Setting->value = null;
                        $Setting->save();
                    }
                }
            }
            
            if($request->interview_price_10)
            {
                $Setting = Setting::where('key_','interview_price_10')->count();
                if($Setting > 0)
                {
                    $Setting = Setting::where('key_','interview_price_10')->first();
                    $Setting->value = $request->interview_price_10;
                    $Setting->save();
                }else{
                    $Setting = new Setting;
                    $Setting->key_ = 'interview_price_10';
                    $Setting->value = $request->interview_price_10;
                    $Setting->save();

                }
            }else{
                $Setting = Setting::where('key_','interview_price_10')->first();
                if($Setting)
                {
                    if($request->interview_price_10 == '' || $request->interview_price_10 == null)
                    {
                        $Setting->value = null;
                        $Setting->save();
                    }
                }
            }
            
            return redirect()->route('settings.create')->with('success', 'Price Interview Updated  successfully!');
        }
    }
}
