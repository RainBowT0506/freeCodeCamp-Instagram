<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function create()
    {
        return view("posts.create");
    }

    public function store()
    {
        $data = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        // $post = new Post();
        // $post->caption = $data['caption'];
        // $post->save();

        auth()->user()->posts()->create($data);  

        dd(request()->all());
    }
}
