<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    function index() {
        $posts=Post::all();
        return view('posts.index',compact('posts'));
    }
    function create() {
        return view('posts.create');
    }

    function store(Request $request) { 

        $imageName = null;
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('storage/images'), $imageName);
    }

        $post=new Post();
        $post->title=$request->title;
        $post->description=$request->description;
        $post->image=$imageName;
        $post->save();
        return redirect()->route('posts.index');    
    }

    function show(Post $post) {
        return view('posts.show',compact('post'));
    }
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){

    if ($request->hasFile('image')) {
        if ($post->image) {
         Storage::disk('public')->delete("images/$post->image");

        }
        $image = $request->file('image');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('storage/images'), $imageName);
        $post->image = $imageName;
    }
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect()->route('posts.index');
    }




    function destroy(Post $post) {
      if ($post->image) {
            Storage::disk('public')->delete("images/$post->image");
        }
        $post->delete();
        return redirect()->route('posts.index');
    }

    
    
}
