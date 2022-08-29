<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function store(Request $request)
    {
        $att = $request->validate([
            'body' =>'required'
        ]);
        Page::create($att);
        return view('admin.dashboard-one');
    }
}
