<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getAll()
    {
        $users = User::paginate(10);
        return view('users.index', ['users'=>$users]);
    }

    public function userById($id)
    {
        $user = User::with('commentaries', 'posts')->where('id', $id)->get();
        return view('users.profile', ['user'=>$user[0]]);
    }
}
