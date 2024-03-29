<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    
    protected $guarded = [];
    
    public function sub()
    {
        return $this->belongsTo(Sub::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
