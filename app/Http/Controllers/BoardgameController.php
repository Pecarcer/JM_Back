<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Boardgame;
use Illuminate\Support\Str;


class BoardgameController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all boardgames
    public function index()
    {
        $boardgames = Boardgame::all()->toArray();
        return array_reverse($boardgames);
    }

    // add boardgame
    public function add(Request $request)
    {    //TODO RETOCAR PORQUE QUIERO CAMBIAR LA MIGRATION
        $this->validate($request, [
            'author' => '',
            'review_id' => '',
            'post' => 'required',
            'commentary' => 'required',
        ]);

        $boardgame = new Boardgame([
            'author' => $request->author,
            'review_id' => $request->review_id,
            'post' => $request->post,
            'commentary' => $request->commentary
        ]);
        $boardgame->save();

        return response()->json('The boardgame successfully added');
    }

    // edit boardgame
    public function edit($id)
    {
        $boardgame = Boardgame::find($id);
        return response()->json($boardgame);
    }

    // update boardgame
    public function update($id, Request $request)
    {
        $boardgame = Boardgame::find($id);
        $boardgame->update($request->all());

        return response()->json('The boardgame successfully updated');
    }

    // delete boardgame
    public function delete($id)
    {
        $boardgame = Boardgame::find($id);
        $boardgame->delete();

        return response()->json('The boardgame successfully deleted');
    }
}
