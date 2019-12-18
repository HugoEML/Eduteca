@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ver Categoria</h3>
                </div>
                <div class="card-body">
                    <p><strong>Nombre: </strong>{{ $category->name }}</p>
                    <p><strong>Slug: </strong>{{ $category->slug }}</p>
                    <p><strong>Descripcion: </strong>{{ $category->description }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection