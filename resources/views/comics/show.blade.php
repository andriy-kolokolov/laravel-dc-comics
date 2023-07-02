@extends('layouts.create')

@section('content')
    <h1>{{ $comic->title }}</h1>
    <img src="{{ $comic->thumb }}" alt="comic img">
    <h5>Price: {{ $comic->price }}</h5>
    <p>Description: {{ $comic->description }}</p>
    <p>Series: {{ $comic->series }}</p>
    <p>Sales date: {{ $comic->sale_date }}</p>
    <p>Type: {{ $comic->type }}</p>
@endsection
