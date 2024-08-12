@foreach ($user as $rs)
    <div class="col-md-4" style="padding-bottom:10px;">
        <div class="card">
            <img src="https://placehold.co/350x250" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $rs->id }}  : {{ $rs->name }}</h5>
                <p class="card-text">{!! $rs->email  !!}</p>
            </div>
        </div>
    </div>
@endforeach
{!! $user->links('vendor.pagination.custom', ['class' => 'page-link-user'])!!}
