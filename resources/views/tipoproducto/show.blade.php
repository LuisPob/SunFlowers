@extends('layouts.app')

@section('template_title')
    {{ $tipoProducto->name ?? "{{ __('Show') Tipo Producto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tipo Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipo-Productos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $tipoProducto->name }}
                        </div>
                        <div class="form-group">
                            <strong>Slug:</strong>
                            {{ $tipoProducto->slug }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection