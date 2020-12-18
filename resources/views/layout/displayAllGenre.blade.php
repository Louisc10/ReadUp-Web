@php
    $total = 0;
@endphp
<div class="container p-3">
    <ul class="list-group">
    @foreach ($data as $item)
    @if ($total % 3 ==0)
        <div class="row justify-content-md-center">
    @endif
        <div class="col col-lg-2">
            <a href="">
                <li class="list-group-item">
                    {{ $item->name }}
                </li>
            </a>
        </div>
    @if ($total % 3 ==2)
        </div>
    @endif
    @php
        $total = $total + 1;
    @endphp
    @endforeach
    </ul>
</div>