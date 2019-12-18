@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Editar Mi Post</h4>                    
                </div>
                <div class="card-body">
                    {!! Form::model($post, ['route' => ['posts.update', $post], 'method' => 'PUT',
                    'files' => true]) !!}
                        @include('posts.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
