@extends('layouts.app')

@section('title')
    ITnews
@endsection

@section('content')
<div class="  w-11/12 float-left ml rounded-l">
    <div class="h-9 w-full text-right pr-2 pl-2 bg-white rounded-sm">
      <span class=" float-left text-2xl font-medium text-sky-900">
        All
      </span>
      <a href="" class="float-left ml-4 text-2xl font-medium hover:text-sky-900">
        Categories
      </a>
      <a href="" class="float-left ml-4 text-2xl font-medium hover:text-sky-900">
        Users
      </a>
      <div class=" pt-1">
        <a href="" class=" border border-sky-700 text-sky-700 hover:text-white hover:bg-sky-700 text-lg rounded-sm pl-1 pr-1">Popular</a>
        <a href="" class=" border border-sky-700 text-sky-700 hover:text-white hover:bg-sky-700 text-lg rounded-sm pl-1 pr-1">New</a>
      </div>
    </div>
    
    @foreach ($posts as $post)
      <div class=" w-full min-h-64 mt-3 bg-white rounded-sm pl-2 pr-2 pt-1 pb-1">
        <div class=" text-sm mb-3">
          <a href="" class=" text-black font-medium hover:text-sky-800">{{$post->user->name}}</a>
          <span class="text-gray-800">{{ $post->created_at }}</span>
        </div>
        <a href="" class=" text-xl font-semibold hover:text-sky-700">{{ $post->title }}</a><br>
        <a href="" class="text-gray-800 text-sm hover:text-sky-800 mr-2">{{ $post->category->title }}</a>
        <div class=" mt-3 mb-4">
          <span>{{ Str::limit($post->content, 250, $end='...') }}</span>
        </div>
        <a href="" class=" border border-sky-700 text-sky-700 hover:text-white hover:bg-sky-700 text-lg rounded-sm p-1">Read more-></a>
        <div class=" mt-3">
          <div class="">
            <img src="https://img.icons8.com/ios/20/000000/comments.png" class=" inline-block"/>
            <span class="text-green-800"> {{ $post->commentaries->count() }}</span>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="bg-white h-100 w-1/4 ml-10 rounded-r-sm text-center pt-80">
    <span class="text-3xl">Здесь могла быть ваша реклама!</span>
  </div>
@endsection