<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Like;
use Illuminate\Support\Str;


class LikeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all likes
    public function index()
    {
        $likes = Like::all()->toArray();
        return $likes;
    }

    // add like
    public function add(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'review' => 'required'
        ]);

        $like = new Like([
            'user' => $request->user,
            'review' => $request->review,
        ]);
        $like->save();

        return response()->json('The like successfully added');
    }

    // edit like
    public function edit($id)
    {
        $like = Like::find($id);
        return response()->json($like);
    }

    // update like
    public function update($id, Request $request)
    {
        $like = Like::find($id);
        $like->update($request->all());

        return response()->json('The like successfully updated');
    }

    // delete like
    public function delete($id)
    {
        $like = Like::find($id);
        $like->delete();

        return response()->json('The like successfully deleted');
    }
}
