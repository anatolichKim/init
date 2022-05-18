@extends('layouts.blog')

@section('sidebar')
    @include('components.blog.init.sidebar')
@endsection

@section('navbar')
    @include('components.blog.init.navbar')
@endsection

@section('content')
    <div class="container">
        <div class="title text-center font-bold text-2xl mb-10">
            <h1>{{$post->title}}</h1>
        </div>
        <div class="content">
            {!! $post->text_html !!}
        </div>
    </div>
@endsection


