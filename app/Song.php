<?php namespace chordlib;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {

	public function artistName($artistId)
    {
        $artist = Artist::findOrFail($artistId);
        return $artist->name;
    }

}
