<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smart Parking</title>
</head>

<body>
    @include('layouts.nav')
    @yield('content')
    @viteReactRefresh
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</body>

</html>
