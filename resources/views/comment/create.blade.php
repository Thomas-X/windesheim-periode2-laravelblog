@extends('layouts.layout')

@section('title', 'Create a comment')

@section('content')

    <div>
        <form method="post" action="/blogs/{{$blog->id}}/comments">
            @csrf

            @component('components.validation-errors')
            @endcomponent

            <input type="hidden" name="blog_id" value="{{$blog->id}}"/>

            <div>
                <label class="label" for="comment">Title</label>
                <input class="input @component('components.is-danger-form', ['name' => 'comment'])@endcomponent" type="text" name="comment"
                       id="comment" value="{{ old('comment') ?? '' }}"/>
            </div>

            <br/>
            <button class="button is-success" type="submit">submit</button>

        </form>
    </div>

@endsection