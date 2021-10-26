<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getNew()
    {
        $posts = DB::table('posts')->orderBy('created_at')->paginate(5);
        return view('home',['posts'=> $posts]);
    }

    public function getPopular()
    {
        $posts = DB::table('posts')->orderBy('commentaries_count');
        $posts = $posts->paginate(5);
        return view('home',['posts'=> $posts]);
    }

    public function postById($id)
    {
        $post = Post::where('id', $id)->get();
        return view('posts.post', ['post'=>$post]);
    }

    public function postByCategory($category)
    {
        $posts = Category::where('title', $category)->posts->paginate(5);
        return view('home', ['posts'=> $posts]);
    }

    public function goToCreatePage()
    {
        $categories = Category::all();
        return view('posts.create', [ 'categories'=>$categories ]);
    }

    public function create(Request $request)
    {
        Post::create([
            'title' => $request['title'],
            'content' => $request['content']
        ]);

        $post = Post::where('title', $request['title']);
        $category = Category::where('id', $request['category']);
        $category = $category->posts()->save($post);
        $post->category()->associate($category)->save();

        return redirect()->route('posts.new');
    }

    public function find(Request $request)
    {
        $posts = Post::where("title", "like", "%" . $request['title'] . "%")->paginate(5);
        return view('home', ['posts'=> $posts]);
    }
}
