<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THANAT PROMPIRIYA - @yield('title')</title>

    {{-- <link rel="stylesheet" href="{{ asset('assets/layouts/navbar.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/layouts/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/lineseedTH/font.css') }}">
    @yield('css')
</head>

<body>
    @include('front-end.layouts.navbar')
    @yield('content')
    @include('front-end.layouts.footer')

    <script src="{{ asset('assets/javascript/app.js') }}"></script>
    @stack('scripts')
</body>

</html>
