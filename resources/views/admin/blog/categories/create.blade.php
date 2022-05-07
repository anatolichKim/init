@extends('layouts.admin')

@section('content')
    <div class="mt-[20px]">

        <div class="py-20">
            <form method="POST" action="{{route('admin.blog.categories.store')}}" class="ml-20 px-5 h-[50%]">
                @csrf
                <div>
                    @if($errors->any())
                        <div class="p-4 mb-4 text-sm text-white-700 bg-red-700 rounded-lg">
                            <span class="font-medium">{{$errors->first()}}</span>
                        </div>
                    @endif
                </div>
                <div class="flex flex-column justify-between">
                    <div class="min-w-[70%]">
                        @include('admin.blog.categories.includes.item_create_main_col')
                    </div>

                    <div class="min-w-[20%]">
                        @include('admin.blog.categories.includes.item_create_add_col')
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
