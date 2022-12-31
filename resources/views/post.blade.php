@extends('layout.main')

@section('container')
    <article>
        <h1>{{ $post["tittle"] }}</h1>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>

    </article>
    <a href="/blog">Kembali</a>
@endsection