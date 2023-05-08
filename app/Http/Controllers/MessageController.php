<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Fine;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        $fines = Fine::whereUserId(auth()->id())->get();
        
        return view('message.index', compact('messages', 'fines'));
    }

    public function create()
    {
        return view('message.create');
    }

    public function store(Request $request)
    {
        Message::create([
            'user_id' => auth()->id(),
            'email' => auth()->user()->email,
            'title' => $request->title,
            'message' => $request->message,
            'date' => $request->date,
        ]);

       return redirect()->route('message.index');
    }
}