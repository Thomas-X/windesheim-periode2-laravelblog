@extends('layouts.layout')

@section('title', $comment->title)

@section('content')

    <div>
        <h1 class="title">Comment</h1>
        <div class="content">
            {{ $comment->comment }}
        </div>
    </div>


@endsection