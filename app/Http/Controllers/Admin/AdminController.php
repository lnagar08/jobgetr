<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use Goutte\Client;

class AdminController extends Controller
{
        
    /**
     * Admin Login.
     */
    public function Login(Request $request)
    {
        $user = User::where('email', $request->username)->first();
        if($user && $user->id == 1){
            if (auth()->guard('admin')->attempt(['email' => $request->username, 'password' => $request->password])) {
                return redirect('admin/user-management')->with('success', 'Welcome To Admin');
            } else {
                return redirect()->route('admin-login')->with('error', 'Login details are not valid');
            }
        }else{
            return redirect()->route('admin-login')->with('error', 'Login details are not valid');
        }
    }
    /**
     * Admin Logout.
     */

    public function Logout()
    {
        auth()->guard('admin')->logout();
        Session::flush();
        return redirect()->route('admin-login')->with('success','SuccessFully Log Out');

    }

    public function scrapeWebsite()
    {
        // Create a Goutte client
        $client = new Client();

        // Specify the URL of the website to scrape
        $url = 'https://example.com';

        // Use Goutte to make a request to the URL
        $crawler = $client->request('GET', $url);

        // Extract data from the page using CSS selectors
        $pageTitle = $crawler->filter('title')->text();
        $paragraphs = $crawler->filter('p')->extract('_text');

        // Print the extracted data
        echo "Page Title: $pageTitle\n";
        echo "Paragraphs:\n";
        foreach ($paragraphs as $paragraph) {
            echo "- $paragraph\n";
        }
    }



    
}
