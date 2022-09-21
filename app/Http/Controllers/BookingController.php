<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.messages.booking', ['bookings' => $bookings]);
    }

    public function store(Request $request)
    {
       
       
        $att = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'person' => 'required|numeric|min:1',
            'arrival' => 'required|date|before_or_equal:departure|after_or_equal:tomorrow',
            'departure' => 'required|date|after_or_equal:arrival',
            'message' => 'required',
            
           
        ]);
        
        
        Booking::create($att);
        return back();
    }
}

