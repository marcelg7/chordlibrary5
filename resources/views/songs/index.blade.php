@extends('layout.main')

@section('content')
    <form class="ui-filterable">
        <input id="songFilter" data-type="search" placeholder="Search song titles">
    </form>

    <ul data-role="listview" data-filter="true" data-input="#songFilter" data-autodividers="true" data-inset="true">
        @foreach($songs as $song)
            <li title="{{ $song->title }}"><a href="{{ URL::route('song.show', ['id' => $song->id, 'title' => $song->title]) }}">{{ $song->title }}</a></li>
        @endforeach
    </ul>
@stop