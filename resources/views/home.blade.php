@extends('layout.main')

@section('title')
    Home
@endsection

@section('content')
    @include('layout.displayAllFilm', ['books' => $books])
@endsection