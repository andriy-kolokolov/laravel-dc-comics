@extends('layouts.base')

@section('content')
    <div class="row justify-content-center">
        @foreach ($comics as $comic)
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="grid-item">
                    <div class="img-wrapper">
                        <img src="{{ $comic->thumb }}" alt="comic image">
                    </div>
                    <h3>{{ $comic->title }}</h3>
                </div>
            </div>
        @endforeach
    </div>

    {{ $comics->links() }}
@endsection

