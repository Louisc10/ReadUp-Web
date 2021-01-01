@extends('layout.main')

@section('title')
    {{$data->title}}
@endsection

@section('content')
    <div class="hs3 container">
        <div>
            <div id="chapter-info">
                <h3>Chapter {{$id}}. {{$data->title}}</h3>
            </div>
            <div id="chapter-container">
                @foreach($data->chapterDetails as $cd)
                    <img class="chapter-image" src="{{$cd->content}}" alt="">
                @endforeach
            </div>
        </div>
    </div>
@endsection