@extends('layout.main')

@section('content')

    <form class="ui-filterable">
        <input id="artistFilter" data-type="search" placeholder="Search for names..">
    </form>
    <ul data-role="listview" data-filter="true" data-input="#artistFilter" data-autodividers="true" data-inset="true">
        @foreach($artists as $artist)
            <li title="{{ $artist->name }}"><a href="{{ URL::route('artist.show', ['id' => $artist->id, 'name' => $artist->name]) }}">{{ $artist->name }}</a></li>
        @endforeach
    </ul>

@stop