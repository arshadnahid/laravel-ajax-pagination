<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <tr>
            <th>Id</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        @foreach($post as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->body }}</td>
            </tr>
        @endforeach
    </table>

    {!! $post->links('vendor.pagination.custom') !!}
</div>


