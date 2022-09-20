<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function store(Request $request, $page)
    {
        $page1 = Page::find($page);
        $att = $request->validate([
            'body' =>'required',
        ]);
        $page1->update($att);
        return back();
    }
}
