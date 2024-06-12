<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('footer_title_id', 'Título') }}
            {{ Form::select('footer_title_id',$titles , old('footer_title_id', $footerContent->footer_title_id),['class' => 'form-control' . ($errors->has('footer_title_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione el titulo']) }}
            {!! $errors->first('footer_title_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        
        <div class="form-group">
            {{ Form::label('content', 'Contenido a listar') }}
            {{ Form::text('content', $footerContent->content, ['class' => 'form-control' . ($errors->has('content') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo']) }}
            {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('link') }}
            {{ Form::text('link', $footerContent->link, ['class' => 'form-control' . ($errors->has('content') ? ' is-invalid' : ''), 'placeholder' => 'https://www.ejemplo.com/']) }}
            {!! $errors->first('link', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>