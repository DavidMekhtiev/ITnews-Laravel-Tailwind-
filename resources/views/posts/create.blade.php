@extends('layouts.app')

@section('title')
    Create post
@endsection

@section('content')
<div class="w-11/12 float-left ml rounded-l">
    <form action="{{ route('posts.create') }}" method="POST">
    @csrf
    @method('POST')
      <div class="h-20 text-3xl w-full pr-2 pl-2 bg-white rounded-sm">
        <label for="title" >Title</label><br>
        <input id="title" name="title" type="text" class=" border w-full focus:border-gray-700 focus:outline-none">
      </div>

      <div class="w-full mt-3 text-3xl bg-white rounded-sm pl-3 pr-3 pt-1 pb-1">
        <label for="content" >Content</label><br>
        <textarea name="content" id="content" cols="57" rows="15" class=" border focus:border-gray-700 focus:outline-none"></textarea>
      </div>

      <div class="h-16 mt-3 pt-2 text-3xl w-full pr-2 pl-2 bg-white rounded-sm">
        <label for="category">Category</label>
        <select name="category" id="category" class=" border w-9/12 ml-9 text-center">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
      </div> 

      <div class="w-full mt-3 text-3xl text-center bg-white hover:bg-sky-900 hover:text-white border border-sky-900 rounded-sm pl-3 pr-3 pt-1 pb-1">
        <button class=" w-full" type="submit">Publish</button>
      </div>    
    </form>
  </div>


<div class="bg-white h-100 w-1/4 ml-10 rounded-r-sm text-center pt-80">
  <span class="text-3xl">Здесь могла быть ваша реклама!</span>
</div>
@endsection