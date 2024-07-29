@foreach ($post as $rs)
    <div class="col-4" style="padding-bottom:10px;">
        <div class="card">
            <img src="https://placehold.co/400x250" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $rs->id }}  : {{ $rs->title }}</h5>
                <p class="card-text">{!! $rs->body !!}</p>
            </div>
        </div>
    </div>
@endforeach
