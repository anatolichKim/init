@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @include('admin.messages.item_session')
            @include('admin.blog.categories.includes.item_index_tools')
            @include('admin.blog.categories.includes.item_index_table')
        </div>
        @include('admin.blog.categories.includes.item_index_paginator')
    </div>
@endsection
