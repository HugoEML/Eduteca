@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Post</h4>                    
                </div>
                <div class="card-body">
                   <p><strong>Titulo: </strong>{{ $post->title }}</p>
                   <p><strong>Descripcion: </strong>{{ $post->description }}</p>
                   <p><strong>Autor: </strong>{{ $post->author }}</p>
                   <p><strong>Archivo: </strong>{{ $post->file }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
