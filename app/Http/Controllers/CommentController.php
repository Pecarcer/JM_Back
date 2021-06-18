<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Comment;
use Illuminate\Support\Str;


class CommentController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all comments
    public function index()
    {
     //   $comments = Comment::all()->toArray();
       // return $comments;

        $comments = Comment::join('users','users.id','comments.author')->select('users.nick as authorNick','comments.*')->orderBy('comments.created_at', 'DESC')->get();
        return response()->json($comments);
    }

    // add comment
    public function add(Request $request)
    {
        $this->validate($request, [
            'author' => 'required',
            'review_id' => 'required',
            'commentary' => 'required',
        ]);

        $comment = new Comment([
            'author' => $request->author,
            'review_id' => $request->review_id,
            'commentary' => $request->commentary
        ]);
        $comment->save();

        return response()->json('The comment successfully added');
    }

    // edit comment
    public function edit($id)
    {
        $comment = Comment::join('users','users.id','comments.author')->select('users.nick as authorNick','comments.*')->where('comments.id', $id)->get();
        return response()->json($comment);
    }

    // update comment
    public function update($id, Request $request)
    {
        $comment = Comment::find($id);
        $comment->update($request->all());

        return response()->json('The comment successfully updated');
    }

    // delete comment
    public function delete($id)
    {
        $comment = Comment::find($id);
        $comment->delete();

        return response()->json('The comment successfully deleted');
    }


    public function on($id){
        $comments = Comment::join('users','users.id','comments.author')->select('users.nick as commentAuthor','comments.*')->where('review_id',$id)->get();

        return response()->json($comments);
    }
}
