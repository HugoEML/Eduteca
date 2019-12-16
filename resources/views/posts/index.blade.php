@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Posts</h4>
                    <div class="text-right">
                        @can('posts.create')
                        <a class="btn btn-primary" href="{{ route('posts.create') }}">Subir Archivo</a>
                        @endcan
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Titulo</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Autor</th>
                                <th scope="col">Archivo</th>
                                <th scope="col" colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title}}</td>
                                <td>{{ $post->description}}</td>
                                <td>{{ $post->author}}</td>
                                <td>{{ $post->file}}</td>
                                <td>
                                    @can('posts.show')
                                    <a class="btn btn-sm btn-outline-dark"
                                        href="{{ route('posts.show', $post) }}">Ver</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('posts.edit')
                                    <a class="btn btn-sm btn-info" href="{{ route('posts.edit', $post) }}">Editar</a>
                                    @endcan
                                </td>
                                <td>
                                    @can('posts.destroy')
                                    {!! Form::open(['route' => ['posts.destroy', $post], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">Elimar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $posts->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
