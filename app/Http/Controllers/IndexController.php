<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller
{
    public function index()
    {
        dd(json_decode(Cache::get('was_site_menu'), true));
        return view('index');
    }
}
