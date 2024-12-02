<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard.index'); 
    }
    
    /**
     * Display a listing of the resource.
     */
    public function Sales()
    {
        return view('admin.dashboard.sales'); 
    }
    
    /**
     * Display a listing of the resource.
     */
    public function table()
    {
        $user = User::get();
        return view('admin.dashboard.table',compact('user')); 
    }
   
}
