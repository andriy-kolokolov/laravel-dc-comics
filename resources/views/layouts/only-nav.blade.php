<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DC Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
@include('components.nav')
<div class="main-wrapper">
    @yield('content')
</div>


</body>
</html>
