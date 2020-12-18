<div class="container d-flex flex-wrap px-10 py-5">
    <div class="row row-cols-md-3">
        @foreach ($books as $item)
        <div class="col mb-4">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{$item->title}}</h5>
                <p class="card-text">{{$item->description}}</p>
                <p class="card-text"><small class="text-muted">Rating {{$item->rating}}</small></p>
            </div>
            </div>
        </div>
        @endforeach
    </div>
</div>