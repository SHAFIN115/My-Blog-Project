@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form method="post" action="{{ route('posts.store') }}">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="body">Body</label>
            <textarea name="body" id="body">{{ old('body') }}</textarea>
        </div>
        <button type="submit">Create Post</button>
    </form>
@endsection
