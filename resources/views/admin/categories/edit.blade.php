@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Editar Categoria</h3>
                </div>
                <div class="card-body">
                    {!! Form::model($category, ['route' => ['categories.update', $category->id],
                    'method' => 'PUT']) !!}

                        @include('admin.categories.partials.form')
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection