<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use  Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('posts.index')->with(['posts' => $post]);
    }
    public function create()
    {
        $category = Category::all();
        return view('posts.create')->with(['categories' => $category]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'area' => 'required|numeric|max:255',
            'price' => 'required|numeric',
            'reason' => 'required',
            'location' => 'string|min:3|max:100',
            'category_id' => 'required|numeric|exists:categories,id',
            'content' => 'required|string|max:255',
            'photo' => 'required|active_url',
        ]);
        $post = new Post();
        $post->name = $request->name;
        $post->area = $request->area;
        $post->price = $request->price;
        $post->location = $request->location;
        $post->reason = $request->reason;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->user_id = Auth::user()->id;
        $post->photo = $request->photo;
        // dd($post);
        $post->save();
        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }
    public function edit(Post $post)
    {
        $category = Category::all();
        return view('posts.edit', ['post' => $post, 'categories' => $category]);
    }
    public function update(Post $post, Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'area' => 'required|numeric|max:255',
            'price' => 'required|numeric',
            'reason' => 'required',
            'location' => 'string|min:3|max:100',
            'category_id' => 'required|numeric|exists:categories,id',
            'content' => 'required|string|max:255',
            'photo' => 'required|file',
        ]);
        $post->name = $request->name;
        $post->area = $request->area;
        $post->price = $request->price;
        $post->location = $request->location;
        $post->reason = $request->reason;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->photo = $request->file('photo')->store('public/post_images');
        // dd($post);
        $post->save();
        return redirect()->route('post.show', $post);
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
}
