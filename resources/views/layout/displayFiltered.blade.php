
<div class="hs1 container">
    <h3>{{$filter}}</h3>
    @include('layout.displayAllFilm', ['books' => $data])
    @if($data->count() == 0)
        <div>No item with this genre yet.</div>
    @endif
</div>