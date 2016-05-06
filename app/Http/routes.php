<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
  $players = App\Player::where('drafted', false)->orderBy('projected')->orderBy('visited', 'DESC')->orderBy('position')->get();

  return view('home')->withPlayers($players);
});

Route::get('admin', function () {
  $players = App\Player::orderBy('drafted')->orderBy('projected')->orderBy('position')->get();

  return view('admin')->withPlayers($players);
});

Route::post('player', function (Request $request) {
  $player = App\Player::find($request->input('player_id'));

  $player->drafted = !$player->drafted;

  $player->save();

  return Redirect::to('admin');
});
