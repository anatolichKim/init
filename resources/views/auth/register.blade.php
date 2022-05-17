@extends('layouts.auth')

@section('content')
        <div class="container px-6 py-12 h-full">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
                <div class="md:w-8/12 lg:w-6/12 mb-12 md:mb-0">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="w-full"
                        alt="Phone image"
                    />
                </div>
                <form method="POST" action="{{'register'}}">--}}
                                    @csrf

                                    @error('email', 'login', 'password')
                                    <div class="p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800"
                                         role="alert">
                                        <span class="font-medium">{{ $message }}</span>
                                    </div>
                                    @enderror
                                    <div class="mb-6">
                                        <label for="login" class="block mb-2 text-sm font-medium text-white">
                                            {{__('auth.login')}}
                                        </label>
                                        <input type="login" id="login" name="login"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               placeholder="name">
                                    </div>
                                    <div class="mb-6">
                                        <label for="email" class="block mb-2 text-sm font-medium text-white">
                                            {{__('auth.email')}}
                                        </label>
                                        <input type="email" id="email" name="email"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                               placeholder="example@gmail.com"
                                        >
                                    </div>
                                    <div class="mb-6">
                                        <label for="password" class="block mb-2 text-sm font-medium text-white">
                                            {{__('auth.password')}}
                                        </label>
                                        <input type="password" id="password" name="password"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        >
                                    </div>
                                    <div class="mb-6">
                                        <label for="password_confirmation" class="block mb-2 text-sm font-medium text-white">
                                            {{__('auth.password_repeat')}}
                                        </label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                               class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        >
                                    </div>
                                    <div class="flex items-start mb-6">
                                        <div class="flex items-center h-5">
                                            <input id="remember" type="checkbox" value=""
                                                   class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                            >
                                        </div>
                                        <label for="remember" class="ml-2 text-sm font-medium text-white">
                                            {{__('auth.remember_me')}}
                                        </label>
                                    </div>

                    <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        {{__('auth.register_submit')}}
                    </button>
                    <a
                        class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center mb-3"
                        style="background-color: #3b5998"
                        href="#!"
                        role="button"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                    >
                        <!-- Facebook -->
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512"
                            class="w-3.5 h-3.5 mr-2"
                        >
                            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                fill="currentColor"
                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
                            /></svg>Continue with Facebook
                    </a>


                    </form>
                </div>
            </div>
        </div>
@endsection
