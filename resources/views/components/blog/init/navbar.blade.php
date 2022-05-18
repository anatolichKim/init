<div class="bg-gradient-to-r from-gray-800 to-gray-900 p-4 flex flex-wrap justify-between items-center mx-auto">
    <a href="https://flowbite.com" class="flex items-center">
        <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', 'Laravel') }}</span>
    </a>
    <a href="{{route('logout')}}" class="ml-10 mt-1 text-gray-300 hover:text-blue-500">{{__('navbar.logout')}}</a>
</div>
