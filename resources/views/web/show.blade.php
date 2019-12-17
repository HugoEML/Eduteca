@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>{{ $post->title }}</h3>
            <div class="card">
                @if ($post->file)
                <img src="{{ $post->file }}" class="card-img-top" />
                @endif
                <div class="card-body">
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <hr>
                    {!! $post->description !!}
                    <hr>
                    <p class="card-text">Categoria:
                        <a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
                    </p>
                    <hr>
                    <p class="card-text">Etiquetas:
                        @foreach ($post->tags as $tag)
                        <a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a>
                        @endforeach
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
