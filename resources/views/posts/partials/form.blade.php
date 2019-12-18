{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
    {{ Form::label('category_id', 'Categorias') }}
    {{ Form::select('category_id', $categories, null, ['class' => ['form-control']]) }}
</div>

<div class="form-group">
    {{ Form::label('title', 'Nombre de la etiqueta:') }}
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>

<div class="form-group">
    {{ Form::label('slug', 'URL Amigable:') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<div class="form-group">
    {{ Form::label('file', 'Archivo:') }}
    {{ Form::file('file') }}
</div>

<div class="form-group">
    {{ Form::label('status', 'Estado:') }}
    <label>
        {{ Form::radio('status', 'PUBLISHED') }} Publicado
        {{ Form::radio('status', 'DRAFT') }} Borrador
    </label>
</div>

<div class="form-group">
    {{ Form::label('tags', 'Etiquetas:') }}
    <div>
        @foreach ($tags as $tag)
            <label>
                {{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
            </label>
        @endforeach
    </div>
</div>

<div class="form-group">
    {{ Form::label('excerpt', 'Extracto:') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Descripcion:') }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="/public/vendor/ckeditor/ckeditor.js"></script>
  <script>

  document.addEventListener("DOMContentLoaded", function(e) {
    var name = document.getElementById('name'),
        slug = document.getElementById('slug');

    name.onkeyup = function() {
      slug.value = string_to_slug(name.value);
    }
  });

  CKEDITOR.config.height = 400;
  CKEDITOR.config.width = 'auto';

  CKEDITOR.replace('description');

  function string_to_slug (str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    return str;
  }
  </script>
@endsection