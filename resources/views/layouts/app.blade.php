<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-900 text-white min-h-screen">
    <div id="app" class="wrapper min-h-screen flex flex-col">
        <header>
            <nav class="border-b border-gray-600">@include('components.navbar')</nav>
        </header>
        <main class="py-4 content flex flex-3">@yield('content')</main>
        <footer class="border-t border-gray-600 flex flex-4">@include('components.footer')</footer>
    </div>
</body>
</html>
