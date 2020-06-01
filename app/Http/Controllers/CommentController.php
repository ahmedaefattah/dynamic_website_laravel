<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Comment;
use App\Post;



class CommentController extends Controller
{
     public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'comment' =>  'required',
            
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $comment = new Comment;
        $comment->name        = request("name", 'Anonymous');
        $comment->email       = $request->email;
        $comment->comment     = $request->comment;
        $comment->postID      = $request->postID;
        $comment->save();
        return redirect()->back();

    }

     public function comments($id) {
        $post = Post::find($id);
        $comments = Post::find($id)->comments;
        return view('mng_comments', compact('post','comments'));

    }

    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->back()->with('success', 'Comment deleted successfully.');
    }


}
