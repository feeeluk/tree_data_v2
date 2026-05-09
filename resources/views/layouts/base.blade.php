<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    
    <title>{{ $environmentLabel }} | @yield('title')</title>
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    {{-- Core CSS for ALL layouts --}}
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/general.css">

    {{-- Layout‑specific CSS --}}
    @stack('layout-css')
</head>

<body>
    @yield('layout-content')
</body>
</html>
