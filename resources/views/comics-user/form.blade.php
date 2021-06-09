<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('comic_id') }}
            {{ Form::text('comic_id', $comicsUser->comic_id, ['class' => 'form-control' . ($errors->has('comic_id') ? ' is-invalid' : ''), 'placeholder' => 'Comic Id']) }}
            {!! $errors->first('comic_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $comicsUser->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
