@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ver Etiqueta</h3>
                </div>
                <div class="card-body">
                    <p><strong>Nombre: </strong>{{ $tag->name }}</p>
                    <p><strong>Slug: </strong>{{ $tag->slug }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection