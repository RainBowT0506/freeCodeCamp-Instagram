@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- header --}}
        <div class="row flex">
            <div class="col-3 p-5 flex items-center">
                <img src="/storage/{{ $user->profile->image }}" class=" h-40 w-40 rounded-full">
            </div>
            <div class="col-9 pl-10 pt-10 items-center">
                <div class="flex justify-between items-baseline">
                    <h1 class="font-bold text-2xl">{{ $user->username }}</h1>

                    @can('update', $user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan

                </div>

                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="flex pt-3">
                    <div class="pr-2"><strong class="pr-2">{{ $user->posts->count() }}</strong></div>posts
                    <div class="pr-2"><strong class="pr-2">99</strong>followers</div>
                    <div class="pr-2"><strong class="pr-2">999</strong>following</div>
                </div>
                <div class="pt-4 font-bold">{{ $user->profile->title }}</div>
                <div class="max-w-2xl">{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>
    </div>

    {{-- article --}}
    <div class="row pt-10 flex">
        @foreach ($user->posts as $post)
            <a href="/p/{{ $post->id }}">
                <div class="col-4"><img src="/storage/{{ $post->image }}" class="p-2 h-40 w-40 "></div>
            </a>
        @endforeach
    </div>
    </div>
@endsection
