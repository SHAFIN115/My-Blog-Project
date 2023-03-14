@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h2>Recent Posts</h2>
            <hr>
            @foreach($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->body, 200) }}</p>
                        <a href="{{ route('blog.show', $post->id) }}" class="btn btn-primary">Read More &rarr;</a>
                    </div>
                    <div class="card-footer text-muted">
                        Posted {{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">About Me</h5>
                    <p class="card-text">I am a blogger and passionate about writing articles on various topics.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
