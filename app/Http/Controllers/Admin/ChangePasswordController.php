<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Hash;
use Session;

class ChangePasswordController extends Controller
{
        
    /**
     * Index page.
     */
    public function index(Request $request)
    {
        return view('admin.changepassword.index');
    }
    /**
     * update password.
     */
    public function update(Request $request)
    {
        $user = auth()->guard('admin')->user();


        // Check if the provided old password matches the current password
        if (Hash::check($request->oldPassword, $user->password)) { 
            $user->update([
                'password' => Hash::make($request->newPassword),
            ]);

            return redirect()->back()->with('success', 'Password updated successfully.');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }
    }




    
}
