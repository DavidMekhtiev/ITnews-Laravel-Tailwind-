@extends('layouts.app')

@section('title')
    Users
@endsection

@section('content')
<div class="w-11/12 float-left ml rounded-l">
    <div class="h-9 w-full text-right pr-2 pl-2 bg-white rounded-sm">
        <a href="{{ route('posts.new') }}" class="float-left text-2xl font-medium hover:text-sky-900"> All </a>
        <a href="{{ route('categories') }}" class="float-left ml-4 text-2xl font-medium hover:text-sky-900"> Categories </a>
        <span class="float-left ml-4 text-2xl font-medium text-sky-900"> Users </span>
        <div class="pt-1">
            <a href="{{ route('posts.popular') }}" class="border border-sky-700 text-sky-700 hover:text-white hover:bg-sky-700 text-lg rounded-sm pl-1 pr-1">Popular</a>
            <a href="{{ route('posts.new') }}" class="border border-sky-700 text-sky-700 hover:text-white hover:bg-sky-700 text-lg rounded-sm pl-1 pr-1">New</a>
        </div>
    </div>
    @foreach ($users as $user)
        <div class="w-full min-h-64 mt-3 bg-white rounded-sm pl-2 pr-2 pt-1 pb-1">
            <div class="text-center w-36 inline-block">
                <a href="{{ route('users.id', $user->id) }}" class="text-2xl hover:text-sky-900 font-semibold">{{ $user->name }}</a><br>
                <span class="text-gray-800">{{ $user->email }}</span>
            </div>
            <div class=" inline-block ml-48 float-right pt-3">
                <div class=" inline-block">
                    <img src="https://img.icons8.com/ios/40/000000/news.png" class="inline-block"/>
                    <span class=" text-green-800 text-xl"> {{ $user->posts->count() }}</span>
                </div>
                <div class=" inline-block ml-7">
                    <img src="https://img.icons8.com/ios/40/000000/comments.png" class=" inline-block"/>
                    <span class="text-green-800 text-xl"> {{ $user->commentaries->count() }}</span>
                </div>
            </div>
        </div>
    @endforeach
</div>

  <div class="bg-white h-100 w-1/4 ml-10 rounded-r-sm text-center pt-80">
    <span class="text-3xl">Здесь могла быть ваша реклама!</span>
  </div>
@endsection