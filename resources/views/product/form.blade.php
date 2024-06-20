<div class="box box-info padding-1">
    <div class="box-body">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('Nombre') }}
                    {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                    {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>

            <div class="col">
                <div class="form-group">
                    {{ Form::label('slug') }}
                    {{ Form::text('slug', $product->slug, ['class' => 'form-control' . ($errors->has('slug') ? ' is-invalid' : ''), 'placeholder' => 'Slug']) }}
                    {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('category_id', 'Categoría') }}
            {{ Form::select('category_id', $categories, old('category_id', $product->category_id), ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione la categoría del producto']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="row">
            <div class="col form-group">
                {{ Form::label('Precio') }}
                {{ Form::number('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
                {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
            </div>

            <div class="col form-group">
                {{ Form::label('Costo de envío') }}
                {{ Form::number('shipping_cost', $product->shipping_cost, ['class' => 'form-control' . ($errors->has('shipping_cost') ? ' is-invalid' : ''), 'placeholder' => 'Costo de envío']) }}
                {!! $errors->first('shipping_cost', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <div class="col form-group">
            {{ Form::label('Cantidad disponible') }}
            {{ Form::number('quantity', $product->quantity, ['class' => 'form-control' . ($errors->has('quantity') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad de producto disponible']) }}
            {!! $errors->first('quantity', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('image_path', 'Imagen del Producto') }}
            {{ Form::file('image_path', ['class' => 'form-control' . ($errors->has('image_path') ? ' is-invalid' : '')]) }}
            {!! $errors->first('image_path', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::textarea('description', $product->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('brand_id') }}
            {{ Form::text('brand_id', $product->brand_id, ['class' => 'form-control' . ($errors->has('brand_id') ? ' is-invalid' : ''), 'placeholder' => 'Brand Id']) }}
            {!! $errors->first('brand_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <!-- <div class="form-group">
            {{ Form::label('category_id') }}
            {{ Form::text('category_id', $product->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Id']) }}
            {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->
        <!-- <div class="form-group">
            {{ Form::label('image_path') }}
            {{ Form::text('image_path', $product->image_path, ['class' => 'form-control' . ($errors->has('image_path') ? ' is-invalid' : ''), 'placeholder' => 'Image Path']) }}
            {!! $errors->first('image_path', '<div class="invalid-feedback">:message</div>') !!}
        </div> -->


    </div>
    <div class="box-footer mt20">
        <button type="submit" style="color: white;" class="btn btn-primary">Guardar</button>
    </div>
</div>