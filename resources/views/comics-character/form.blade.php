<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('comic_id') }}
            {{ Form::text('comic_id', $comicsCharacter->comic_id, ['class' => 'form-control' . ($errors->has('comic_id') ? ' is-invalid' : ''), 'placeholder' => 'Comic Id']) }}
            {!! $errors->first('comic_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('personaje_id') }}
            {{ Form::text('personaje_id', $comicsCharacter->personaje_id, ['class' => 'form-control' . ($errors->has('personaje_id') ? ' is-invalid' : ''), 'placeholder' => 'Personaje Id']) }}
            {!! $errors->first('personaje_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>