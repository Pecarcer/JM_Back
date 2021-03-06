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


    /* gets all boardgames */
    public function index()
    {
        $boardgames = Boardgame::all()->toArray();
        return $boardgames;
    }

    /* adds boardgame */
    public function add(Request $request)
    {
        $this->validate($request, [
            'title'=> 'required',
            'creator' => 'required',
            'release' => 'required|date',
            'min_num_players' => 'required',
            'max_num_players' => 'required',
            'playing_time' => 'required',
            'ages' => 'required',
            'publisher' => 'required',
        ]);


        $boardgame = new Boardgame([
            'title'=> $request->title,
            'creator' => $request->creator,
            'release' => $request->release,
            'min_num_players' => $request->min_num_players,
            'max_num_players' => $request->max_num_players,
            'playing_time' =>$request->playing_time,
            'ages' => $request->ages,
            'publisher' =>$request->publisher,
        ]);
        $boardgame->save();

        return response()->json('The boardgame successfully added');
    }

    /* edits boardgame */
    public function edit($id)
    {
        $boardgame = Boardgame::find($id);
        return response()->json($boardgame);
    }

    /* updates boardgame */
    public function update($id, Request $request)
    {
        $boardgame = Boardgame::find($id);
        $boardgame->update($request->all());

        return response()->json('The boardgame successfully updated');
    }

    /* deletes boardgame */
    public function delete($id)
    {
        $boardgame = Boardgame::find($id);
        $boardgame->delete();

        return response()->json('The boardgame successfully deleted');
    }
}
