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

use League\Csv\Reader;

Route::get('/', function () {
    return view('home')->withPlayers(App\Player::where('drafted',false)->orderBy('projected')->orderBy('visited', 'DESC')->orderBy('position')->get());
});
