<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>

        @include('layouts.navbar')

        @yield('content')

    </body>
</html>
