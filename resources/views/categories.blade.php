@extends("layouts.main_layout")

@section("container")
  <h1>Daftar Kategori</h1>
  <ul>
    @foreach ($categories as $category )
      <li><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
    @endforeach
  </ul>
@endsection