@extends('layouts.layout')

@section('content')
    <div class="col-sm-8 blog-main">

        @foreach($posts as $post)
            <div class="blog-post">

                <h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>

                <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

                <p>{{ $post->content }}</p>

            </div><!-- /.blog-post -->
        @endforeach

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div><!-- /.blog-main -->
@endsection