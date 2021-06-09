<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('comic_id') }}
            {{ Form::text('comic_id', $comicsEvent->comic_id, ['class' => 'form-control' . ($errors->has('comic_id') ? ' is-invalid' : ''), 'placeholder' => 'Comic Id']) }}
            {!! $errors->first('comic_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('event_id') }}
            {{ Form::text('event_id', $comicsEvent->event_id, ['class' => 'form-control' . ($errors->has('event_id') ? ' is-invalid' : ''), 'placeholder' => 'Event Id']) }}
            {!! $errors->first('event_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
