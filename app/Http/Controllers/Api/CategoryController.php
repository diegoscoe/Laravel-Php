<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function all()
    {
        return response()->json(Category::get());
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json(Category::get(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return response()->json(Category::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json($category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json("ok");
    }

    public function posts(Category $category)
    {
        //$posts = Post::join('categories', "categories.id", "=", "posts.category_id")
        //->select("posts.*", "categories.title as category")
        //->where("categories.id", $category->id);
        //->get();
        //->toSql();
        $posts = Post::with("category")
        ->where("category_id", $category->id);
        ->get();
        return response()->json();
    }
}
