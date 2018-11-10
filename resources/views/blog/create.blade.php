@extends('layouts.layout')

@section('title', 'Create a blog')

@section('content')

    <div>
        <form method="post" action="/blogs">
            @csrf

            @component('components.validation-errors')
            @endcomponent

            <div>
                <label class="label" for="title">Title</label>
                <input class="input @component('components.is-danger-form', ['name' => 'title'])@endcomponent" type="text" name="title"
                       id="title" value="{{ old('title') ?? '' }}"/>
            </div>
            <div>
                <label class="label" for="description">Description</label>
                <input class="input @component('components.is-danger-form', ['name' => 'description'])@endcomponent" type="text" name="description"
                       id="description" value="{{ old('description') ?? '' }}"/>
            </div>

            <br/>
            <button class="button is-success" type="submit">submit</button>

        </form>
    </div>

@endsection