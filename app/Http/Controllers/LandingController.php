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
        $news = News::orderBy('created_at', 'desc')->get()->take(4);
 
        return view('pages.landing', compact('banners', 'featureds', 'news'));
    }
}
