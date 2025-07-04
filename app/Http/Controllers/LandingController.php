<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\News;

class LandingController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $featureds = News::where('is_featured', true)->get(); // dari model news yang mana kolom featured adalah true
 
        return view('pages.landing', compact('banners', 'featureds'));
    }
}
