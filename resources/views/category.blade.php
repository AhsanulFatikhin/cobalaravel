@extends('layout.main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
    <article class="mb-5">
        <h1>
            <a href="/posts/{{ $post->slug }}">{{ $post->tittle }}</a>
        </h1>
        <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <p>{{ $post->excerpt }}</p> 
    </article>   
    @endforeach
@endsection


