<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="./js/app.js" charset="utf-8"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" integrity="sha384-KA6wR/X5RY4zFAHpv/CnoG2UW1uogYfdnP67Uv7eULvTveboZJg0qUpmJZb5VqzN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


    </head>
    <body>

        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')
    </body>
</html>
