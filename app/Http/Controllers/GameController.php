<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Game;
use Illuminate\Support\Str;


class GameController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all games
    public function index()
    {
        $games = Game::all()->toArray();
        return array_reverse($games);
    }

    // add game
    public function add(Request $request)
    {
        $this->validate($request, [
            'master' => 'required',
            'boardgame_id' => 'required',
            'room_id' => 'required',
            'date' => 'required|date',
            'time' => 'required'
        ]);

        $game = new Game([
            'master' => $request->master,
            'boardgame_id' => $request->boardgame_id,
            'room_id' => $request->room_id,
            'date' => $request->date,
            'time' => $request->time
        ]);
        $game->save();

        return response()->json('The game successfully added');
    }

    // edit game
    public function edit($id)
    {
        $game = Game::find($id);
        return response()->json($game);
    }

    // update game
    public function update($id, Request $request)
    {
        $game = Game::find($id);
        $game->update($request->all());

        return response()->json('The game successfully updated');
    }

    // delete game
    public function delete($id)
    {
        $game = Game::find($id);
        $game->delete();

        return response()->json('The game successfully deleted');
    }
}
