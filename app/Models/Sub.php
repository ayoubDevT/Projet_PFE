<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub extends Model
{
    use HasFactory;

    protected $guarded = [];
    

    public static function rules()
    {
        return ['name_en' => 'required|unique:subs'];
    }
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
