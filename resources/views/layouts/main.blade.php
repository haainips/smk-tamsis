<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="flex flex-col min-h-screen ">
    @include('layouts.header')
    <main class="flex-1 container mx-auto py-4">
        @yield('content')
    </main>
    @include('layouts.footer')
</body>

</html>