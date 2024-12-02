<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use App\Models\Setting;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AMessageController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', 1)
                      ->orderBy('id', 'desc')
                      ->get();
        
        return view('admin.Message.index', compact('users'));
    }
    
    public function store(Request $request)
    {
        $userId = $request->userId;

        $Messa = new Message;
        $Messa->sender_id = '1';
        $Messa->receiver_id = $userId;
        $Messa->message = $request->message;
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = '_'.time().'_'.$file->getClientOriginalName(); 
            $file->move(public_path('uploads'), $filename); // Move the file to the 'uploads' directory in public
            $Messa->attachment = url('/uploads/'.$filename); // Save the full URL file path to the database
        }
        $Messa->save();
        
        Message::where('receiver_id', '1')->update(['read_status' => 'true']);
        $startDate = Carbon::now();
        $endDate = Carbon::now()->subDays(5);
       
           // Fetch messages between the specified start and end date
           $messages = Message::where(function($query) use ($userId) {
               $query->where('sender_id', $userId)
                     ->orWhere('receiver_id', $userId);
           })
           ->where('created_at', '>=', $endDate)
           ->where('created_at', '<=', $startDate)
           ->orderBy('created_at', 'asc')
           ->get();
        
        
        return view('admin.Message.Message', compact('messages','userId'));
    }
    
    public function getMessages(Request $request) {
        $userId = $request->input('userId');

        Message::where('receiver_id', '1')->update(['read_status' => 'true']);
        
        $startDate = Carbon::now();
        $endDate = Carbon::now()->subDays(5);
       
           // Fetch messages between the specified start and end date
           $messages = Message::where(function($query) use ($userId) {
               $query->where('sender_id', $userId)
                     ->orWhere('receiver_id', $userId);
           })
           ->where('created_at', '>=', $endDate)
           ->where('created_at', '<=', $startDate)
           ->orderBy('created_at', 'asc')
           ->get();
        
        return view('admin.Message.Message', compact('messages','userId'));
    }

    public function loadmoremessages(Request $request)
    {
        $userId = auth()->guard('admin')->user()->id;
        $lastMessageDate = $request->input('lastMessageDate'); 
        $Messageids = $request->input('Messageids'); 
        $fiveDaysAgo = Carbon::parse($lastMessageDate)->subDays(5)->format('Y-m-d');

        // Convert the comma-separated string of message IDs into an array
        $messageIdsArray = explode(',', $Messageids);

        // Fetch only messages that have IDs not present in the $messageIdsArray
        $messages = Message::where(function($query) use ($userId) {
                $query->where('sender_id', $userId)
                    ->orWhere('receiver_id', $userId);
            })
            ->where('created_at', '>=', $fiveDaysAgo)
            ->where('created_at', '<=', $lastMessageDate)
            ->whereNotIn('id', $messageIdsArray) // Exclude messages with IDs already in $messageIdsArray
            ->orderBy('created_at', 'asc')
            ->get();

        return view('admin.Message.Message', compact('messages', 'userId'));
    }
        
   

   
}