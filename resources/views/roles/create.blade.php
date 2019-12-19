@extends('admin.layouts.layout')

@section('title', 'Crear Rol')

@section('breadcrumbs')
    {{-- <li class="breadcrumb-item"><a href=""></a></li> --}}
    <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Roles de Usuario</a></li>
    <li class="breadcrumb-item">Crear Rol</li>
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
                    {!! Form::open(['route' => ['roles.store']]) !!}
                        @include('roles.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
