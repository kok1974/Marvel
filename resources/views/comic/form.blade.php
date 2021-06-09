<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('comic_id') }}
            {{ Form::text('comic_id', $comic->comic_id, ['class' => 'form-control' . ($errors->has('comic_id') ? ' is-invalid' : ''), 'placeholder' => 'Comic Id']) }}
            {!! $errors->first('comic_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serie_id') }}
            {{ Form::text('serie_id', $comic->serie_id, ['class' => 'form-control' . ($errors->has('serie_id') ? ' is-invalid' : ''), 'placeholder' => 'Serie Id']) }}
            {!! $errors->first('serie_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $comic->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $comic->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $comic->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('formato') }}
            {{ Form::text('formato', $comic->formato, ['class' => 'form-control' . ($errors->has('formato') ? ' is-invalid' : ''), 'placeholder' => 'Formato']) }}
            {!! $errors->first('formato', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $comic->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mime') }}
            {{ Form::text('mime', $comic->mime, ['class' => 'form-control' . ($errors->has('mime') ? ' is-invalid' : ''), 'placeholder' => 'Mime']) }}
            {!! $errors->first('mime', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('guionista_id') }}
            {{ Form::text('guionista_id', $comic->guionista_id, ['class' => 'form-control' . ($errors->has('guionista_id') ? ' is-invalid' : ''), 'placeholder' => 'Guionista Id']) }}
            {!! $errors->first('guionista_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dibujante_id') }}
            {{ Form::text('dibujante_id', $comic->dibujante_id, ['class' => 'form-control' . ($errors->has('dibujante_id') ? ' is-invalid' : ''), 'placeholder' => 'Dibujante Id']) }}
            {!! $errors->first('dibujante_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('artistaPortada_id') }}
            {{ Form::text('artistaPortada_id', $comic->artistaPortada_id, ['class' => 'form-control' . ($errors->has('artistaPortada_id') ? ' is-invalid' : ''), 'placeholder' => 'Artistaportada Id']) }}
            {!! $errors->first('artistaPortada_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('variantesPortada') }}
            {{ Form::text('variantesPortada', $comic->variantesPortada, ['class' => 'form-control' . ($errors->has('variantesPortada') ? ' is-invalid' : ''), 'placeholder' => 'Variantesportada']) }}
            {!! $errors->first('variantesPortada', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
