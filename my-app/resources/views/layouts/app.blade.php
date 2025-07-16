<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'L’Orient-Le Jour')</title>

    <script src="https://kit.fontawesome.com/d77bc12c44.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])
</head>
<body>
    @yield('header')

    <main class=" mt-4">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
