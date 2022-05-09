@extends('layouts.admin')

@section('content')
    <div class="mt-[20px]">

        <div class="py-20">
            <div class="ml-32">
                @include('admin/blog/categories/includes.item_show_main')
            </div>
        </div>
    </div>
@endsection
