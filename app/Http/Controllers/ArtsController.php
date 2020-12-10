<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;
use App\Models\Category;

class ArtsController extends Controller
{
    public function show(Art $art)
    {
        // dd($art);
        $category = Category::find($art['category_id']);
        $childCate = Category::where('parent_id', $category->id)->get();
        return view('p.arts.show', compact('art', 'category', 'childCate'));
    }
}
