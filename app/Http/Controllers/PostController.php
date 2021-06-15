<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Post;
use Illuminate\Support\Str;


class PostController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all posts
    public function index()
    {
        //$posts = Post::all()->toArray();
        $posts = Post::join('users','users.id','posts.poster')->select('users.nick as posterNick','posts.*')->get();
        return $posts;
    }

    // add post
    public function add(Request $request)
    {
        $this->validate($request, [
            'poster' => 'required',
            'post_text' => 'required',
            'image' => '',
            'title' => 'required'
        ]);

        $post = new Post([
            'poster' => $request->poster,
            'post_text' => $request->post_text,
            'image' =>$request->image,
            'title' => $request->title
        ]);
        $post->save();

        return response()->json('The post successfully added');
    }

    // edit post
    public function edit($id)
    {
        $post = Post::find($id);
        return response()->json($post);
    }

    // update post
    public function update($id, Request $request)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return response()->json('The post successfully updated');
    }

    // delete post
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return response()->json('The post successfully deleted');
    }
}
