@extends('layout.main')

@section('title')
    Home
@endsection

@section('content')
    <div id="banner">
        <div class="photo-bg">
            <div style="background-image: url('{{ asset('assets/wallpaper3.jpg') }}');"></div>
        </div>
        <div id="banner-container">
            <h1>Welcome to ReadUp!</h1>
            <h5 class="uppercase ">the best source for</h5>
            <div class="scroller">
                <h2 class="uppercase scrolling">Manga</h2>
                <h2 class="uppercase scrolling">Novel</h2>
            </div>
            <h5 class="uppercase">free, without any ads and in high definition!</h5>
            <h1 class="material-icons" id="go-down">expand_more</h1>
        </div>
    </div>
    <div class="hs1 container">
        <h3><a href="/hot">Popular Now</a></h3>
        @include('layout.displayAllFilm', ['books' => $popular, 'sect' => 'popular'])
    </div>
    <div class="hs1 container">
        <h3>Latest Upload</h3>
        @include('layout.displayAllFilm', ['books' => $latest, 'sect' => 'latest'])
    </div>
@endsection