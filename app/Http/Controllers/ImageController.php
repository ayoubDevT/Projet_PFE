<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function osp()
    {
        $img = Image::where('page','osp')->first();
        return view('admin.pages.OSP.OSP', ['img' => $img]);
    }
    
    public function ptm()
    {
        $img = Image::where('page','ptm')->first();
        return view('admin.pages.more.PTM', ['img' => $img]);
    }

    public function faqs()
    {
        $img = Image::where('page','faqs')->first();
        return view('admin.pages.more.adminFaqs', ['img' => $img]);
    }

    public function videos()
    {
        $img = Image::where('page','videos')->first();
        return view('admin.pages.more.adminVideos', ['img' => $img]);
    }

    public function general_advices()
    {
        $img = Image::where('page','general_advices')->first();
        return view('admin.pages.more.adminGeneral_advices', ['img' => $img]);
    }

    public function contact()
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
