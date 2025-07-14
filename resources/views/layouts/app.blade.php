<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome (for icons) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Laravel Notify CSS -->
    @notifyCss

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased bg-gray-100">

    <!-- Laravel Jetstream Banner (e.g., for session flash messages) -->
    <x-banner />

    <!-- Main Content Area -->
    <div class="min-h-screen">
        <!-- Navigation -->
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                @if (isset($header))
                    <div>{{ $header }}</div>
                @endif

                <div class="flex items-center justify-end">
                    @livewire('navigation-menu')
                </div>
            </div>
        </header>

        <!-- Page Slot Content -->
        <main class="py-4">
            {{ $slot }}
        </main>
    </div>

    <!-- Livewire Modals Stack -->
    @stack('modals')

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- Alpine.js (for Jetstream dropdowns) -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Laravel Notify JS -->
    @notifyJs

    <!-- Laravel Notify UI Element -->
    <x-notify::notify />

</body>

</html>