<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/css/app.css">

</head>
<body>
    <nav>
        <a href="/">Home</a> |
        <a href="/about">About</a>
    </nav>

    {{ $slot }}

</body>
</html>
