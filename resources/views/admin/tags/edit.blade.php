@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Etiqueta</h3>
                </div>
                <div class="card-body">
                    {!! Form::model($tag, ['route' => ['tags.update', $tag->id],
                    'method' => 'PUT']) !!}

                        @include('admin.tags.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection