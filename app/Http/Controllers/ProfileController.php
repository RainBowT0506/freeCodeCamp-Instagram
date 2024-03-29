<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        // dd($user);
        // $user = User::findOrFail($user);
        // dd($user);

        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;

        $postCount = Cache::remember(
            'count.posts.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->posts->count();
            }
        );

        $followersCount = Cache::remember(
            'count.followers.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->profile->followers->count();
            }
        );

        $followingCount = Cache::remember(
            'count.following.' . $user->id,
            now()->addSeconds(30),
            function () use ($user) {
                return $user->following->count();
            }
        );

        return view('profiles.index', compact('user', 'follows', 'postCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => '',
        ]);

        if (request('image')) {
            $imgPath['image'] = request('image')->store('profile', 'public');

            // create image manager with desired driver
            $manager = new ImageManager(new Driver());

            // read image from file system
            $image = $manager->read('storage/' . $imgPath['image']);

            // resize image proportionally to 300px width
            $image->scale(width: 1200, height: 1200);
            $image->save();

            $imageArray = ['image' => $imgPath];
        }

        // dd(array_merge(
        //     $data,
        //     ['image' => $imgPath]
        // ));

        auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
        ));


        return redirect("/profile/{$user->id}");
    }
}
