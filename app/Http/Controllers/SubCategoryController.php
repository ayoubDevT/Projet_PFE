<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subcategories = SubCategory::with('category')->get();
        $categories = Category::all();
        return view('admin.category.categories', ['categories' => $categories, 'subcategories' => $subcategories]);
    }

    
    public function store(Request $request)
    {
       
       //ddd($request);
        $att = $request->validate([
            'category_id' => 'required',
            'name' => 'required'
            
           
        ]);
        
        $att['slug'] = str_replace(' ', '-',  $att['name']);
        SubCategory::create($att);
        return back();
    }
    
    public function delete()
    {

        $subcategories = SubCategory::find(request()->id);
        
        $subcategories->delete();
        return back();
    }
}
