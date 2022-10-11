@extends('layouts.auth')

@section('content')
    <div class="flex flex-row items-center justify-start bg-gray-700 rounded-lg border shadow-md max-w-[60%] h-[40%] self-center">
        <img class="object-cover w-5/12 h-auto rounded-t-lg" src="../images/create.jpg" alt="">
        <div class="w-6/12 ml-16 mb-0">
            <form method="POST" action="{{route('auth.register')}}">
                <div>
                    @include('auth.messages.item_errors')
                </div>
                @csrf
                <!-- Login input -->
                <div class="mb-6">
                    <label for="login_input">{{__('auth.name')}}</label>
                    <input
                        type="text"
                        class="form-control block w-full bg-gray-500 px-4 py-2 text-base font-normal text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-white focus:bg-gray-500 focus:text-base placeholder:text-gray-300 placeholder:text-base focus:border-blue-600 focus:outline-none"
                        id="name"
                        placeholder="John Doe"
                        value="{{old('name')}}"
                        name="name"
                    />
                </div>

                <!-- Email input -->
                <div class="mb-6">
                    <label for="email_input">{{__('auth.email')}}</label>
                    <input
                        type="text"
                        class="form-control block w-full bg-gray-500 px-4 py-2 text-base font-normal text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-white focus:bg-gray-500 focus:text-base placeholder:text-gray-300 placeholder:text-base focus:border-blue-600 focus:outline-none"
                        id="email_input"
                        placeholder="name@example.com"
                        value="{{old('email')}}"
                        name="email"
                    />
                </div>

                <!-- Password input -->
                <div class="mb-6">
                    <label for="password_input">{{__('auth.password')}}</label>
                    <input
                        type="password"
                        class="form-control block w-full bg-gray-500 px-4 py-2 text-base font-normal text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-white focus:bg-gray-500 focus:text-base placeholder:text-gray-300 placeholder:text-base focus:border-blue-600 focus:outline-none"
                        id="password"
                        placeholder="******"
                        name="password"
                    />
                </div>

                <!-- Confirm input -->
                <div class="mb-6">
                    <label for="password_rep_input">{{__('auth.password_repeat')}}</label>
                    <input
                        type="password"
                        class="form-control block w-full bg-gray-500 px-4 py-2 text-base font-normal text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-white focus:bg-gray-500 focus:text-base placeholder:text-gray-300 placeholder:text-base focus:border-blue-600 focus:outline-none"
                        id="password_confirmation"
                        placeholder="******"
                        name="password_confirmation"
                    />
                </div>

                <div class="text-center mt-8 lg:text-left">
                    <button
                        type="submit"
                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    >
                        {{__('auth.register')}}
                    </button>
                    <p class="text-sm font-semibold mt-2 pt-1 mb-0">
                        {{__('auth.redirect_login_text')}}
                        <a
                            href="{{route('auth.login')}}"
                            class="text-fuchsia-500 hover:text-yellow-300 focus:text-yellow-300  transition duration-200 ease-in-out"
                        >{{__('auth.redirect_login')}}</a
                        >
                    </p>
                </div>
            </form>
        </div>
    </div>
@endsection
