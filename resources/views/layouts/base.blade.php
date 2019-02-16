<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">
<head>
    <meta charset="utf-8">
    @include('layouts.metadata')
    @yield('metadata')
    @include('layouts.styles')
    @yield('styles')
</head>
<body>
@include('layouts.header')
@include('layouts.errors')
@yield('content')
@include('layouts.footer')

@include('layouts.scripts')
@yield('scripts')
</body>
</html>