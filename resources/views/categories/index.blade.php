@extends('layouts.app')

@section('title')
    Categories
@endsection

@section('content')
<div class="  w-11/12 float-left ml rounded-l">
    <div class="h-9 w-full text-right pr-2 pl-2 bg-white rounded-sm">
      <a href="" class=" float-left text-2xl font-medium hover:text-sky-900">
        All
      </a>
      <span href="" class="float-left ml-4 text-2xl font-medium text-sky-900">
        Categories
      </span>
      <a href="" class="float-left ml-4 text-2xl font-medium hover:text-sky-900">
        Users
      </a>
      <div class=" pt-1">
        <a href="" class=" border border-sky-700 text-sky-700 hover:text-white hover:bg-sky-700 text-lg rounded-sm pl-1 pr-1">Popular</a>
        <a href="" class=" border border-sky-700 text-sky-700 hover:text-white hover:bg-sky-700 text-lg rounded-sm pl-1 pr-1">New</a>
      </div>
    </div>
    
    @foreach ($categories as $category)
      <div class=" w-full min-h-64 mt-3 pl-96 bg-white rounded-sm pt-1 pb-1">
        <a href="" class=" text-2xl hover:text-sky-900 font-normal">{{ $category->title }}</a>
      </div>
    @endforeach
</div>

  <div class=" bg-white h-100 w-1/4 ml-10 rounded-r-sm text-center pt-80">
    <span class=" text-3xl ">Здесь могла быть ваша реклама!</span>
  </div>
@endsection