<div class="border-b border-gray-600">
    <div class="w-full flex flex-row items-center justify-between px-10 py-6">
        <ul class="flex items-center">
            <li class="ml-10">
                <a href="{{route('root')}}" class="flex items-center hover:text-gray-300">
                    <span>{{config('app.name')}}</span>
                </a>
            </li>
            @auth()
                <li class="ml-20">
                    <a href="#" class="hover:text-gray-300">Дорожная карта</a>
                </li>
                <li class="ml-6">
                    <a href="#" class="hover:text-gray-300">Модули</a>
                </li>
            @endauth
        </ul>

        <ul class="flex items-center">
            @guest()
                @if (Route::is('login'))
                    <li><a href="{{route('register')}}" class="hover:text-gray-300">{{__('navbar.register')}}</a></li>
                @elseif (Route::is('register'))
                    <li><a href="{{route('login')}}" class="hover:text-gray-300">{{__('navbar.login')}}</a></li>
                @else
                    <li><a href="{{route('register')}}" class="hover:text-gray-300">Зарегистрироваться</a></li>
                    <li class="ml-10"><a href="{{route('login')}}" class="hover:text-gray-300">Войти</a></li>
                @endif
            @endguest

            @auth()
                    <li>
                        <form method="POST" action="{{route('logout')}}" class="ml-10 mt-1 text-gray-300 hover:text-white">
                            @csrf
                            <button type="submit">
                                {{__('navbar.logout')}}
                            </button>
                        </form>
                    </li>
            @endauth
        </ul>
    </div>
</div>
