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
        $featured = News::where('is_featured', true)->get(); // dari model news yang mana kolom featured adalah true
        $news = News::orderBy('created_at', 'desc')->take(4)->get();
        $authors = Author::all()->take(5);
 
        return view('pages.landing', compact('banners', 'featured', 'news', 'authors'));


    }
}
