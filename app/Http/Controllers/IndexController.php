<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Jenssegers\Agent\Agent;
use App\Models\Category;

class IndexController extends Controller
{
    public function index()
    {
        ## 首页数据
        $shouye = Cache::get('was_web_site_index_setting');
        $shouye = json_decode($shouye, true);
        // dd($shouye);
        $arts = Category::find($shouye['field2_category'])->arts;

        $arts3 = Category::find($shouye['field3_category'])->arts;

        $cate = Category::find($shouye['field4_category']);
        $arts4p = Category::where('parent_id', $shouye['field4_category'])->with('arts')->get();

        $cate2 = Category::find($shouye['field5_category']);
        $arts5p = Category::where('parent_id', $shouye['field5_category'])->with('arts')->get();

        $cate3 = Category::find($shouye['field6_category']);
        $arts6p = Category::where('parent_id', $shouye['field6_category'])->with('arts')->get();

        ## 用于校验PC端还是移动端
        $agent = new Agent();
        if ($agent->isMobile() || $agent->isTablet()) {
            return view('m.index', compact('shouye', 'arts', 'arts3', 'cate', 'arts4p', 'cate2', 'arts5p', 'cate3', 'arts6p'));
        } else {
            return view('index', compact('shouye', 'arts', 'arts3', 'cate', 'arts4p', 'cate2', 'arts5p', 'cate3', 'arts6p'));
        }
    }
}
