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
    <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-900 text-white min-h-screen">
<div id="app" class="wrapper min-h-screen flex flex-row">

    <div class="sidebar min-w-[11%]">
        <aside class="flex min-h-full" aria-label="Sidebar">@include('components.admin.sidebar')</aside>
    </div>
    <div class="content flex flex-col min-h-full min-w-[89%]">
        <header class="">
            <nav class="border-gray-200 px-2 py-2.5 rounded bg-gray-800 text-white">@include('components.admin.navbar')</nav>
        </header>
        <main class="content bg-gray-900">
            <div class="content_div">@yield('content')</div>
        </main>
    </div>
</div>
</body>
</html>
