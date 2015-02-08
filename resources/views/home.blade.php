@extends('layout.main')

@section('artistsPanel')
	<form class="ui-filterable">
		<input id="artistFilter" data-type="search" placeholder="Search for names..">
	</form>
	<ul data-role="listview" data-filter="true" data-input="#artistFilter" data-autodividers="true" data-inset="true">
		@foreach($artists as $artist)
			<li title="{{ $artist->name }}"><a href="{{ URL::route('artist.show', ['id' => $artist->id, 'name' => $artist->name]) }}">{{ $artist->name }}</a></li>
		@endforeach
	</ul>

@stop


@section('songsPanel')
	<form class="ui-filterable">
		<input id="songFilter" data-type="search" placeholder="Search song titles">
	</form>

	<ul data-role="listview" data-filter="true" data-input="#songFilter" data-autodividers="true" data-inset="true">
		@foreach($songs as $song)
			<li title="{{ $song->title }}"><a href="{{ URL::route('song.show', ['id' => $song->id, 'title' => $song->title]) }}">{{ $song->title }}</a></li>
		@endforeach
	</ul>
@stop



@section('content')
	@if(isset($songChords))

		<h3>{{ $songChords->title }}
			by
			<a href="{{ URL::route('artist.show', ['id' => $songChords->artist_id, 'name' => $songChords->artistName($songChords->artist_id)]) }}">
				{{ $songChords->artistName($songChords->artist_id) }}
			</a>
		</h3>

		<div data-role="controlgroup" data-type="horizontal">
			<a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-plus ui-btn-icon-left">Add to Set</a>
			<a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-edit ui-btn-icon-left">Edit</a>
			<a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-star ui-btn-icon-left">View Sets</a>
		</div>


		<pre>
			{!! $songChords->chords !!}
		</pre>
	@endif

	@if(isset($artistsSongs))

		<h3>{{ $artistName }}</h3>
		<ul data-role="listview" data-filter="false" data-autodividers="true" data-inset="true">
			@foreach($artistsSongs as $artistSong)
				<li><a href="{{ URL::route('song.show', ['id' => $artistSong->id, 'title' => $artistSong->title]) }}">{{ $artistSong->title }}</a></li>
			@endforeach
		</ul>
	@endif

@endsection
