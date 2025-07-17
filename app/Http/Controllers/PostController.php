<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
    }

    function show(Post $post) {
        return view('posts.show',compact('post'));
    }

    function update(Post $post) {
        return view('posts.update',compact('post'));
    }

    
    
}
