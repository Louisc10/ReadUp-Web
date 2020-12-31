@extends('layout.main')

@section('title')
    Hot
@endsection

@section('content')
    <div class="hs1 container">
        <h3>Hot Manga</h3>
        @include('layout.displayAllFilm', ['books' => $hots])
    </div>
@endsection