@extends('layouts.app')

@section('title')
    {{ $post->title }}
@endsection

@section('content')
<div class="w-11/12 float-left ml rounded-l">
    <div class="w-full bg-white rounded-sm pl-2 pr-2 pt-1 pb-1">
        <div class="text-center w-36 inline-block">
            <a href="{{ route('users.id', $post->user->id) }}" class="text-xl hover:text-sky-900 font-semibold ">{{ $post->user->name }}</a><br>
            <span class="text-gray-800">{{ $post->created_at }}</span>
        </div>
        <div class=" inline-block break-all w-96 ml-14">
         <span class=" font-semibold text-xl">{{ $post->title }}</span>
        </div>
        <div class=" inline-block float-right pt-3">
            <div class="">
                <img src="https://img.icons8.com/ios/30/000000/comments.png" class=" inline-block"/>
                <span class="text-green-800 text-xl"> {{ $post->commentaries->count() }}</span>
            </div>
        </div>
    </div>

    <div class="w-full min-h-64 mt-3 bg-white rounded-sm pl-5 pr-5 pt-2 pb-2">
     <span class=" text-xl">{{ $post->content }}</span>
    </div>
    <div class="w-full min-h-64 mt-3 bg-white rounded-sm pl-5 pr-5 pt-2 pb-2">
      <div class="">
        <form action="{{ route('comment.create') }}" method="POST">
          @csrf
          @method('POST')
          <textarea name="content" id="content" cols="105" rows="5" class=" border ">
            
          </textarea>
          <input type="hidden" name="postId" value="{{ $post->id }}">
          <button type="submit" class="border border-sky-700 text-sky-700 hover:text-white hover:bg-sky-700 text-lg rounded-sm pl-1 pr-1">
            Send
          </button>
        </form>
      </div>
      <div class=" mt-8">
        @foreach ($post->commentaries as $comment)
          <div class=" border pl-5 pt-1 pb-1 mb-3">
            <a href="{{ route('users.id', $comment->user->id) }}" class=" font-semibold hover:text-sky-900">{{ $comment->user->name }}</a>
            <span class=" text-gray-600">{{ $comment->created_at }}</span><br>
            <span class="">{{ $comment->content }}</span>
          </div>
        @endforeach
      </div>
    </div>
</div>

  <div class="bg-white h-100 w-1/4 ml-10 rounded-r-sm text-center pt-80">
    <span class="text-3xl">Здесь могла быть ваша реклама!</span>
  </div>
@endsection