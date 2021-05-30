<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models\Review;
use Illuminate\Support\Str;


class ReviewController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    // all reviews
    public function index()
    {
        $reviews = Review::all()->toArray();
        return $reviews;
    }

    // add review
    public function add(Request $request)
    {
        $this->validate($request, [
            'reviewer' => 'required',
            'boardgame_id' => 'required',
            'score' => 'required|integer|between:0,10',
            'opinion' => 'required|string'
        ]);

        $review = new Review([
            'reviewer' => $request->reviewer,
            'boardgame_id' => $request->boardgame_id,
            'score' =>$request->score,
            'opinion' => $request->opinion
        ]);
        $review->save();

        return response()->json('The review successfully added');
    }

    // edit review
    public function edit($id)
    {
        $review = Review::find($id);
        return response()->json($review);
    }

    // update review
    public function update($id, Request $request)
    {
        $review = Review::find($id);
        $review->update($request->all());

        return response()->json('The review successfully updated');
    }

    // delete review
    public function delete($id)
    {
        $review = Review::find($id);
        $review->delete();

        return response()->json('The review successfully deleted');
    }
}
