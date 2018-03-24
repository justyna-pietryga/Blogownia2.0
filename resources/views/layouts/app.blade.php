<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blogownia</title>


    <link rel="stylesheet" href="/css/app.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('custom_style_headers')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/js/mdb.min.js"></script>
</head>
<body>
    @include('inc.navbar')


    <div class="container-fluid">
        @include('inc.messages')

        @if(Request::is('/') and !Auth::check())
            @include('inc.jumbotron')
        @endif

        <div class="row">

            {{--@include('inc.sidebar')--}}

                @yield('content')



        </div>
    </div>

</body>
</html>