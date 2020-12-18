@extends('layout.main')

@section('title')
    Genre
@endsection

@section('content')
@include('layout.displayAllGenre', ['data' => $data]);
@if ($books != 'none')
    @include('layout.displayAllFilm', ['books' => $books])
@endif
@endsection