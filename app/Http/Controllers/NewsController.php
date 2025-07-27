<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\NewsCategory;



class NewsController extends Controller
{ 
    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        
        $newest = News::orderBy('created_at', 'desc')->get()->take(4);

        return view('pages.news.show', compact('news', 'newest'));
    }


    public function category($slug)
    {
        $category = NewsCategory::where('slug', $slug)->first();

        return view('pages.news.category', compact('category'));
    }

}
