
@extends("layouts.main")

@section('container')

<article>
<h2>{{ $posts -> judul }}</h2>
<p>By : {{ $posts -> penulis }}</ </p>
<p>Category : <a href="/categories/{{ $posts -> category -> slug }} ">{{ $posts -> category -> name  }}</a> </p>
{!! $posts -> isi !!}
</article>
<a href="/posts">Kembali</a>



@endsection