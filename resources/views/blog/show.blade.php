@extends('layouts.layout')

@section('title', $blog->title)

@section('content')

    <div>
        <h1 class="title">{{ $blog->title }}</h1>
        <div class="content">
            {{ $blog->description }}
        </div>
        <h1 class="title">Comments</h1>

        <div class="card">
            <div class="card-content">
                <ul>
                    @foreach ($blog->comments as $comment)
                        <li style="display: flex; justify-content: space-between; margin: 0 0 1rem 0;">
                            <a href="/blogs/{{$blog->id}}/comments/{{$comment->id}}">
                                {{ $comment->comment }}
                            </a>
                            <div style="display: grid; grid-template-columns: auto auto; grid-gap: 20px;">
                                <a href="/blogs/{{$blog->id}}/comments/{{$comment->id}}/edit" class="button is-success">
                                    update
                                </a>
                                <form method="post" action="/blogs/{{$blog->id}}/comments/{{$comment->id}}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button is-danger" onchange="this.form.submit()">
                                        remove
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="card-content">
                <a href="/blogs/{{$blog->id}}/comments/create" class="button is-success">
                    add a new comment
                </a>
            </div>
        </div>
    </div>

@endsection