@extends('admin.layouts.layout')

@section('title', 'Rol')

@section('breadcrumbs')
    {{-- <li class="breadcrumb-item"><a href=""></a></li> --}}
    <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles de Usuario</a></li>
    <li class="breadcrumb-item">{{ $role->name }}</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Rol</h4>                    
                </div>
                <div class="card-body">
                   <p><strong>Nombre: </strong>{{ $role->name }}</p>
                   <p><strong>Slug: </strong>{{ $role->slug }}</p>
                   <p><strong>Descripcion: </strong>{{ $role->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
