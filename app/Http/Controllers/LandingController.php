<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner; 
use App\Models\News;   
use App\Models\Author;


class LandingController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $featureds = News::where('is_featured', true)->get();
        $news = News::orderBy('created_at', 'desc')->take(4)->get(); // Better for performance
        $authors = Author::take(5)->get(); // Fixed here

        return view('pages.landing', compact('banners', 'featureds', 'news', 'authors'));
    }
}
