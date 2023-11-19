@extends("layouts.main")

@section('container')

<article>
<h2>{{ $posts -> judul }}</h2>
<p>By : <a class="text-decoration-none" href="#">{{ $posts -> user -> name }}</a></ </p>
<p>Category : <a  class="text-decoration-none" href="/categories/{{ $posts -> category -> slug }} ">{{ $posts -> category -> name  }}</a> </p>
{!! $posts -> isi !!}
</article>
<br>
<br>
<a  class="text-decoration-none" href="/posts">Kembali</a>



@endsection