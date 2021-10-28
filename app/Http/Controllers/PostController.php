<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getNew()
    {
        $posts = Post::with('commentaries', 'user', 'category')->orderBy('created_at', 'DESC')->paginate(4);
        return view('home',['posts'=> $posts]);
    }

    public function getPopular()
    {
        $posts = Post::with('commentaries', 'user', 'category')->withCount('commentaries')->orderBy('commentaries_count', 'DESC')->paginate(4);
        return view('home',['posts'=> $posts]);
    }

    public function postById($id)
    {
        $post = Post::with('commentaries', 'user', 'category')->where('id', $id)->get();
        return view('posts.post', ['post'=>$post[0]]);
    }

    public function postByCategory($category)
    {
        $posts = Post::where('category_id', $category)->paginate(4);
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

        $post = Post::where('title', $request['title'])->get();
        $user = User::where('id', auth()->user()->id)->get();
        $category = Category::where('id', $request['category'])->get();
        $category[0] = $category[0]->posts()->save($post[0]);
        $user[0] = $user[0]->posts()->save($post[0]);

        return redirect()->route('posts.new');
    }

    public function edit(Post $post)
    {
        return view('posts.edit',[ 'post'=>$post ]);
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('home');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->back();
    }

    public function find(Request $request)
    {
        $posts = Post::where("title", "like", "%" . $request['title'] . "%")->paginate(4);
        return view('home', ['posts'=> $posts]);
    }
}
