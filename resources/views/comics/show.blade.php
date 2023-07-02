@extends('layouts.create')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <p>{{ $comic->type }}</p>
    <h5>Cooking Time: {{ $comic->cooking_time }}</h5>
    <img src="{{ $comic->src }}" alt="pasta photo">
@endsection
