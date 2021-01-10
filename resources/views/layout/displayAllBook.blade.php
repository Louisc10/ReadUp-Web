<div class="container d-flex flex-wrap px-10">
    <div class="row">
        @foreach ($books as $item)
        <div class="col mb-4">
            <div class="card">
                <a class="card-image" href="/read/{{$item->id}}">
                    <img src="{{$item->image}}" alt="">
                </a>
                <div class="card-show-info material-icons"><label for="show-{{$item->id}}-{{$sect ?? ''}}">filter_list</label></div>
                <input type="checkbox" name="show-{{$item->id}}" hidden id="show-{{$item->id}}-{{$sect ?? ''}}" class="card-shower">
                <div class="card-info">
                    <div>
                        <div class="cit-rb"></div>
                        <h5 class="card-title">{{trim(substr(strip_tags($item->title), 0, 25))}}@if(strlen($item->title) > 25)...@endif</h5>
                        <div class="cit-lt"></div>
                    </div>
                    <div class="card-info-all">
                        <h5 class="card-title">Description:</h5>
                        <p class="card-text">
                            {{trim(substr(strip_tags($item->description), 0, 150))}}@if(strlen($item->description) > 150)...@endif
                        </p>
                        <p class="card-text">
                            <small class="text-muted">
                                <small style="color: #fff">Rating</small>
                                <small style="color: #348fff">{{$item->rating}}</small>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
