<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name' , 'Nombre del rol') }}
            {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group d-none">
            {{ Form::label('guard_name') }}
            {{ Form::text('guard_name', 'web', ['class' => 'form-control' . ($errors->has('guard_name') ? ' is-invalid' : ''), 'placeholder' => 'Guard Name']) }}
            {!! $errors->first('guard_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('permissions', 'Permisos del rol') }}
            <div class="row">
                @foreach($permissions as $permission)
                    <div class="col-3">
                        <div class="form-check">
                            {{ Form::checkbox('permissions[]', $permission->id, in_array($permission->id, $rolePermissions) ? true : false, ['class' => 'form-check-input']) }}
                            {{ Form::label($permission->name, ucfirst($permission->name), ['class' => 'form-check-label']) }}
                        </div>
                    </div>
                @endforeach

        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>