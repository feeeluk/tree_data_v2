<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/general.css">

</head>

<body>

    <x-nav />

    <main>

        {{ $slot }}

    </main>

    <x-footer />

</body>
</html>
