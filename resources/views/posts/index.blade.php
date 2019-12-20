@extends('layouts.app') @section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Lista de mis Posts
                        <a
                            href="{{ route('posts.create') }}"
                            class="btn btn-outline-primary btn-sm float-right"
                        >
                            Nuevo Post</a
                        >
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td width="10 px">
                                    <a
                                        href="{{ route('posts.show', $post->id) }}"
                                        class="btn btn-sm btn-secondary"
                                        >Ver</a
                                    >
                                </td>
                                <td width="10 px">
                                    <a
                                        href="{{ route('posts.edit', $post->id) }}"
                                        class="btn btn-sm btn-info text-light"
                                        >Editar</a
                                    >
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['posts.destroy',
                                    $post->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        ELIMINAR
                                    </button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->render() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
