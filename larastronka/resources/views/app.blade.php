<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <ul>
        <li><a href="/about">O mnie</a></li>
        <li><a href="/services">Usługi</li>
    </ul>
    @yield('content')
</body>
</html>
