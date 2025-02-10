<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("post.upload");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        $file = $request->file('media');
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);

        $post = new Post();
        $post->original_name = $request->file('media')->getClientOriginalName();
        $post->size = $request->file('media')->getSize();
        $post->tags = "hola";
        $post->source = $request->input('source', 'none');
        
        $request->user()->posts()->save($post);
        
        $request->file('media')->storeAs('storage/', $post->id . '.' . $ext);

        return redirect()->back();
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
