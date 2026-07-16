<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('judul')</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('konten')
    </main>

    @include('partials.footer')

</body>
</html>