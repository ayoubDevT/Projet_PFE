<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Page;
use App\Models\Trip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'home')->first();
        $imgs = Image::where('page_id',$page->id)->get();
        
        $trips = Trip::all();
        return view('admin.pages.home.home', ['imgs' => $imgs, 'trips' => $trips, 'page' => $page]);
    }
    public function store(Request $request, $page)
    {

        $att = $request->validate([
            'path' => 'required|image',
            'page' => 'required'
        ]);
        $att['path'] = request()->file('path')->store('slider');
        $att['page_id'] = $page;

        Image::create($att);
        return back();
    }

    public function update($id)
    {
        $image = Image::find($id);
        return view('admin.pages.editImage', ['image' => $image]);
    }

    public function edit(Request $request)
    {
        $image = Image::find(request()->id);

        $att = $request->validate([
            'path' => 'required|image'
        ]);

        $att['path'] = request()->file('path')->store('slider');

        $imagePath = 'storage/' . $image->path;
        if (file_exists($imagePath)) {
            @unlink($imagePath);
        }



        $image->update($att);

        return back();
    }

    public function delete()
    {

        $image = Image::find(request()->id);
        $imagePath = 'storage/' . $image->path;
        if (file_exists($imagePath)) {
            @unlink($imagePath);
        }
        $image->delete();
        return back();
    }
}
