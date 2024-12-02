<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Setting;
use Illuminate\Http\Request;
use Carbon\Carbon;
use db;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::where('key_', 'twitter_link')->first();
        $userId = auth()->guard('web')->user()->id;
    
        Message::where('receiver_id', $userId)->update(['read_status' => 'true']);
    
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
    
        return view('Message.index', compact('setting', 'messages', 'userId'));
    }
        

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'attachment' => 'nullable|file|mimes:jpeg,png,pdf|max:2048', // Adjust file types and size as needed
        ]);

        $userId = auth()->guard('web')->user()->id;

        $message = new Message();
        $message->message = $request->input('message');
        $message->sender_id = $userId;
        $message->receiver_id = '1';

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = '_'.time().'_'.$file->getClientOriginalName(); 
            $file->move(public_path('uploads'), $filename); // Move the file to the 'uploads' directory in public
            $message->attachment = url('/uploads/'.$filename); // Save the full URL file path to the database
        }

        $message->save();

        Message::where('receiver_id', $userId)->update(['read_status' => 'true']);
           // Calculate the date of five days ago from today
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

        return view('Message.Message', compact('messages','userId'));
    }

   public function getMessages(Request $request) {
    $userId = auth()->guard('web')->user()->id;
    Message::where('receiver_id', $userId)->update(['read_status' => 'true']);

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
    return view('Message.Message', compact('messages', 'userId'));
}

    
public function loadmoremessages(Request $request)
{
    $userId = auth()->guard('web')->user()->id;
    $lastMessageDate = $request->input('lastMessageDate'); 
    $messageIdsString = $request->input('Messageids'); 
    $fiveDaysAgo = Carbon::parse($lastMessageDate)->subDays(5)->format('Y-m-d');

    // Convert the comma-separated string of message IDs into an array
    $messageIdsArray = explode(',', $messageIdsString);

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

    return view('Message.Message', compact('messages', 'userId'));
}



    
    

    
}
