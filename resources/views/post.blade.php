
@extends("layouts.main")

@section('container')

<article>
<h2>{{ $posts['judul'] }}</h2>
<h5>{{ $posts['penulis'] }}</h5>
<p>{{ $posts['isi'] }}</p>
</article>
<a href="/posts">Kembali</a>



@endsection