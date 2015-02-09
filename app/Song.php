<?php namespace chordlib;

use Illuminate\Database\Eloquent\Model;

class Song extends Model {

    protected $fillable = [
        'title',
        'chords',
        'artist_id',
        'info',
        'tags'
    ];

	public function artistName($artistId)
    {
        $artist = Artist::findOrFail($artistId);
        return $artist->name;
    }

}
