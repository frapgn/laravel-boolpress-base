<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - BoolPress</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{-- header --}}
        @include('partials.header')
    {{-- /header --}}

    {{-- main --}}
        @yield('main')
    {{-- /main --}}
</body>
</html>
