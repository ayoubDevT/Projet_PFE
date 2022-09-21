<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Sub;
use Illuminate\Http\Request;

class SubController extends Controller
{
    public function index()
    {
        $subcategories = Sub::with('category')->get();
        $pages = Page::all();
        $categories = Category::all();
        return view('admin.category.categories', ['categories' => $categories, 'subcategories' => $subcategories, 'pages' => $pages]);
    }

    
    public function store(Request $request)
    {
       
       //ddd($request);
        $att = $request->validate([
            'category_id' => 'required',
            'name' => 'required'
            
           
        ]);
        $attPage = $request->validate([
            'name' => 'required'
            
           
        ]);
        
        $att['slug'] = str_replace(' ', '-',  $att['name']);
        $attPage['slug'] = str_replace(' ', '-',  $att['name']);
        Page::create($attPage);
        Sub::create($att);
        return back();
    }

    public function update($id)
    {
        $sub = Sub::find($id);
        
        $categories = Category::all();
        return view('admin.category.editCat', ['sub' => $sub , 'categories' => $categories]);
    }

    public function edit(Request $request, $slug)
    {
        $sub = Sub::where('slug', $slug);
        $page = Page::where('slug', $slug);
        $att = $request->validate([
            'category_id' => 'required',
            'name' => 'required'
            
           
        ]);
        $attPage = $request->validate([
            'name' => 'required'
            
           
        ]);
        
        $att['slug'] = str_replace(' ', '-',  $att['name']);
        $attPage['slug'] = str_replace(' ', '-',  $att['name']);
        $page->update($attPage);
        $sub->update($att);

        return redirect(route('category.index'));
    }
    
    public function delete()
    {

        $subcategories = Sub::find(request()->ids);
        $page = Page::find(request()->idp);
        
        $subcategories->delete();
        $page->delete();
        return back();
    }
}
