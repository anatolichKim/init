@extends('layouts.admin')

@section('content')
    <div class="mt-[20px]">

        <div class="pb-2">
            <form method="POST" action="{{route('admin.blog.posts.store')}}" class="ml-20 px-5 h-[50%]">
                @csrf
                <div>
                    @include('admin.messages.item_errors')
                </div>
                <div class="flex flex-column justify-between">
                    <div class="min-w-[70%]">
                        @include('admin.blog.posts.includes.item_create_main_col')
                    </div>

                    <div class="min-w-[20%]">
                        @include('admin.blog.posts.includes.item_create_add_col')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
