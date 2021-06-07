<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('event_id') }}
            {{ Form::text('event_id', $event->event_id, ['class' => 'form-control' . ($errors->has('event_id') ? ' is-invalid' : ''), 'placeholder' => 'Event Id']) }}
            {!! $errors->first('event_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('titulo') }}
            {{ Form::text('titulo', $event->titulo, ['class' => 'form-control' . ($errors->has('titulo') ? ' is-invalid' : ''), 'placeholder' => 'Titulo']) }}
            {!! $errors->first('titulo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $event->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('imagen') }}
            {{ Form::text('imagen', $event->imagen, ['class' => 'form-control' . ($errors->has('imagen') ? ' is-invalid' : ''), 'placeholder' => 'Imagen']) }}
            {!! $errors->first('imagen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('inicio') }}
            {{ Form::text('inicio', $event->inicio, ['class' => 'form-control' . ($errors->has('inicio') ? ' is-invalid' : ''), 'placeholder' => 'Inicio']) }}
            {!! $errors->first('inicio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fin') }}
            {{ Form::text('fin', $event->fin, ['class' => 'form-control' . ($errors->has('fin') ? ' is-invalid' : ''), 'placeholder' => 'Fin']) }}
            {!! $errors->first('fin', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
