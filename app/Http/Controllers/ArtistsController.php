<?php namespace chordlib\Http\Controllers;

use chordlib\Http\Requests;
use chordlib\Http\Controllers\Controller;
use View;

use Illuminate\Http\Request;
use chordlib\Artist;
use chordlib\Song;

class ArtistsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// Show a listing of Artists.
		$artists = Artist::all();

		return View::make('artists.index', compact('artists'));

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($artist)
	{

		$artists = Artist::all()->sortBy('name');

		$songs = Song::all()->sortBy('title');

		$artistsSongs = Song::where('artist_id', '=', $artist->id)->orderBy('title', 'asc')->get();
		$artistName = $artist->name;

		return View::make('home', compact('artistsSongs', 'artistName', 'artists', 'songs'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
