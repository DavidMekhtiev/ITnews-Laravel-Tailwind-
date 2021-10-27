<?php

namespace App\Http\Controllers;

use App\Models\Commentary;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class CommentaryController extends Controller
{
    public function create(Request $request)
    {
        $comment = Commentary::create([
            'content' => $request['content']
        ]);

        $post = Post::where('id', $request['postId'])->get();
        $user = User::where('id', auth()->user()->id)->get();
        $post[0] = $post[0]->commentaries()->save($comment);
        $user[0] = $user[0]->commentaries()->save($comment);

        return redirect()->back();
    }

    public function delete(Commentary $commentary)
    {
        $commentary->delete();
        return redirect()->back();
    }
}
