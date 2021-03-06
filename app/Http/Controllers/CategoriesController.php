<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Art;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        ## 判断传来的分类是否是一级分类
        if ($category->parent_id == 0) {
            $childCate = Category::where('parent_id', $category->id)->with('tj_arts')->get();
            $mr_cate = Category::with('arts')->find($childCate[0]['id']);
        } else {
            $mr_cate = Category::with('arts')->find($category['id']);
            $category = Category::find($category['parent_id']);
            $childCate = Category::where('parent_id', $category->id)->with('tj_arts')->get();
        }
        switch ($mr_cate['type']) {
            case '3':
                $page = 8;
                break;
            case '4':
                $page = 16;
                break;

            default:
                $page = 10;
                break;
        }
        $arts = Art::where('category_id', $mr_cate['id'])->paginate($page);
        // dd($mr_cate->arts);
        return view('p.index.art', compact('category', 'childCate', 'mr_cate', 'arts'));

    }
}
