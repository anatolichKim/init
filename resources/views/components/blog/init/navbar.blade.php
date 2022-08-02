<div class="bg-gradient-to-r from-gray-800 to-gray-900 p-4 flex flex-wrap justify-between items-center mx-auto">
    <a href="{{route('root')}}" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <form method="POST" action="{{route('logout')}}" class="ml-10 mt-1 text-gray-300 hover:text-white">
        @csrf
        <button type="submit">
            {{__('navbar.logout')}}
        </button>
    </form>
</div>
