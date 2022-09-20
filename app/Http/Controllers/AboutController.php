<?php

namespace App\Http\Controllers;
use App\Models\Image;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'about')->first();
        $imgs = Image::where('page_id',$page->id)->get();
        return view('admin.pages.about.adminAbout', ['imgs' => $imgs, 'page' => $page]);
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
