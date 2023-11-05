
@extends("layouts.main")

@section('container')

<article>
<h2>{{ $posts -> judul }}</h2>
<h5>{{ $posts -> penulis }}</h5>
{!! $posts -> isi !!}
</article>
<a href="/posts">Kembali</a>



@endsection