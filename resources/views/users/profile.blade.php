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

    @foreach ($user->posts as $post)
        <div class=" w-full min-h-64 mt-3 bg-white rounded-sm pl-2 pr-2 pt-1 pb-1">
            <div class=" text-sm mb-3">
                <a href="{{ route('users.id', $user->id) }}" class=" text-black font-medium hover:text-sky-800">{{$user->name}}</a>
                <span class="text-gray-800">{{ $post->created_at }}</span>
                @if (auth()->user()->id == $user->id)
                    <form action="{{ route('posts.delete', $post) }}" method="POST" class=" float-right">
                        @csrf
                        @method('DELETE')
                        <button type="submit">
                            <img src="https://img.icons8.com/ios/20/000000/delete-sign--v1.png"/>
                        </button>
                    </form>
                    <a href="{{ route('posts.edit', $post) }}" class=" float-right mr-2">
                        <img src="https://img.icons8.com/ios/20/000000/edit--v1.png"/>
                    </a>
                @endif
            </div>
            <a href="{{ route('posts.id', $post->id) }}" class=" text-xl font-semibold hover:text-sky-700">{{ $post->title }}</a><br>
            <a href="{{ route('posts.category', $post->category->id) }}" class="text-gray-800 text-sm hover:text-sky-800 mr-2">{{ $post->category->title }}</a>
            <div class=" mt-3 mb-4">
                <span>{{ Str::limit($post->content, 250, $end='...') }}</span>
            </div>
            <a href="{{ route('posts.id', $post->id) }}" class=" border border-sky-700 text-sky-700 hover:text-white hover:bg-sky-700 text-lg rounded-sm p-1">Read more-></a>
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