@extends("layouts.main_layout")

@section("container")
  @foreach ($blogs as $blog )
    <article class="mt-4">
      <h2> <a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a>  </h2>
      <h6>Writed by : <a href="/authors/{{ $blog->author->username }}">{{ $blog->author->username }}</a> in <a href="/category/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></h6>
      <p> {{ $blog->body }} </p>
    </article>
  @endforeach
@endsection