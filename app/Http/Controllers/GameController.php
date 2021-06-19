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
        $games = Game::join('users','users.id','games.master')->join('boardgames','boardgames.id','games.boardgame_id')->select('users.nick as masterNick','boardgames.title as boardgameTitle','games.*')->orderBy('games.id','ASC')->get();
        return response()->json($games);
    }

    // add game
    public function add(Request $request)
    {
        $this->validate($request, [
            'master' => 'required',
            'boardgame_id' => 'required',

            'date' => 'required|date',
            'time' => 'required'
        ]);

        $game = new Game([
            'master' => $request->master,
            'boardgame_id' => $request->boardgame_id,

            'date' => $request->date,
            'time' => $request->time
        ]);
        $game->save();

        return response()->json('The game successfully added');
    }

    // edit game
    public function edit($id)
    {
        $game = Game::join('users','users.id','games.master')->join('boardgames','boardgames.id','games.boardgame_id')->select('users.nick as masterNick','boardgames.title as boardgameTitle','games.*')->where('games.id',$id)->get();
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


    //  games made by user
    public function madeby($id)
    {
        //$reviews = Review::all()->where('reviewer',$id)->toArray();
        $reviews = Game::join('boardgames','boardgames.id','games.boardgame_id')->select('boardgames.title as boardgameName','games.*')->where('master',$id)->get();

        return response()->json($reviews);
        //$posts = Post::join('users','users.id','posts.poster')->select('users.nick as posterNick','posts.*')->get();

    }
}
