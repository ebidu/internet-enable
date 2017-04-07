<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">>
        <link rel="stylesheet" href="{{ asset('bootstrap/js/jquery-1.11.0.min.js') }}">
        <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.min.js') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Tasks</title>
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>