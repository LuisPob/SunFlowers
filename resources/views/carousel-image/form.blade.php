<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">

            {!! html()->label('New Carousel Image', 'image_path') !!}
            {!! html()->file('image_path')->class('form-control' . ($errors->has('image_path') ? ' is-invalid' : '')) !!}
            {!! $errors->first('image_path', '<div class="invalid-feedback">:message</div>') !!}


            <!-- {!! Form::label('', 'image_path') !!}
            {!! Form::file('image_path', ['class' => 'form-control' . ($errors->has('image_path') ? ' is-invalid' : '')]) !!}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}

            {{ Form::label('image_path') }}
            {{ Form::text('image_path', $carouselImage->image_path, ['class' => 'form-control' . ($errors->has('image_path') ? ' is-invalid' : ''), 'placeholder' => 'Image Path']) }}
            {!! $errors->first('image_path', '<div class="invalid-feedback">:message</div>') !!} -->
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>