@extends('layouts.admin')

@section('content')
    <div class="mt-[20px]">

        <div class="py-20">
            <form method="POST" action="{{route('admin.blog.modules.update', $module->id)}}" class="ml-20 px-5 h-[50%]">
                @method('PATCH')
                @csrf
                <div>
                    @include('admin.messages.item_errors')
                </div>
                <div class="flex flex-column justify-between">
                    <div class="min-w-[70%]">
                        @include('admin.blog.modules.includes.item_edit_main_col')
                    </div>

                    <div class="min-w-[20%]">
                        @include('admin.blog.modules.includes.item_edit_add_col')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
