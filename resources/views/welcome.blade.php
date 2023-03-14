@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome to My Blog</h1>
        <p class="lead">Here you can read my latest posts on various topics.</p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('blog.index') }}" role="button">Read Blog</a>
        </p>
    </div>
@endsection
