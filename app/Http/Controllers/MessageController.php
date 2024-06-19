<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;


class MessageController extends Controller
{
    public function showMessages()
{
    // Fetch latest 5 messages
    $messages = Message::orderBy('created_at', 'desc')->take(5)->get();

    // Calculate count of unread messages
    $unreadMessagesCount = Message::where('recipient_id', auth()->id())
        ->where('read_at', null)
        ->count();

    return view('Dashboard', compact('unreadMessagesCount'));
}


    public function sendMessage(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'recipient_id' => 'required|exists:users,id',
            'content' => 'required|string|max:255',
        ]);

        // Create a new message
        $message = Message::create([
            'sender_id' => auth()->id(),
            'recipient_id' => $request->recipient_id,
            'content' => $request->content,
        ]);

        return response()->json(['message' => 'Message sent successfully', 'data' => $message]);
    }

    public function getMessageHistory(Request $request)
    {
        
        $messages = Message::where(function ($query) use ($request) {
            $query->where('sender_id', auth()->id())
                  ->where('recipient_id', $request->recipient_id);
        })->orWhere(function ($query) use ($request) {
            $query->where('sender_id', $request->recipient_id)
                  ->where('recipient_id', auth()->id());
        })->orderBy('created_at', 'asc')->get();

        return response()->json(['data' => $messages]);
    }
}


