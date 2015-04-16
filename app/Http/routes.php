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

Route::get('/', 'HomeController@index');

Route::get('goats', 'HomeController@goats');

Route::get('contact', 'HomeController@contact');

Route::get('img/{path}', function (League\Glide\Server $server, Illuminate\Http\Request $request) {
	$server->outputImage($request);
})->where('path', '.+');