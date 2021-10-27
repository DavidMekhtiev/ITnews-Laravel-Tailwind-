@extends('layouts.app')

@section('title')
    {{ $user->name }}
@endsection

@section('content')
<div class="w-11/12 float-left ml rounded-l">
    <div class="w-full min-h-64 bg-white rounded-sm pl-2 pr-2 pt-1 pb-1">
        <div class="text-center w-36 inline-block">
            <a href="" class="text-xl hover:text-sky-900 font-semibold ">{{ $user->name }}</a><br>
            <span class="text-gray-800">{{ $user->created_at }}</span>
        </div>
        <div class=" inline-block float-right pt-3">
            <div class=" inline-block">
                <img src="https://img.icons8.com/ios/30/000000/news.png" class="inline-block"/>
                <span class=" text-green-800 text-xl"> {{ $user->posts->count() }}</span>
            </div>
            <div class=" inline-block ml-7">
                <img src="https://img.icons8.com/ios/30/000000/comments.png" class=" inline-block"/>
                <span class="text-green-800 text-xl"> {{ $user->commentaries->count() }}</span>
            </div>
        </div>
    </div>
</div>

<div class="bg-white h-100 w-1/4 ml-10 rounded-r-sm text-center pt-80">
    <span class="text-3xl">Здесь могла быть ваша реклама!</span>
</div>
@endsection