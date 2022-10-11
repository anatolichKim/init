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
<body class="font-sans flex flex-col bg-gray-900 text-white min-h-screen bg-cover bg-no-repeat bg-center bg-landing-lg">

<header>
    <div class="px-5 mt-2 flex flex-wrap justify-between items-center mx-auto">
        <a href="#" class="flex items-center">
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', 'Init') }}</span>
        </a>

        <div class="flex md:order-2">
            <form method="GET" action="{{route('auth.login')}}" class="ml-10 mt-1 text-gray-300 hover:text-white">
                @csrf
                <button type="submit">
                    {{__('guest.login')}}
                </button>
            </form>
        </div>
    </div>
</header>


<main class="flex-1 flex flex-col justify-center">
    <div class="w-auto mb-32 mr-48 self-end">
        <h1 class="text-4xl mb-2">{{__('guest.promo_header')}}</h1>
        <p class="text-lg mb-4">{{__('guest.promo_param')}}</p>
        <form method="GET" action="{{route('auth.registration')}}" class="mt-1 text-gray-300 hover:text-white">
            @csrf
            <button type="submit" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-lg px-5 py-2.5 text-center mr-2 mb-2">
                {{__('guest.signup')}}
            </button>
        </form>

    </div>
</main>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script>

</body>
</html>
