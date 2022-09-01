<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Trip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $imgs = Image::all();
        $trips = Trip::all();
        return view('admin.pages.home', ['imgs' => $imgs, 'trips' => $trips]);
    }
}
