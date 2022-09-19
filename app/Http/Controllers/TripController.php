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
        $trips = Trip::with('category')->get();
        $categories = Category::all();
        return view('admin.trips.trips', ['trips' => $trips, 'categories' => $categories]);
    }

    
    public function store(Request $request)
    {
       
       
        $att = $request->validate([
            'category_id' => 'required',
            'title' => 'required',
            'thumbnail' => 'required|image',
            'overview' => 'required',
            'days' => 'required|numeric',
            'min_age' => 'required|numeric|min:1|max:99',
            'months' => 'required'
           
        ]);
        
        $att['thumbnail'] = request()->file('thumbnail')->store('trips');
        $att['show'] = 0;

        Trip::create($att);
        return back();
    }

    public function update($id)
    {
        $trip = Trip::find($id);
        $trips = Trip::all();
        $categories = Category::all();
        return view('admin.trips.editTrip', ['trip' => $trip , 'categories' => $categories, 'trips' => $trips]);
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
            'days' => 'required|numeric',
            'min_age' => 'required|numeric|min:1|max:99',
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

        return view('admin.trips.trips',['trips' => $trips , 'categories' => $categories]);
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

    public function show($id)
    {

       
        $trip = Trip::find($id);
        $trip->show = 1;
        $trip->update();
        return back();
    }

    public function hide($id)
    {

        $trip = Trip::find($id);
        $trip->show = 0;
        $trip->update();
        return back();
    }
    
}
