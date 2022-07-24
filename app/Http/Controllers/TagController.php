<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return view('tag.index', compact('tags'));
    }

    public function store(Request $request){
        Tag::create($request->except('_token'));
        return back();
    }
}
