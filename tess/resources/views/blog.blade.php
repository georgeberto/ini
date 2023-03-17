@extends('master')

@section('title', 'Blog')

@section('content')
    <style>
        .content {
            margin-left: 115px;
            margin-top: 20px;
            margin-right: 100px;
        }
        .content h1{
            color: blue
        }
    </style>
    <div class="content">
    @foreach ($contents as $content)
    <h1 style="color: blue">
    <a href="/content/"{{$content['slug']}}>{{$content['title']}}</a>
    </h1>
    <h4>{{$content['author']}}</h4>
    <p>{{$content['paragraph']}}</p>
    @endforeach
    </div>

@endsection
