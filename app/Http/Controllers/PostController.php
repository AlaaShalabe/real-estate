<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use  Illuminate\Support\Str;

class PostController extends Controller
{
    public function create()
    {
        $category = Category::all();
        return view('posts.create')->with(['categories' => $category]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'price' => 'required|numeric',
            'reason' => 'required',
            'location' => 'string|min:3|max:100',
            'category_id' => 'required|numeric|exists:categories,id',
            'content' => 'required|string|max:255',
            'photo' => 'required',
        ]);
        $post = new Post();
        $post->name = $request->name;
        $post->area = $request->area;
        $post->price = $request->price;
        $post->location = $request->location;
        $post->reason = $request->reason;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->photo = $request->photo;
        $posr['uniqueId'] = Str::random(24);
        $post['user_id'] = auth()->user()->uniqueId;
        $post->save();
        return view('welcome', ['posts' => $post]);
    }
}
