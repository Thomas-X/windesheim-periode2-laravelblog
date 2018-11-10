@extends('layouts.layout')

@section('title', 'Blogs')

@section('content')
    <div>
        <form method="post" action="/blogs/{{ $blog->id }}">
            @csrf
            @method('PATCH')

            @component('components.validation-errors')
            @endcomponent

            <div>
                <label class="label" for="title">Title</label>
                <input class="input @component('components.is-danger-form', ['name' => 'title'])@endcomponent" type="text" name="title" id="title" value="{{ old('title') ?? $blog->title }}"/>
            </div>
            <div>
                <label class="label" for="description">Description</label>
                <input class="input @component('components.is-danger-form', ['name' => 'description'])@endcomponent" type="text" name="description" id="description"
                       value="{{ old('description') ?? $blog->description }}"/>
            </div>

            <br/>
            <button class="button is-success" type="submit">submit</button>

        </form>
    </div>
@endsection