@extends('layouts.auth')

@section('content')
    <div class="flex flex-row items-center justify-start bg-gray-700 rounded-lg border shadow-md max-w-[60%] h-[40%] self-center">
        <img class="object-cover w-5/12 h-auto rounded-t-lg" src="../images/reset.jpg" alt="">
        <div class="w-6/12 ml-16 mb-0">
            <form method="POST" action="{{route('auth.forgot-submit-password')}}">
            @csrf
            @include('auth.messages.item_errors')
            <!-- Email input -->
                <div class="mb-6">
                    <label for="email">{{__('auth.email')}}</label>
                    <input
                        type="text"
                        class="form-control block w-full bg-gray-500 px-4 py-2 text-base font-normal text-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-white focus:bg-gray-500 placeholder:text-gray-300 placeholder:text-base focus:text-base focus:border-blue-600 focus:outline-none"
                        id="email"
                        name="email"
                        placeholder="name@example.com"
                        value="{{old('email')}}"
                    />
                </div>

                <div class="text-center mt-8 lg:text-left">
                    <button
                        type="submit"
                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    >
                        {{__('auth.reset_btn')}}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
