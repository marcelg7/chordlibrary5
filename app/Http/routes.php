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

Route::get('welcome', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/', 'HomeController@index');

/*Artist Routes*/
// Bind route parameters.
Route::model('artist', 'chordlib\Artist');
Route::resource('artist', 'ArtistsController');

/*Song Routes*/
Route::model('song', 'chordlib\Song');
Route::resource('song', 'SongsController');