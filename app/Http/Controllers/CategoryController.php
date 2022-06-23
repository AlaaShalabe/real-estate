<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('categories.index')->with(['categories' => $category]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:55'
        ]);
        $category = new Category();
        $category->name = $request->name;
        // dd($Category);
        $category->save();
        return redirect()->route('categories.index');
    }

    public function edit(Category $category)
    {
        return view('categories.edit')->with(['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|string|min:2|max:55'
        ]);
        $category->name = $request->name;
        //  dd($category);
        $category->save();
        return redirect()->route('categories.index');
    }
    public function show(Category $category)
    {
        return view('categories.show', ['category' => $category]);
    }
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('delete', 'Deleted Successfully');
    }
}
