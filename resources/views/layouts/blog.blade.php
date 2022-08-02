<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="font-sans bg-gray-900 text-white min-h-screen">

<div id="app" class="wrapper min-h-screen flex flex-col">
    <div class="header">
        <header class="">
                @hasSection('navbar')
                    <nav class="text-white">
                        @yield('navbar')
                    </nav>
                @else
                    <nav class="border-gray-200 px-2 py-2.5 rounded bg-gray-800 text-white">
                        @include('components.blog.navbar')
                    </nav>
                @endif

        </header>
    </div>

    <div class="content flex flex-row min-h-full min-w-[89%] flex-3">
        <div class="sidebar min-w-[11%]">
            @hasSection('sidebar')
                <aside class="flex min-h-full" aria-label="Sidebar">@yield('sidebar')</aside>
            @else
                <aside class="flex min-h-full" aria-label="Sidebar">@include('components.blog.sidebar')</aside>
            @endif
        </div>
        <main class="content bg-gray-900 ml-10">
            <div class="mt-16 ml-10 max-w-[80%]">@yield('content')</div>
        </main>
    </div>

    <div class="flex-4">
        <footer>
            <div class="mt-52">@include('components.blog.footer')</div>
        </footer>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>

</body>
</html>
