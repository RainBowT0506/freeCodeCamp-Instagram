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
                <div class="pt-4 font-bold">RainBowT.org</div>
                <div class="max-w-2xl">我叫林承億，一位擁有豐富經驗的全端工程師，目前在香港商團博手機應用有限公司擔任全端工程師一職。我熱愛將科技應用於實際場景，專攻Android開發、React
                    Native開發和全端開發。我積極進修，不斷提升技能，以提供最優質的應用程式解決方案。

                    我目前正在攻讀國立中興大學資料科學與資訊計算研究所碩士學位，展現了我深入理解並應用資訊科學的承諾。擁有5~6年的工作經驗，期望能擔任Android Developer、React Native
                    Developer或Full Stack Developer等職稱。

                    以我的卓越專業背景和豐富的工作經歷，我是一位值得信賴的技術專家，致力於打造高品質、創新且競爭力十足的軟體解決方案。
                </div>
                <div><a href="#">https://github.com/RainBowT0506</a></div>
                <div><a href="#">https://hackmd.io/@6USSWVbIT3KHUUNCPK8Pqw</a></div>
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
