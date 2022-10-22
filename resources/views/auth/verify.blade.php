@extends('layouts.auth')

@section('content')

<div class="flex flex-col justify-items-center content-between mt-16 p-4 w-1/2 h-64 text-center bg-gray-900 rounded-lg border shadow-md">
    <h5 class="mb-2 text-3xl font-bold text-white">{{ __('auth.verify_email') }}</h5>

    @include('auth.messages.item_session')
    @include('auth.messages.item_errors')

    <div class="flex flex-row justify-center">
        <div>
            <form method="POST" action="{{ route('auth.email-verification-resend', ['email'=>$email]) }}">
                @csrf
                <button type="submit" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">{{ __('auth.verify_email_resend') }}</button>
            </form>
        </div>

        <div class="ml-8">
            <form method="GET" action="{{ route('auth.guest')}}">
                @csrf
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-5 py-2.5 text-center">{{ __('auth.get_back') }}</button>
            </form>
        </div>
    </div>

</div>
@endsection
