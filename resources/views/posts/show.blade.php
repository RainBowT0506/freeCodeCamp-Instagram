@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row flex">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="">
            </div>
            <div class="col-4">
                <div>
                    <div class="flex items-center">
                        <div class="pr-3">
                            <img src="/storage/{{ $post->user->profile->image }}" style="max-width:50px" class="rounded-full">
                        </div>

                        <div>
                            <div class=" font-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-black">{{ $post->user->username }}</span>
                                </a> 
                                <a href="#" class="pl-3">Follow</a>
                            </div>
           
                        </div>
                    </div>


                    <hr>

                    <p>
                        <span class=" font-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-black">{{ $post->user->username }}</span>
                            </a>
                        </span>
                        {{ $post->caption }}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
