@extends('admin.layouts.layout')

@section('title', 'Lista de Roles')

@section('breadcrumbs')
    {{-- <li class="breadcrumb-item"><a href=""></a></li> --}}
    <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles de Usuario</a></li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col">

                            <h3>Roles</h3>
                        </div>
                        <div class="col">

                            @can('roles.create')
                            <a class="btn btn-dark float-right" href="{{ route('roles.create') }}">Crear</a>
                            @endcan
                        </div>
                    </div>
                    
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Role</th>
                                <th scope="col" colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id}}</td>
                                <td>{{ $role->name}}</td>
                                <td width="10px">
                                    @can('roles.show')
                                    <a class="btn btn-sm btn-outline-dark"
                                        href="{{ route('roles.show', $role) }}">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('roles.edit')
                                    <a class="btn btn-sm btn-outline-info" href="{{ route('roles.edit', $role) }}">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('roles.destroy')
                                    {!! Form::open(['route' => ['roles.destroy', $role], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
