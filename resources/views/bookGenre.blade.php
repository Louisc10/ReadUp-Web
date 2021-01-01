@extends('layout.main')

@section('title')
    {{$filter}}
@endsection

@section('content')
    @include('layout.displayFiltered', ['books' => $data, 'filter' => $filter])
    <div class="justify-content-md-center paginator pg-1">{{$data->onEachSide(3)->links()}}</div>
@endsection