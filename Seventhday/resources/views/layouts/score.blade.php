<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Unisda Church')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Add your header here -->
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Add your footer here -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
