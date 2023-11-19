
@extends('layouts/main')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }} </h1>
    <h2 class="mb-4">Post list: </h2>
@foreach ($posts as $post)
    <Article>   
    <h2><a href="/post/{{ $post->id }} "> {{  $post ->judul   }} </a></h2>
    <h5>{{ $post -> penulis }}</h5>
    <p>{{ $post -> excerpt }}</p>
    </Article>
    @endforeach
    
@endsection