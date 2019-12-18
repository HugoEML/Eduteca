@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Lista de Categorias
                        <a href="{{ route('categories.create') }}" 
                        class="btn btn-outline-primary btn-sm float-right">
                        Nueva Categoria</a>
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
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td width="10 px">
                                        <a href="{{ route('categories.show', $category->id) }}"
                                            class="btn btn-sm btn-secondary">VER</a>
                                    </td>
                                    <td width="10 px">
                                        <a href="{{ route('categories.edit', $category->id) }}" 
                                            class="btn btn-sm btn-info text-light">EDITAR</a>
                                    </td>
                                    <td width="10 px">
                                        {!! Form::open(['route' => ['categories.destroy', $category->id], 
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
                    {{ $categories->render() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection