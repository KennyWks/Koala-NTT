@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new post</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/posts" class="mb-3">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" value="{{old('title')}}" name="title"
                class="form-control @error('title') is-invalid @enderror" id="title" autofocus autocomplete="false">
            @error('title')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" value="{{old('slug')}}" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug" readonly>
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Categories</label>
            <select value="{{old('category_id')}}" class="form-select @error('category_id') is-invalid @enderror"
                name='category_id' id="category_id">
                <option value="" selected>Open this select category</option>
                @foreach ($categories as $category)
                @if (old('category_id') == $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
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
        <div class="mb-1">
            <label for="body" class="form-label">Body</label>
            @error('body')
            <div id="body" class="text-danger mb-1">
                {{ $message }}
            </div>
            @enderror
            <input id="x" value="{{old('body', 'Editor content goes here')}}" type="hidden" name="body">
            <trix-editor input="x"></trix-editor>
        </div>

        <button type="submit" class="btn btn-primary">Create post</button>
    </form>
</div>
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function () {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => {
            slug.setAttribute('value', data.value); 
        })
    })

    document.addEventListener('trix-file-accept', function(e) {
        e.preventDefault();
    })
</script>
@endsection