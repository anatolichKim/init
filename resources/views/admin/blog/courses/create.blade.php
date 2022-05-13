@extends('layouts.admin')

@section('content')
    <div class="mt-[20px]">

        <div class="py-20">
            <form method="POST" action="{{route('admin.blog.courses.store')}}" class="ml-20 px-5 h-[50%]">
                @csrf
                <div>
                    @include('admin.messages.item_errors')
                </div>
                <div class="flex flex-column justify-between">
                    <div class="min-w-[70%]">
                        @include('admin.blog.courses.includes.item_create_main_col')
                    </div>

                    <div class="min-w-[20%]">
                        @include('admin.blog.courses.includes.item_create_add_col')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection