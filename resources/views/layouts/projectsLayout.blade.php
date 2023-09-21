<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="flex justify-between items-center p-4">
        <h3>
            <a href="{{ route('projects.index') }}">Tutti i Progetti</a>
        </h3>

        <nav>
            <a href="{{ route('dashboard') }}">DashBoard</a>
        </nav>
    </header>
    <main>
        <div class="container mx-auto px-4">
            @yield('main_content')
        </div>
    </main>
    <footer>
        <div class="flex justify-center items-center">
            <h3>
                FOOTER
            </h3>
        </div>
    </footer>
</body>
</html>