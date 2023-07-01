@extends('layouts.base')

@section('content')
    <div class="row justify-content-center g-4 text-white">
        <div class="text-center fs-2 p-1">
            <button class="btn btn-primary"><a href="/comix.create" class="text-white fw-bold text-decoration-none">ADD COMIC</a></button>
        </div>
        @foreach ($comics as $comic)
            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                <div class="grid-item">
                    <div class="img-wrapper">
                        <img src="{{ $comic->thumb }}" alt="comic image">
                    </div>
                    <h5 class="mt-4 text-center">{{ $comic->title }}</h5>
                    <div class="d-flex justify-content-around me-auto fs-4">
                        <a href="/comix.update"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="/comix.delete"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $comics->links() }}
@endsection

