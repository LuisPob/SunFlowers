@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('template_title')
{{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Detalles productos'])
<!-- <div class="container-fluid py-4"></div> -->
<section class="content container-fluid mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="d-flex card-header align-items-center align-content-center">
                    <div class="float-right">
                        <a class="btn btn-primary mb-0 me-3" style="color: white;" href="{{ route('products.index') }}"> <i class="fa fa-arrow-left"></i></a>
                    </div>
                    <div class="float-left align-items-center align-content-center">
                        <span class="card-title">Detalles del producto</span>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('storage/images/' . $product->image_path) }}" alt="{{ $product->name }}" class="img-fluid" width="300"></td>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <strong>Nombre:</strong>
                                {{ $product->name }}
                            </div>
                            <div class="form-group">
                                <strong>Slug:</strong>
                                {{ $product->slug }}
                            </div>
                            <div class="form-group">
                                <strong>Precio:</strong>
                                {{ $product->price }}
                            </div>
                            <div class="form-group">
                                <strong>Cantidad:</strong>
                                {{ $product->quantity }}
                            </div>
                            <div class="form-group">
                                <strong>Costo envío:</strong>
                                {{ $product->shipping_cost }}
                            </div>
                            <div class="form-group">
                                <strong>Descripción:</strong>
                                {{ $product->description }}
                            </div>
                            <div class="form-group">
                                <strong>Id categoria:</strong>
                                {{ $category ? $category[0] : 'Sin categoría'  }}
                            </div>
                            <div class="form-group">
                                <strong>Brand Id:</strong>
                                {{ $product->brand_id }}
                            </div>
                            
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection