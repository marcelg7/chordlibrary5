@extends('layout.main')

@section('content')
    <h1>Add New Song</h1>
    <hr>

    {!! Form::open(['url' => 'songs']) !!}

            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title') !!}

            {!! Form::label('artist', 'Artist:') !!}
            {!! Form::text('artist') !!}

            {!! Form::label('tags', 'Tags:') !!}
            {!! Form::text('tags') !!}

            {!! Form::label('info', 'Info:') !!}
            {!! Form::text('info') !!}

            {!! Form::label('chords', 'Chords:') !!}
            {!! Form::textarea('chords') !!}

            {!! Form::submit('Add Song') !!}

    {!! Form::close() !!}
@stop