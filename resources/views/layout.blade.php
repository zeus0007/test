<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>@yield('title', 'Laravel')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container mx-auto">
            <ol>
                <li><a href="/">Welcome</a></li>
                <li><a href="/hello">Hello</a></li>
                <li><a href="/contact">Contact</a></li>
            </ol>
            <h1>@yield('content')</h1>
        </div>

    </body>
</html>
