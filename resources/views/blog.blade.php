@extends("layouts.main_layout")

@section("container")
  <h1>{{ $blog->title }}</h1>
  <h6><a href="/blogs?author={{ $blog->author->username }}">{{ $blog->author->username }}</a></h6>
  <h6><a href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a></h6>
  <p>{{ $blog->body }}</p>

  <a href="/blogs">Back to Blogs</a>
@endsection


