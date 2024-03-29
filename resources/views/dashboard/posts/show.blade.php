@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <article class="mt-3">
                <h3 class="mb-3">{{$post["title"]}}</h3>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to All
                    My Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span
                        data-feather="edit"></span> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure to remove this data?')">
                        <span data-feather="x-circle"></span> Delete
                    </button>
                </form>
                @if ($post->image)
                <div style="height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="{{$post->category->name}}"
                        class="img-fluid mt-3 card-img-top">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{$post->category->name}}"
                    alt="{{$post->category->name}}" class="img-fluid mt-3 card-img-top">
                @endif
                <article class="my-3 fs-5">
                    {!! $post["body"] !!}
                </article>
            </article>
        </div>
    </div>
</div>
@endsection