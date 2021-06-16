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
        $comments = Comment::all()->toArray();
        return $comments;
    }

    // add comment
    public function add(Request $request)
    {
        $this->validate($request, [
            'author' => '',
            'review_id' => '',
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
        $comment = Comment::find($id);
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
}
