@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $product->slug }}
                        </div>
                        <div class="form-group">
                            <strong>Detalles:</strong>
                            {{ $product->details }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $product->price }}
                        </div>
                        <div class="form-group">
                            <strong>Costo envio:</strong>
                            {{ $product->shipping_cost }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $product->description }}
                        </div>
                        <div class="form-group">
                            <strong>Id categoria:</strong>
                            {{ $product->category_id }}
                        </div>
                        <div class="form-group">
                            <strong>Brand Id:</strong>
                            {{ $product->brand_id }}
                        </div>
                        <div class="form-group">
                            <strong>Imagen:</strong>
                            {{ $product->image_path }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
