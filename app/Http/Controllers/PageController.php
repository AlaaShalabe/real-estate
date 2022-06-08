<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        $posts = Post::all();
        return view('welcome', ['posts' => $posts]);
    }
}
