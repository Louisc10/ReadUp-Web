@extends('layout.main')

@section('title')
    {{$data->title}}
@endsection

@section('content')
    <div class="hs2 container">
        <div>
            <div id="bd-img">
                <img src="{{$data->image}}" alt="">
            </div>
            <div class="rating">
                <div>{{$data->rating}} ratings</div>
                <div class="rating-star">
                    <div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                    </div>
                    <div style="width: calc(15.55px * {{$data->rating}}); color: #f6e58d">
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                        <div>&#9733;</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bd-info">
            <h1 id="bd-title">{{$data->title}}</h1>
            <div id="bd-desc">
                <div style="color: #97a7c0; font-weight: 700;">Description</div>
                <div style="color: #97a7c0">{{$data->description}}</div>
            </div>
            <div class="bd-bar"></div>
            <div id="bd-genre">
                <div style="color: #97a7c0; font-weight: 700;">Genre</div>
                <div>
                    @foreach($data->bookGenres as $bookGenres)
                        <a class="bd-genre" href="/genre/{{$bookGenres->genre->name}}">{{$bookGenres->genre->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
        <div id="bd-chapters">
            <a href="/read/{{$data->id}}/1">
                <span>Read from first chapter</span><span class="material-icons">keyboard_arrow_right</span>
            </a>
            <div id="bd-chp">
                <div id="chp-list">
                    @foreach($data->chapters as $chapter)
                        <a href="/read/{{$data->id}}/{{$loop->index + 1}}" class="bd-chp-item">{{$loop->index + 1}}) {{trim(substr(strip_tags($chapter->title), 0, 30))}}@if(strlen($chapter->title) > 30)...@endif</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection