@extends('dashboard.layouts.main')

@section('container')
    <style>
        #trix-toolbar-1>div.trix-button-row>span.trix-button-group.trix-button-group--file-tools {
            display: none;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <br>
    <h2 class="border-bottom pb-2">Create New Post</h2>
    <br>
    <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="col-lg-8">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control  @error('title')
            is-invalid
            @enderror"
                name="title" id="title" value="{{ old('title', $post->title) }}" required >
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text"
                class="form-control @error('slug')
                is-invalid
            @enderror"
                name="slug" id="slug" value="{{ old('slug', $post->slug) }}" required >
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="category_id">Category</label>
            <select class="form-select @error('category_id')
            is-invalid
            @enderror" name="category_id"
                id="category_id">
                @foreach ($categories as $category)
                    @if (old('category_id', $post->category->id) == $category->id)
                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('category_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label" for="body">Content</label>
            <input id="x" type="hidden" name="body" value="{{ old("body", $post->body) }}" >
            <trix-editor input="x" ></trix-editor>
            @error('body')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script>
        let title = document.querySelector("#title")
        let slug = document.querySelector("#slug")

        title.addEventListener("change", () => {
            fetch("/dashboard/posts/check-slug?title=" + title.value).then((res) => res.json().then((value) => {
                slug.value = value.slug
            }))
            console.log("CHANGE");
        })

        document.addEventListener("trix-file-accept", function(e) {
            e.preventDefault()
        })
    </script>
@endsection
