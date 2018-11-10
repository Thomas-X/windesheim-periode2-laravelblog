@extends('layouts.layout')

@section('title', 'Blogs')

@section('content')
    <div>
        <h1 class="title">
            Blogs overview
        </h1>
        <a href="/blogs/create">
            create a new blog
        </a>
        <br/>
        <br/>
        <h1 class="subtitle">
            Blogs
        </h1>
        <ul>
            @foreach ($blogs as $blog)
                <li style="display: flex; justify-content: space-between; margin: 0 0 1rem 0;">
                    <a href="/blogs/{{$blog->id}}">
                        {{ $blog->title }}
                    </a>
                    <div style="display: grid; grid-template-columns: auto auto; grid-gap: 20px;">
                        <a href="/blogs/{{$blog->id}}/edit" class="button is-success">
                            update
                        </a>
                        <form method="post" action="/blogs/{{$blog->id}}">
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