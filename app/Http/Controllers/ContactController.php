<?php

namespace App\Http\Controllers;
use App\Models\Image;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $imgs = Image::where('page','contact')->get();
        return view('admin.pages.contact.adminContact', ['imgs' => $imgs]);
    }
    public function store(Request $request)
    {

        $att = $request->validate([
            'path' => 'required|image',
            'page' => 'required'
        ]);
        $att['path'] = request()->file('path')->store('slider');

        Image::create($att);
        return back();
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
