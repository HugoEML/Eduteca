@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Etiquetas
                        <a href="{{ route('tags.create') }}" 
                        class="btn btn-outline-primary btn-sm float-right">
                        Nueva Etiqueta</a>
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
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{ $tag->id }}</td>
                                    <td>{{ $tag->name }}</td>
                                    <td width="10 px">
                                        <a href="{{ route('tags.show', $tag->id) }}"
                                            class="btn btn-sm btn-secondary">VER</a>
                                    </td>
                                    <td width="10 px">
                                        <a href="{{ route('tags.edit', $tag->id) }}" 
                                            class="btn btn-sm btn-info text-light">EDITAR</a>
                                    </td>
                                    <td width="10 px">
                                        {!! Form::open(['route' => ['tags.destroy', $tag->id], 
                                        'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                ELIMINAR
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $tags->render() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection