<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IN Line</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
    </body>
</html>
