@extends('layouts.appStore')

@section('content')
<div class="container" style="margin-top: 80px">
    <br>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-7">
                    <h4 style="color: black;">Productos</h4>
                </div>
            </div>
            <hr>
            <div class="row">
                @foreach($products as $pro)
                <div class="col-lg-3 col-md-6">
                    <div class="card" style="margin-bottom: 20px; height: auto;">
                        <div class="card-body">
                            <img src="/images/{{ $pro->image_path }}" class="img-fluid border-radius-lg mx-auto px-0 py-1" style="display: block;  object-fit: cover;" alt="{{ $pro->image_path }}">
                            <a href="">
                                <h6 class="card-title">{{ $pro->name }}</h6>
                            </a>
                            <p>${{ $pro->price }}</p>
                            <form action="{{ route('cart.store') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                <input type="hidden" value="1" id="quantity" name="quantity">
                                <div class="card-footer" style="background-color: white;">
                                    <div class="row">
                                        <button class="btn btn-secondary  m-0" class="tooltip-test" title="Agregar al carrito">
                                            <i class="fa fa-shopping-cart"></i> Agregar al carrito
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<style>
    body {
        /* background-color: red; */
        background: url("/images/sunflowers-background.jpg");
        background-repeat: repeat;
        background-attachment: fixed;
        background-size: 400px;
        backdrop-filter: blur(5px);

    }
</style>
@endsection