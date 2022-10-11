@extends('layouts.auth')

@section('content')
    <div class="flex flex-row items-center justify-start bg-gray-700 rounded-lg border shadow-md max-w-[60%] h-[40%] self-center">
        <img class="object-cover w-5/12 h-auto rounded-t-lg" src="../images/login.jpg" alt="">
        <div class="w-6/12 ml-16 mb-0">
            <form method="POST" action="{{route('auth.logger')}}">
                @csrf
                @include('auth.messages.item_errors')
                <!-- Email input -->
                <div class="mb-6">
                    <label for="email">{{__('auth.login_email')}}</label>
                    <input
                        type="text"
                        class="form-control block w-full bg-gray-500 px-4 py-2 text-base font-normal text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-white focus:bg-gray-500 placeholder:text-gray-300 placeholder:text-base focus:text-base focus:border-blue-600 focus:outline-none"
                        id="email"
                        name="email"
                        placeholder="name@example.com"
                        value="{{old('email')}}"
                    />
                </div>

                <!-- Password input -->
                <div class="mb-6">
                    <label for="password">{{__('auth.password')}}</label>
                    <input
                        type="password"
                        class="form-control block w-full bg-gray-500 px-4 py-2 text-base font-normal text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-white focus:bg-gray-500 placeholder:text-gray-300 placeholder:text-base focus:text-base focus:border-blue-600 focus:outline-none"
                        id="password"
                        placeholder="******"
                        name="password"
                    />
                </div>

                <div class="flex items-start text-white">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input
                                checked
                                id="remember"
                                type="checkbox"
                                name="remember_me"
                                class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                value="1"
                            >
                        </div>
                        <label for="remember" class="ml-2 text-sm font-medium dark:text-gray-300">{{__('auth.remember_me')}}</label>
                    </div>
                    <a href="#" class="ml-auto text-sm text-blue-500 hover:text-white">{{__('auth.forgot_password')}}</a>
                </div>

                <div class="text-center mt-8 lg:text-left">
                    <button
                        type="submit"
                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    >
                        {{__('auth.login_submit')}}
                    </button>
                    <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                        {{__('auth.redirect_signup_text')}}
                        <a
                            href="{{route('auth.registration')}}"
                            class="text-fuchsia-500 hover:text-yellow-300 focus:text-yellow-300  transition duration-200 ease-in-out"
                        >{{__('auth.redirect_signup')}}</a
                        >
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
