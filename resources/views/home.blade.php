@extends('layouts.app')

@section('content')
    <div class="container">
        {{-- header --}}
        <div class="row flex">
            <div class="col-3 p-5 flex items-center">
                <img src="/image/avatar.jpg" class=" h-40 w-40 rounded-full">
            </div>
            <div class="col-9 pl-10 pt-10 items-center">
                <div>
                    <h1 class="font-bold text-2xl">{{ $user->username }}</h1>
                </div>
                <div class="flex pt-3">
                    <div class="pr-3"><strong class="pr-2">9</strong>posts</div>
                    <div class="pr-3"><strong class="pr-2">99</strong>followers</div>
                    <div class="pr-3"><strong class="pr-2">999</strong>following</div>
                </div>
                <div class="pt-4 font-bold">{{ $user->profile->title }}</div>
                <div class="max-w-2xl">{{ $user->profile->description }}
                </div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>

        {{-- article --}}
        <div class="row pt-10 flex">
            <div class="col-4"><img src="/image/painting1.jpg" class="p-2 h-40 w-40 "></div>
            <div class="col-4"><img src="/image/painting2.jpg" class="p-2 h-40 w-40 "></div>
            <div class="col-4"><img src="/image/painting3.jpg" class="p-2 h-40 w-40 "></div>
        </div>
    </div>
@endsection
