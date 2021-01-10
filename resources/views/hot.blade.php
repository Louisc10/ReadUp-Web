@extends('layout.main')

@section('title')
    Hot
@endsection

@section('content')
    <div class="hs1 container">
        <h3>Hot Manga</h3>
        @include('layout.displayAllBook', ['books' => $hots])
    </div>
    <div class="justify-content-md-center paginator pg-1">{{$hots->onEachSide(3)->links()}}</div>
@endsection