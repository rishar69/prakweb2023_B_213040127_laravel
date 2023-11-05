
@extends('layouts/main')

@section('container')

@foreach ($posts as $post)
    <Article>   
    <h2><a href="/post/{{ $post->id }} "> {{  $post ->judul   }} </a></h2>
    <h5>{{ $post -> penulis }}</h5>
    <p>{{ $post -> excerpt }}</p>
    </Article>
    @endforeach
    
@endsection