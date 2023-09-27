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

        {{-- FA --}}

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="flex justify-between items-center p-4">
        <h3>
            <a href="{{ route('projects.index') }}"><i class="fa-solid fa-house fa-xl"></i> Tutti i Progetti </a>
        </h3>

        <nav>
            <a href="{{ route('dashboard') }}"><i class="fa-solid fa-table-columns fa-xl"></i> DashBoard</a>
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