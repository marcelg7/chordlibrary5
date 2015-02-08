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
	Route::model('artist', 'Artist');

	// Show pages.
	Route::get('/artist', 'ArtistsController@index');
	Route::get('/artist/create', 'ArtistsController@create');
	Route::get('/artist/edit/{artist}', 'ArtistsController@edit');
	Route::get('/artist/delete/{artist}', 'ArtistsController@delete');

	// Handle form submissions.
	Route::post('/artist/create', 'ArtistsController@handleCreate');
	Route::post('/artist/edit', 'ArtistsController@handleEdit');
	Route::post('/artist/delete', 'ArtistsController@handleDelete');

/*Song Routes*/
Route::model('song', 'Song');
Route::resource('song', 'SongsController');