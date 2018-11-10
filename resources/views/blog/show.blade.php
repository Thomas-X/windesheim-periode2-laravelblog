@extends('layouts.layout')

@section('title', $blog->title)

@section('content')

    <div>
        <h1 class="title">{{ $blog->title }}</h1>
        <div class="content">
            {{ $blog->description }}
        </div>
    </div>

@endsection