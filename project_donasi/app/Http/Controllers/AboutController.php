<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function tentangKami()
    {
        return view('front.about');
    }
}
