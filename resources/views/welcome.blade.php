<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/mycss.css')}}">
    <title>Portfolio</title>
</head>

<body class="overflow-x-hidden">
    @include('header')
    <div class="mt-20">
        @include('about-me')
        @include('professional-exp')
    </div>
</body>

</html>
