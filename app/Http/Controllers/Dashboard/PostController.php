<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $post = Post::find(1);
    $category = Category::find(1);
    //$post = Post::find(5)->delete();
    dd($category->posts[0]->title);
        /*$post->update(
            [
                'title' => 'test title new24q3dwwe',
                'slug' => 'test slug',
                'content' => 'test content',
                'image' => 'test image',
            ]
        );*/
        //dd($post->title);

            /*Post::create(
            [
                'title' => 'test title',
                'slug' => 'test slug',
                'content' => 'test content',
                'category_id' => 1,
                'description' => 'test description',
                'posted' => 'not',
                'image' => 'test image',
            ]
        );*/

        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id');
        return view('dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    Post::create($request->all());
    return to_route('post.index');
            //dd(request()->get('title'));
            /*[
                'title' => $request->all()['title'],
                'slug' => $request->all()['slug'],
                'content' =>  $request->all()['content'],
                'category_id' =>  $request->all()['category_id'],
                'description' =>  $request->all()['description'],
                'posted' =>  $request->all()['posted'],
                //'image' =>  $request->all()['image'],
            ]*/
        //);
        //dd($request->all()['title']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
