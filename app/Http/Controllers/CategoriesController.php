<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Art;

class CategoriesController extends Controller
{
    public function show(Category $category)
    {
        // 1.父级分类
        // 2.子级分类
        // 3.锁定的分类
        // 输入父级 锁定的分类为第一个子级

        if ($category->type == 0) {
            $parCate = $category;
            $subCate = Category::where('parent_id', $parCate->id)->with('arts')->get();
            $category = $subCate[0];
        } else {
            $parCate = Category::find($category->parent_id);
            $subCate = Category::where('parent_id', $parCate->id)->with('arts')->get();
            $category = $category->load('arts');
        }
        switch ($category->type) {
            case '4':
                $n = 16;
                break;
            case '2':
                $n = 10;
                break;
            case '3':
                $n = 8;
                break;
        }
        if ($category->type == 1) {
            $arts = Art::where('category_id', $category->id)->get();
        } else {
            $arts = Art::where('category_id', $category->id)->paginate($n);
        }

        return view('p.arts.index', compact('category', 'parCate', 'subCate', 'arts'));

    }
}
