@php
    $total = 0;
@endphp
<div class="container hs-5">
    @if(str_starts_with($_SERVER['REQUEST_URI'], "/genre"))
    <a href="/genre" class="active">A-z</a>
    <a href="/popular">Popular</a>
    @else
    <a href="/genre">A-z</a>
    <a href="/popular" class="active">Popular</a>
    @endif
</div>
<div class="container p-3 hs-4">
    <ul class="list-group lg">
        @php $prev = '' @endphp
        @foreach ($data as $item)
        @php $curr = substr($item->name, 0, 1) @endphp
        @if($curr != $prev && str_starts_with($_SERVER['REQUEST_URI'], "/genre"))
            <div class="section-header">
                {{$curr}}
            </div>
        @php $prev = $curr @endphp
        @endif
            <a href="/genre/{{$item->name}}">
                <li class="list-group-item genre-item">
                    <span>{{ $item->name }}</span>
                    @php 
                        $count = $item->bookGenres->count();
                        $k = false;
                        if($count >= 1000){
                            $count /= 1000;
                            $k = true;
                        }
                        $count = (int)$count;
                    @endphp
                    <span>{{$count}}@if($k)K @endif</span>
                </li>
            </a>
        @endforeach
    </ul>
</div>
<div class="justify-content-md-center pagination pg-1">{{$data->onEachSide(3)->links()}}</div>