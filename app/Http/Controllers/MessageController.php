<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('admin.messages.message', ['messages' => $messages]);
    }

    public function store(Request $request)
    {
       
       
        $att = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => '',
            'message' => 'required',
            
           
        ]);
        

        Message::create($att);
        return back();
    }
}
