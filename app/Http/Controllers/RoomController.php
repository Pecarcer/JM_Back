<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Room;
use Illuminate\Support\Str;


class RoomController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all rooms
    public function index()
    {
        $rooms = Room::all()->toArray();
        return array_reverse($rooms);
    }

    // add room
    public function add(Request $request)
    {
        $this->validate($request, [
            'address' => 'required|string',
            'floor' => 'required',
            'room_name' => 'required|string',
            'manager' => 'required'
        ]);

        $room = new Room([
            'address' => $request->address,
            'floor' => $request->floor,
            'room_name' =>$request->room_name,
            'manager' => $request->manager
        ]);
        $room->save();

        return response()->json('The room successfully added');
    }

    // edit room
    public function edit($id)
    {
        $room = Room::find($id);
        return response()->json($room);
    }

    // update room
    public function update($id, Request $request)
    {
        $room = Room::find($id);
        $room->update($request->all());

        return response()->json('The room successfully updated');
    }

    // delete room
    public function delete($id)
    {
        $room = Room::find($id);
        $room->delete();

        return response()->json('The room successfully deleted');
    }
}
