<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}