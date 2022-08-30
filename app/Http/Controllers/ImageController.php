<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $imgs = Image::all();
        return view('admin.pages.home', ['imgs' => $imgs]);
    }

    public function store(Request $request)
    {
        
        $att = $request->validate([
            'path' =>'required|image'
        ]);
        $att['path'] = request()->file('path')->store('slider');

        Image::create($att);
        return back();
    }
    
    public function update(Image $image)
    {
        
        
    }

    public function delete()
    {
        $image = Image::find(request()->id);
        $imagePath = 'storage/'. $image->path;
        if (file_exists($imagePath)) {
            @unlink($imagePath);
        }
        $image->delete();        
        return back();
    }
}
