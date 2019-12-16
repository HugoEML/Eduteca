<div class="form-group">
    {{ Form::label('title', 'Título del Archivo') }}
    {{ Form::text('title', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('description', 'Descripción del Archivo') }}
    {{ Form::text('description', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('author', 'Autor') }}
    {{ Form::text('author', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::label('file', 'Archivo') }}
    {{ Form::text('file', null, ['class' => 'form-control']) }}
</div>
<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-primary']) }}
</div>