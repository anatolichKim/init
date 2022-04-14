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
<body class="font-sans bg-gray-900 text-white min-h-screen">
    <div class="wrapper min-h-screen flex flex-col">
        <nav class="border-b border-gray-600">
            <div class="container flex items-center justify-between px-10 py-6">
                <ul class="flex items-center">
                    <li class="ml-10">
                        <a href="#" class="flex items-center">
                            <img src="{{asset('images/logo.svg')}}" class="w-10 h-10" alt="">
                            <span>INIT</span>
                        </a>

                    </li>
                    <li class="ml-20">
                        <a href="#" class="hover:text-gray-300">Дорожная карта</a>
                    </li>
                    <li class="ml-6">
                        <a href="#" class="hover:text-gray-300">Модули</a>
                    </li>
                </ul>

                <div class="flex items-center">
                    <div class="ml-4">
                        <a href="#" class="hover:text-gray-300">Профиль</a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="content flex flex-3">@yield('content')</div>
        <footer class="border-t border-gray-600 flex flex-4">
            <div class="container flex justify-between items-center px-10 py-6">
                <div class="flex items-center">
                    <span>© 2022 Kim Anatoliy. Все права защищены</span>
                </div>
                <ul class="flex items-center">
                    <li class="ml-6">Vk</li>
                    <li class="ml-6">github</li>
                    <li class="ml-6">gmail</li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>
