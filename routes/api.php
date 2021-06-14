<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardgameController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DebtorController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::group(['prefix' => 'boardgames', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [BoardgameController::class, 'index']);
    Route::post('add', [BoardgameController::class, 'add']);
    Route::get('edit/{id}', [BoardgameController::class, 'edit']);
    Route::post('update/{id}', [BoardgameController::class, 'update']);
    Route::delete('delete/{id}', [BoardgameController::class, 'delete']);
});

Route::group(['prefix' => 'comments', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [CommentController::class, 'index']);
    Route::post('add', [CommentController::class, 'add']);
    Route::get('edit/{id}', [CommentController::class, 'edit']);
    Route::post('update/{id}', [CommentController::class, 'update']);
    Route::delete('delete/{id}', [CommentController::class, 'delete']);
});

Route::group(['prefix' => 'debtors', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [DebtorController::class, 'index']);
    Route::post('add', [DebtorController::class, 'add']);
    Route::get('edit/{id}', [DebtorController::class, 'edit']);
    Route::post('update/{id}', [DebtorController::class, 'update']);
    Route::delete('delete/{id}', [DebtorController::class, 'delete']);
});

Route::group(['prefix' => 'games', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [GameController::class, 'index']);
    Route::post('add', [GameController::class, 'add']);
    Route::get('edit/{id}', [GameController::class, 'edit']);
    Route::post('update/{id}', [GameController::class, 'update']);
    Route::delete('delete/{id}', [GameController::class, 'delete']);
});

Route::group(['prefix' => 'likes', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [LikeController::class, 'index']);
    Route::post('add', [LikeController::class, 'add']);
    Route::get('edit/{id}', [LikeController::class, 'edit']);
    Route::post('update/{id}', [LikeController::class, 'update']);
    Route::delete('delete/{id}', [LikeController::class, 'delete']);
});

Route::group(['prefix' => 'players', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [PlayerController::class, 'index']);
    Route::post('add', [PlayerController::class, 'add']);
    Route::get('edit/{id}', [PlayerController::class, 'edit']);
    Route::post('update/{id}', [PlayerController::class, 'update']);
    Route::delete('delete/{id}', [PlayerController::class, 'delete']);
});

Route::group(['prefix' => 'posts', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [PostController::class, 'index']);
    Route::post('add', [PostController::class, 'add']);
    Route::get('edit/{id}', [PostController::class, 'edit']);
    Route::post('update/{id}', [PostController::class, 'update']);
    Route::delete('delete/{id}', [PostController::class, 'delete']);
});

Route::group(['prefix' => 'reviews', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [ReviewController::class, 'index']);
    Route::post('add', [ReviewController::class, 'add']);
    Route::get('edit/{id}', [ReviewController::class, 'edit']);
    Route::post('update/{id}', [ReviewController::class, 'update']);
    Route::delete('delete/{id}', [ReviewController::class, 'delete']);
});


Route::group(['prefix' => 'rooms', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [RoomController::class, 'index']);
    Route::post('add', [RoomController::class, 'add']);
    Route::get('edit/{id}', [RoomController::class, 'edit']);
    Route::post('update/{id}', [RoomController::class, 'update']);
    Route::delete('delete/{id}', [RoomController::class, 'delete']);
});


Route::group(['prefix' => 'users', 'middleware' => 'auth:sanctum'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('add', [UserController::class, 'add']);
    Route::get('edit/{id}', [UserController::class, 'edit']);
    Route::post('update/{id}', [UserController::class, 'update']);
    Route::delete('delete/{id}', [UserController::class, 'delete']);
    //Route::get('/{id}/name', [UserController::class, 'getName']);
    //Route::get('/{id}/role', [UserController::class, 'getRole']);
});
