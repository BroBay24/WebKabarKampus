<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;



class NewsController extends Controller
{ 
    public function show($slug)
    {
        $news = News::where('slug', $slug)->first();
        
        $newest = News::orderBy('created_at', 'desc')->get()->take(4);

        return view('pages.news.show', compact('news', 'newest'));
    }

}
