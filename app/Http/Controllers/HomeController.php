<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Trip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $imgs = Image::where('page','home')->get();
        $trips = Trip::all();
        return view('admin.pages.home.home', ['imgs' => $imgs, 'trips' => $trips]);
    }
}
