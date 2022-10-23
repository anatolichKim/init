@extends('layouts.admin')

@section('content')
    <div class="mt-[20px]">
        <div class="pb-2">
            <form method="POST" action="{{route('admin.user.data.store')}}" class="ml-20 px-5 h-[50%]" id="createUserForm">
                @csrf
                <div>
                    @include('admin.messages.item_errors')
                </div>
                <div class="flex flex-column justify-between">
                    <div class="min-w-[70%]">
                        @include('admin.user.data.includes.item_create_main_col')
                    </div>

                    <div class="min-w-[20%]">
                        @include('admin.user.data.includes.item_create_add_col')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
