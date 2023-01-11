@extends('layout.main')

@section('container')
    <article>
        <h1>{{ $post->tittle }}</h1>

        <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        
        {!! $post->body !!}

    </article>
    <a href="/blog" class="d-block mt-4">Kembali</a>
@endsection


{{-- Post::create([
    'tittle' => 'Judul Pertama',
    'category_id => 1',
    'slug' => 'judul-pertama',
    'excerpt' => 'Lorem, ipsum dolor pertama',
    'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo, nisi reiciendis earum nemo adipisci animi totam itaque dignissimos, esse ab beatae veniam quibusdam obcaecati. Culpa beatae nostrum laboriosam expedita mollitia quibusdam suscipit ab,</p><p> aliquam incidunt ea tenetur atque, cumque, ipsam facere velit exercitationem excepturi hic sequi quaerat? Odio voluptates sapiente quasi totam, obcaecati ullam natus necessitatibus neque eligendi voluptate, sunt officia corporis quibusdam id rem labore cumque eos enim veniam veritatis aperiam commodi quisquam.</p><p> Doloremque cumque quae expedita aliquam laboriosam ullam qui hic possimus debitis magni nostrum reprehenderit autem dicta sit magnam aut recusandae fugit cupiditate exercitationem laudantium, neque, doloribus natus velit dolorum? Alias aliquid asperiores perspiciatis perferendis magni aperiam dolore. Libero qui ipsa perferendis!</p>'
]) --}}


