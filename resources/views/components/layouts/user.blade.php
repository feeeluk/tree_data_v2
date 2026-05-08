<!DOCTYPE html>
<html>
<head>
    <title>{{ $environmentLabel }}</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/general.css">
    <link rel="stylesheet" href="/css/user.css">

</head>

<body>

    <x-nav />

    <main>

        {{ $slot }}

    </main>

    <x-footer />

</body>
</html>
