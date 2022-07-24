<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::with('tags')->get();
        $tags = Tag::all();
        return view('post.index', compact('posts', 'tags'));
    }

    public function store(Request $request){
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
         $post->tags()->attach($request->tag);
        return back();
    }
}
