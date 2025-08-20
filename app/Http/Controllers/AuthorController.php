<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    public function show($username)
    {
        $author = Author::where('username', $username)->first();
        return view('pages.author.show', compact('author'));
    }
}   