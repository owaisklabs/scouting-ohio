<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->article_id = $request->article_id;
        $comment->user_id = Auth::id();
        $comment->text = $request->text;
        $comment->save();
        return redirect()->back();
    }
    public function like(Request $request)
    {
        // dd($request->all());
        $likes = Like::where('user_id', Auth::id())->where('comment_id', $request->comment_id)->first();
        if ($likes) {
           $likes->delete();
            return [
                'status' => 'unlike done',
                'data' => $likes
            ];
        } else {
            $likes = new Like();
            $likes->user_id = Auth::id();
            $likes->comment_id = $request->comment_id;
            $likes->is_like = 1;
            $likes->save();
            return [
                'status' => 'like done',
                'data' => $likes
            ];
        }
    }
}
