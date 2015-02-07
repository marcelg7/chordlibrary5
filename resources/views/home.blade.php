@extends('layout.main')

@section('artistsPanel')
	<form class="ui-filterable">
		<input id="myFilter" data-type="search" placeholder="Search for names..">
	</form>
	<ul data-role="listview" data-filter="true" data-input="#myFilter" data-autodividers="true" data-inset="true">

		@foreach($artists as $artist)
			<li title="{{ $artist->name }}">{{ $artist->name }}</li>
		@endforeach
	</ul>

@stop


@section('songsPanel')
	<form class="ui-filterable">
		<input id="myFilter" data-type="search" placeholder="Search for names..">
	</form>
	<ul data-role="listview" data-filter="true" data-input="#myFilter" data-autodividers="true" data-inset="true">

		@foreach($songs as $song)
			<li title="{{ $song->title }}">{{ $song->title }}</li>
		@endforeach
	</ul>
@stop



@section('content')



@endsection
