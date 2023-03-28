@extends("layouts.main_layout")

@section("container")
  <h1>Ini Blogs Page</h1>
  @foreach ($blogs as $blog )
    <article class="mt-4">
      <h2> <a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a>  </h2>
      <h6>{{ $blog->author }}</h6>
      <p> {{ $blog->body }} </p>
    </article>
  @endforeach
@endsection