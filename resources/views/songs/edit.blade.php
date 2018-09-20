@extends('layout.app')
@section('body')
    {{ $song->title}} by<br>
    {{ $song->artist}}
@endsection