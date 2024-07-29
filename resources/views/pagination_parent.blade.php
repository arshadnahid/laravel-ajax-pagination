<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 6 Pagination with Next Previous Button Link using Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <br />
    <h3 align="center">Laravel 6 Pagination with Previous Next Button Link using Ajax</h3>
    <br />
    @csrf
    <div class="table-responsive" id="table_data">
        @include('pagination_child')
    </div>
    <div class="table-responsive" id="table_data_user">
        @include('user_pagination_child')
    </div>
</div>
</body>
</html>


<script>
    $(document).ready(function(){

        $(document).on('click', '.page-link-user', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data_user(page);
        });
        $(document).on('click', '.page-link', function(event){
            event.preventDefault();
            var page = $(this).attr('href').split('page=')[1];
            fetch_data(page);
        });

        function fetch_data(page)
        {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:"{{ route('pagination.fetch') }}",
                method:"POST",
                data:{ page:page},
                success:function(data)
                {
                    $('#table_data').html(data);
                }
            });
        }
        function fetch_data_user(page)
        {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:"{{ route('pagination.fetch_user') }}",
                method:"POST",
                data:{ page:page},
                success:function(data)
                {
                    $('#table_data_user').html(data);
                }
            });
        }

    });
</script>

