@extends('layouts.layout')

@section('title', 'Comments')

@section('content')
    <div>
        <form method="post" action="/blogs/{{$blog->id}}/comments/{{ $comment->id }}">
            @csrf
            @method('PATCH')

            @component('components.validation-errors')
            @endcomponent

            <input type="hidden" name="blog_id" value="{{$blog->id}}"/>

            <div>
                <label class="label" for="comment">Comment</label>
                <input class="input @component('components.is-danger-form', ['name' => 'comment'])@endcomponent" type="text" name="comment" id="comment" value="{{ old('comment') ?? $comment->title }}"/>
            </div>

            <br/>
            <button class="button is-success" type="submit">submit</button>

        </form>
    </div>
@endsection