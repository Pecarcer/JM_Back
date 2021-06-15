<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Player;
use Illuminate\Support\Str;


class PlayerController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all players
    public function index()
    {
        $players = Player::all()->toArray();
        return $players;
    }

    // add player
    public function add(Request $request)
    {
        $this->validate($request, [
            'user' => 'required',
            'game' => 'required'
        ]);

        $player = new Player([
            'user' => $request->user,
            'game' => $request->game,
        ]);
        $player->save();

        return response()->json('The player successfully added');
    }

    // edit player
    public function edit($id)
    {
        $player = Player::find($id);
        return response()->json($player);
    }

    // update player
    public function update($id, Request $request)
    {
        $player = Player::find($id);
        $player->update($request->all());

        return response()->json('The player successfully updated');
    }

    // delete player
    public function delete($id)
    {
        $player = Player::find($id);
        $player->delete();

        return response()->json('The player successfully deleted');
    }

    //  games with user
    public function with($id)
    {

        $games = Player::join('games', 'games.id', 'players.game')->join('boardgames', 'boardgames.id', 'games.boardgame_id')->select('boardgames.title as boardgameName', 'games.*', 'players.*')->where('players.user', $id)->get();

        return response()->json($games);


    }
}
