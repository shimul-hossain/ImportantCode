<?php

namespace App\Http\Controllers;

use App\Events\PostCreated;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        $tags = Tag::all();
        return view('post.index', compact('posts', 'tags'));
    }

    public function store(Request $request){
        $post = Post::create([
            'title' => $request->title,
            'description' => $request->description
        ]);
         $post->tags()->attach($request->tag);

         event(new PostCreated($request->title, $request->description));
        return back();
    }
}
