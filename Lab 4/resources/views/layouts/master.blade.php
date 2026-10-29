{{-- MASTER LAYOUT: child pages isme @yield wali jagah apna content bharte hain --}}
@php
    $themeName = session('theme', config('theme.default'));
    $colors    = config('theme.colors')[$themeName] ?? config('theme.colors')[config('theme.default')];
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', config('theme.name')) | {{ config('theme.name') }}</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" />
    <style>:root{ --accent: {{ $colors['accent'] }}; --accent-hover: {{ $colors['hover'] }}; }</style>
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    @stack('styles')
</head>
<body>
<div id="wrapper">

    <div id="main">
        <div class="inner">
            @include('partials.header')

            @yield('banner')
            @yield('content')
        </div>
    </div>

    <div id="sidebar">
        <div class="inner">
            @include('partials.sidebar')
        </div>
    </div>

</div>
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('scripts')
</body>
</html>
