@extends('layouts.layout')

@section('title', 'Comments')

@section('content')
    <div>
        <h1 class="title">
            Comments overview
        </h1>
        <a href="/comments/create">
            create a new comment
        </a>
        <br/>
        <br/>
        <h1 class="subtitle">
            Comments
        </h1>
        <ul>
            @foreach ($comments as $comment)
                <li style="display: flex; justify-content: space-between; margin: 0 0 1rem 0;">
                    <a href="/comments/{{$comment->id}}">
                        {{ $comment->comment }}
                    </a>
                    <div style="display: grid; grid-template-columns: auto auto; grid-gap: 20px;">
                        <a href="/comments/{{$comment->id}}/edit" class="button is-success">
                            update
                        </a>
                        <form method="post" action="/comments/{{$comment->id}}">
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
@endsection