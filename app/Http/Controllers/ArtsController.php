<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Art;

class ArtsController extends Controller
{
    public function show(Art $art)
    {
        return view('p.arts.show', compact('art'));
    }
}
