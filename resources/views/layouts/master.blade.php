<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-spatie</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <div id="main">
        @include('layouts.nav')
        <div class=" container-fluid">
            @yield('content')
        </div>
    </div>
</body>
</html>