@extends("layouts.main_layout")

@section("container")
  <h1>{{ $author->username }}'s Blogs</h1>
  @foreach ( $blogs as $blog )
    <article class="mt-4">
      <h2> <a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h2>
      <h6>Category : <a href="/category/{{ $blog->category->slug }}">{{ $blog->category->name }}</a> </h6>
      <p> {{ $blog->body }} </p>
    </article>
  @endforeach
@endsection