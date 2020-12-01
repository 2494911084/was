<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Art;

class CategoriesController extends Controller
{

    public function show(Category $category)
    {
        $parentCate = $category;
        ## 如果是主分类则查询第一个下级分类
        if ($category->type == 0) {
            $category = Category::where('parent_id', $category->id)->first();
        }
        switch ($category->type) {
            case '1':
                ## 唯一
                $art = Art::where('category_id', $category->id)->first();
                break;
            case '2':
                $art = Art::where('category_id', $category->id)->paginate(10);
                break;
            case '3':
                $art = Art::where('category_id', $category->id)->paginate(8);
                break;
            case '4':
                $art = Art::where('category_id', $category->id)->paginate(16);
                break;
        }

        return view('p.arts.index', compact('parentCate', 'category', 'art'));

    }
}
