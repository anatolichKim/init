<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body class="font-sans bg-gray-900 text-white">
    <nav class="border-b border-gray-600">
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
                <li>
                    <a href="#">Hello</a>
                </li>
                <li class="ml-16">
                    <a href="#" class="hover:text-gray-300">Дорожная карта</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Курсы</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Модули</a>
                </li>
            </ul>

            <div class="flex items-center">
                <div class="relative">
                    <input type="text" class="bg-gray-800 rounded-full w-64 px-4 pl-8 py-1
                    focus:outline-none focus:shadow-outline" placeholder="Поиск">
                </div>
            </div>
        </div>
    </nav>
    <div class="block">@yield('content')</div>
    <footer>Footer here</footer>
</body>
</html>
