@extends('layout.app')

@section('title', 'Songs')
@section('body')
    {{'Songs are the best'}}
    @foreach ($songs as $song)
        {{ $song->title}}
    @endforeach
@endsection