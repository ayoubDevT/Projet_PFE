<?php

namespace App\Http\Controllers;

use App\Mail\Booking as MailBooking;
use App\Models\Booking;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.messages.booking', ['bookings' => $bookings]);
    }

    public function store(Request $request)
    {
       
       $trip = Trip::find(request()->trip);
        $att = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'person' => 'required|numeric|min:1',
            'arrival' => 'required|date|before_or_equal:departure|after_or_equal:tomorrow',
            'departure' => 'required|date|after_or_equal:arrival',
            'message' => 'required',
            
           
        ]);

        $mailData = [
            'name' => $att['name'],
            'email' => $att['email'],
            'phone' => $att['phone'],
            'trip' => $trip->title_en,
            'person' => $att['person'],
            'arrival' => $att['arrival'],
            'departure' => $att['departure'],
            'message' => $att['message'],
            
           
        ];
        
        Mail::to('yafouzeayoub@gmail.com')->send(new \App\Mail\Booking($mailData, $att['email']));

        $att['trip_id'] = request()->trip;
        
        Booking::create($att);
        return back();
    }
}

