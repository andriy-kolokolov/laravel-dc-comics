@extends('layouts.only-nav')

@section('content')
    <div class="container text-center d-flex justify-content-between">
        <div class="d-flex align-items-center">

            <a href="{{ route('comics.show', ['id' => $comic->id - 1]) }}"
               class="d-flex align-items-center text-decoration-none fw-bold text-bg-success p-3 rounded-2">
                <i class="fa-solid fa-caret-left d-flex align-items-center fs-1 me-2"></i>
                PREVIOUS COMIC
            </a>
        </div>

        <div class="comic">
            <h1>{{ $comic->title }}</h1>
            <div class="d-flex justify-content-center">
                <div class="comic-show__img-wrapper">
                    <img src="{{ $comic->thumb }}" alt="comic img">
                </div>
            </div>
            <h5>Price: {{ $comic->price }}</h5>
            <p>Description: {{ $comic->description }}</p>
            <p>Series: {{ $comic->series }}</p>
            <p>Sales date: {{ $comic->sale_date }}</p>
            <p>Type: {{ $comic->type }}</p>
        </div>

        <div class="d-flex align-items-center">
            <a href="{{ route('comics.show', ['id' => $comic->id + 1]) }}"
               class="d-flex align-items-center text-decoration-none fw-bold text-bg-success p-3 rounded-2">
                NEXT COMIC
                <i class="fa-solid fa-caret-right d-flex align-items-center fs-1 ms-2"></i>
            </a>
        </div>
    </div>

@endsection
