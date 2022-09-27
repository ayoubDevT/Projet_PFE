<?php

namespace App\Http\Controllers;

use App\Mail\Message as AppMailMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;

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
        $mailData = [
            'subject' => $att['subject'],
            'name' => $att['name'],
            'email' => $att['email'],
            'phone' => $att['phone'],
            'message' => $att['message'],
            
           
        ];
        
        Mail::to('yafouzeayoub@gmail.com')->send(new \App\Mail\Message($mailData, $att['email']));

        Message::create($att);
        return back();
    }
}
