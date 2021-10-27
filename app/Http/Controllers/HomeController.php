<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $posts = Post::with('commentaries', 'user', 'category')->paginate(5);
        return view('home',['posts'=> $posts]);
    }
}
