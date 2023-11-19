
@extends('layouts/main')

@section('container')

@foreach ($posts as $post)
    <Article class="mb-5 border-bottom pb-3">   
    <h2><a class="text-decoration-none" href="/post/{{ $post->id }} "> {{  $post ->judul   }} </a></h2>
    <p>Oleh : <a class="text-decoration-none" href="/authors/{{ $post -> user -> id }}">{{ $post -> user -> name }}</a> Dalam kategori :<a  class="text-decoration-none" href="/categories/{{$post->category->slug}}"> {{ $post -> category -> name }} </a></p>
    <p>{{ $post -> excerpt }}</p>

    <a class="text-decoration-none pb-4" href="/post/{{ $post->id }} ">read more..</a>
    </Article>
    @endforeach
    
@endsection