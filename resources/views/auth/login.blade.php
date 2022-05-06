@extends('layouts.app')

@section('content')
    <div class="w-full flex flex-row justify-center items-center">
        <div class="container sm:max-w-md mx-auto border-2 border-neutral-500 px-10 py-20">
            <h2 class="mb-12 text-center text-3xl font-bold">{{__('navbar.login')}}</h2>

            <form method="POST" action="{{'login'}}">
                @csrf

                @error('login', 'password')
                <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                     role="alert">
                    <span class="font-medium">{{ $message }}</span>
                </div>
                @enderror
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-white">{{__('auth.email')}} </label>
                    <input type="email" id="email"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="example@gmail.com">
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-white">{{__('auth.password')}}</label>
                    <input type="password" id="password"
                           class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                               class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                    </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-white">{{__('auth.remember_me')}}</label>
                </div>
                <button type="submit"
                        class="mt-10 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    {{__('auth.register_submit')}}
                </button>
            </form>
        </div>
    </div>
@endsection
