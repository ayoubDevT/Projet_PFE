<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Page;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function osp()
    {   $page = Page::where('slug', 'our-social-projects')->first();
        $img = Image::where('page_id',$page->id)->first();
        return view('admin.pages.OSP.OSP', ['img' => $img, 'page' => $page]);
    }
    
    public function tripsByCat($slug)
    {
        $img = Image::where('page',$slug)->first();
        $page = Page::where('slug',$slug)->first();
        return view('admin.pages.tripsByCat.tripsByCat', ['img' => $img, 'page' => $page]);
    }

    public function ptm()
    {
        $page = Page::where('slug', 'Prepare-your-travel-to-morocco')->first();
        $img = Image::where('page_id',$page->id)->first();
        return view('admin.pages.more.PTM', ['img' => $img, 'page' => $page]);
    }

    public function faqs()
    {
        $page = Page::where('slug', 'faqs')->first();
        $img = Image::where('page_id',$page->id)->first();
        return view('admin.pages.more.adminFaqs', ['img' => $img, 'page' => $page]);
    }

    public function videos()
    {
        $page = Page::where('slug', 'videos')->first();
        $img = Image::where('page_id',$page->id)->first();
        return view('admin.pages.more.adminVideos', ['img' => $img, 'page' => $page]);
    }

    public function general_advices()
    {
        $page = Page::where('slug', 'General-advices')->first();
        $img = Image::where('page_id',$page->id)->first();
        return view('admin.pages.more.adminGeneral_advices', ['img' => $img, 'page' => $page]);
    }

    public function contact()
    {
        $page = Page::where('slug', 'contact')->first();
        $imgs = Image::where('page_id',$page->id)->get();
        return view('admin.pages.contact.adminContact', ['imgs' => $imgs, 'page' => $page]);
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
