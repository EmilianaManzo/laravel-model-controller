<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>Movies | @yield('title')</title>
</head>
<body>
    @include('partials.header')

    <main class="py-5">
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
