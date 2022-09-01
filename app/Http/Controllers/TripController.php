<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Trip;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        $categories = Category::all();
        return view('admin.pages.trips', ['trips' => $trips, 'categories' => $categories]);
    }

    
    public function store(Request $request)
    {
       
       
        $att = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'thumbnail' => 'required|image',
            'overview' => 'required',
            'days' => 'required',
            'min_age' => 'required',
            'months' => 'required'
           
        ]);
        
        $att['thumbnail'] = request()->file('thumbnail')->store('trips');
      

        Trip::create($att);
        return back();
    }

    public function update($id)
    {
        $trip = Trip::find($id);
        $trips = Trip::all();
        $categories = Category::all();
        return view('admin.pages.editTrip', ['trip' => $trip , 'categories' => $categories, 'trips' => $trips]);
    }

    public function edit(Request $request, $id)
    {
        $trip = Trip::find($id);
        $trips = Trip::all();
        $categories = Category::all();
        $att = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'thumbnail' => 'image',
            'overview' => 'required',
            'days' => 'required',
            'min_age' => 'required',
            'months' => 'required'
           
        ]);
        
        $imagePath = 'storage/' . $trip->thumbnail;

        if ($request->has('thumbnail')) {
            
            $att['thumbnail'] = request()->file('thumbnail')->store('trips');
            
            if (file_exists($imagePath)) {
                @unlink($imagePath);
            }
            
        }


        $trip->update($att);

        return view('admin.pages.trips',['trips' => $trips , 'categories' => $categories]);
    }
    
    public function delete()
    {

        $trip = Trip::find(request()->id);
        $imagePath = 'storage/' . $trip->thumbnail;
        if (file_exists($imagePath)) {
            @unlink($imagePath);
        }
        $trip->delete();
        return back();
    }
    
}