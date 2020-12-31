@extends('layout.main')

@section('title')
    Home
@endsection

@section('content')
    <div class="hs1 container">
        <h3><a href="/hot">Popular Now</a></h3>
        @include('layout.displayAllFilm', ['books' => $popular, 'sect' => 'popular'])
    </div>
    <div class="hs1 container">
        <h3>Latest Upload</h3>
        @include('layout.displayAllFilm', ['books' => $latest, 'sect' => 'latest'])
    </div>
@endsection