<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function create()
    {
        return view("posts.create");
    }

    public function store()
    {
        $imgPath = request()->validate([
            'caption' => 'required',
            'image' => ['required', 'image'],
        ]);

        // $post = new Post();
        // $post->caption = $data['caption'];
        // $post->save();

        // dd(request('image')->store('uploads', 'public'));

        $imgPath['image'] = request('image')->store('uploads', 'public');

        // create image manager with desired driver
        $manager = new ImageManager(new Driver());

        // read image from file system
        $image = $manager->read('storage/' . $imgPath['image']);

        // resize image proportionally to 300px width
        $image->scale(width: 1200, height: 1200);
        $image->save();


        // $imagePath = request('image')->store('uploads', 'public');
        // $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        // $image->save();

        auth()->user()->posts()->create($imgPath);

        // dd(request()->all());
        return redirect('profile/' . auth()->user()->id);
    }

    public function show(Post $post)
    {
        return view('posts.show',compact('post'));
    }
}
