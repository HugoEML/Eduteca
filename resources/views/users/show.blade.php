@extends('admin.layouts.layout')

@section('title', 'Usuario')

@section('breadcrumbs')
    {{-- <li class="breadcrumb-item"><a href=""></a></li> --}}
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuarios</a></li>
    <li class="breadcrumb-item">{{ $user->name }}</li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Usuario</h4>                    
                </div>
                <div class="card-body">
                   <p><strong>Nombre: </strong>{{ $user->name }}</p>
                   <p><strong>Email: </strong>{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
