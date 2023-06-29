@extends('layouts.base')

@section('content')
    <div class="row justify-content-center g-4">
        @foreach ($comics as $comic)
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="grid-item">
                    <div class="img-wrapper">
                        <img src="{{ $comic->thumb }}" alt="comic image">
                    </div>
                    <h5 class="mt-4 text-center">{{ $comic->title }}</h5>
                </div>
            </div>
        @endforeach
    </div>

    {{ $comics->links() }}
@endsection

