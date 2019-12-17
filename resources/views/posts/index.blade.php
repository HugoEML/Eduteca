@extends('layouts.app') @section('content')
<div class="container">
    <div class="col">
        <h2>Lista de Posts</h2>
        @foreach ($posts as $post)
        <div class="card">
            @if ($post->file)
            <img src="{{ $post->file }}" class="card-img-top" />
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="#" class="btn btn-primary float-right">Ver mas...</a>
            </div>
        </div><br>
        @endforeach
        {{ $posts->render() }}
    </div>
</div>
@endsection
