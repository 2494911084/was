<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Jenssegers\Agent\Agent;
use App\Models\Category;
use App\Models\Art;

class IndexController extends Controller
{
    public function index()
    {
        ## 幻灯片
        $arts = Art::where('is_huandengpian', 1)->orderBy('is_tuijian', 'desc')->get();
        // dd(json_decode(Cache::get('was_web_site_index_setting'), true));
        ## 用于校验PC端还是移动端
        $agent = new Agent();
        if ($agent->isMobile() || $agent->isTablet()) {
            return view('m.index.index', compact('arts'));
        } else {
            return view('p.index.index', compact('arts'));
        }
    }
}
