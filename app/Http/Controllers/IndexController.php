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
        ## 第二区块
        $cate1 = Category::find($shouye['field2_category']);
        $arts1p = Category::where('parent_id', $shouye['field2_category'])->with('arts')->get();

        ## 第三区块
        $cate5 = Category::find($shouye['field3_category']);
        $arts3p = Category::where('parent_id', $shouye['field3_category'])->with('arts')->get();

        ## 第四区块
        $cate = Category::find($shouye['field4_category']);
        $arts4p = Category::where('parent_id', $shouye['field4_category'])->with('arts')->get();

        ## 第五区块
        $cate2 = Category::find($shouye['field5_category']);
        $arts5p = Category::where('parent_id', $shouye['field5_category'])->with('arts')->get();

        ## 第六区块
        $cate3 = Category::find($shouye['field6_category']);
        $arts6p = Category::where('parent_id', $shouye['field6_category'])->with('arts')->get();

        ## 用于校验PC端还是移动端
        $agent = new Agent();
        if ($agent->isMobile() || $agent->isTablet()) {
            return view('m.index', compact('shouye', 'cate1', 'arts1p', 'cate5', 'arts3p', 'cate', 'arts4p', 'cate2', 'arts5p', 'cate3', 'arts6p'));
        } else {
            return view('p.index', compact('shouye', 'cate1', 'arts1p', 'cate5', 'arts3p', 'cate', 'arts4p', 'cate2', 'arts5p', 'cate3', 'arts6p'));
        }
    }
}
