<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Page;
use App\Models\Sub;
use App\Models\Trip;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {   
        $lang = request()->session()->get('lang') ?? 'en';
        session(['lang' => $lang]);
        
        return redirect(route('client.homeLang', ['lang'=>$lang]));
    }

    public function indexLang($lang)
    {   
        
        $page = Page::where('slug','home')->first();
        $images = Image::where('page_id' , $page->id)->get();
        $trips = Trip::where('show', 1)->get();
        return view('client.index', ['page'=>$page,'images'=>$images,'trips'=>$trips]);
    }
    public function trans($lang)
    {   
        if ($lang == 'en' || $lang == 'de' || $lang == 'fr') {
            session(['lang' => $lang]);
        }

        else {
            session(['lang' => 'en']);
        }
        
        
        return back();
    }

    public function about($lang)
    {
        $page = Page::where('slug','about')->first();
        $images = Image::where('page_id' , $page->id)->get();
        return view('client.about', ['page'=>$page,'images'=>$images]);
    }
    public function contact($lang)
    {
        $page = Page::where('slug','contact')->first();
        $images = Image::where('page_id' , $page->id)->get();
        return view('client.contact', ['page'=>$page,'images'=>$images]);
    }
    public function faqs($lang)
    {
        $page = Page::where('slug','faqs')->first();
        $image = Image::where('page_id' , $page->id)->first();
        return view('client.faqs', ['page'=>$page,'image'=>$image]);
    }
    public function general_a($lang)
    {
        $page = Page::where('slug','General-advices')->first();
        $image = Image::where('page_id' , $page->id)->first();
        return view('client.general_advices', ['page'=>$page,'image'=>$image]);
    }
    public function osp($lang)
    {
        $page = Page::where('slug','our-social-projects')->first();
        $image = Image::where('page_id' , $page->id)->first();
        return view('client.our_social_projects', ['page'=>$page,'image'=>$image]);
    }
    public function prepareTravel($lang)
    {
        $page = Page::where('slug','Prepare-your-travel-to-morocco')->first();
        $image = Image::where('page_id' , $page->id)->first();
        return view('client.prepare_your_travel_to_morocco', ['page'=>$page,'image'=>$image]);
    }
    public function videos($lang)
    {
        $page = Page::where('slug','videos')->first();
        $image = Image::where('page_id' , $page->id)->first();
        return view('client.videos', ['page'=>$page,'image'=>$image]);
    }
    public function tripsCat($slug,$lang)
    {
        $page = Page::where('slug',$slug)->first();
        if (is_null($page)) {
            abort(404);
        }
        $image = Image::where('page_id' , $page->id)->first();
        $sub = Sub::where('slug' , $slug)->first();
        $trips = Trip::where('sub_id', $sub->id)->get();
        /*$trips = Trip::whereHas(['category' => function ($query) {
            $query->where('slug', $slug);
        }])->get();*/
        return view('client.tripsCat', ['page'=>$page,'image'=>$image,'trips'=>$trips,'sub'=>$sub]);
    }
    public function trip($lang,$id)
    {
        $trip = Trip::find($id);
        if (is_null($trip)) {
            abort(404);
        }
        /*$trips = Trip::whereHas(['category' => function ($query) {
            $query->where('slug', $slug);
        }])->get();*/
        return view('client.trip', ['trip'=>$trip]);
    }
}
