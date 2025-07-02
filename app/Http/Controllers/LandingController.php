<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Banner;


class LandingController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
 
        return view('pages.landing', compact('banners'));
    }
}
