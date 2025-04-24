<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('images/icons/logo1.png') }}" type="image/png">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-primary: #02807F;
            --color-secondary: #015f5f;
            --color-slight: #359999;
            --color-sign: #DE8B2C;
            --drop-shadow-default: 0 4px 4px rgba(0, 0, 0, 0.25);
            --font-title: 'Racing Sans One', cursive;
            --font-subtitle: 'Poppins', sans-serif;
            --font-weight-light: 300:
        }
        }
    </style>
</head>

<body class="flex flex-col min-h-screen scroll-smooth">
    @include('layouts.header')
    <main class="flex-1 container mx-auto py-4">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>

</html>
