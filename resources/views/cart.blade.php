@extends('layouts.appStore')

@section('content')
<br>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUNFLOWER</title>
    <link rel="stylesheet" href="path/to/your/css/file.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body{
            background-image: url('/img/fondowelcome.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
           
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Añadir algo de transparencia para mejorar la legibilidad */
            padding: 20px;
            border-radius: 10px;
            margin-top: 80px;
            flex: 1; /* Permitir que el contenedor crezca y ocupe todo el espacio disponible */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Centrar verticalmente el contenido del contenedor */
        }

        .row {
            flex: 1;
            width: 100%; /* Asegurar que la fila ocupe todo el ancho */
        }

        .card {
            flex: 0 0 auto; /* Evitar que la tarjeta se expanda para llenar el espacio disponible */
        }
    </style>
</head>
<body>
    <div class="container">
        @if(session()->has('success_msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>{{ session()->get('success_msg') }}</strong></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(session()->has('alert_msg'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>{{ session()->get('alert_msg') }}</strong></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>{{ $error }}</strong></span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>
                @if(\Cart::getTotalQuantity() > 0)
                <h4>{{ \Cart::getTotalQuantity() }} Producto(s) en el carrito</h4><br>
                @else
                <h4>No hay productos en el carro</h4><br>
                <a href="{{ route('shop') }}" class="btn btn-dark">Continuar en la tienda</a>
                @endif

                @foreach($cartCollection as $item)
                <div class="row">
                    <div class="col-lg-3">
                        <img src="/images/{{ $item->attributes->image }}" class="img-thumbnail" width="200" height="200">
                    </div>
                    <div class="col-lg-5">
                        <p>
                            <b><a href="/shop/{{ $item->attributes->slug }}">{{ $item->name }}</a></b><br>
                            <b>Precio: </b>${{ $item->price }}<br>
                            <b>Sub total: </b>${{ \Cart::get($item->id)->getPriceSum() }}<br>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-row">
                            <form action="{{ route('cart.update') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group d-flex flex-row">
                                    <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                    <input type="number" class="form-control form-control-sm" value="{{ $item->quantity }}" id="quantity" name="quantity" style="width: 70px; margin-right: 10px;">
                                    <button class="btn btn-secondary btn-sm" style="margin-right: 10px;"><i class="fa fa-edit"></i></button>
                                </div>
                            </form>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" value="{{ $item->id }}" id="id" name="id">
                                <button class="btn btn-dark btn-sm" style="margin-right: 10px;"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
                @if(count($cartCollection) > 0)
                <form action="{{ route('cart.clear') }}" method="POST">
                    {{ csrf_field() }}
                    <button class="btn btn-secondary btn-md">Borrar Carrito</button>
                </form>
                @endif
            </div>
            @if(count($cartCollection) > 0)
            <div class="col-lg-5">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Total: </b>${{ \Cart::getTotal() }}</li>
                    </ul>
                </div>
                <br><a href="{{ route('shop') }}" class="btn btn-dark">Continuar en la tienda</a>
                <a href="/checkout" class="btn btn-success">Proceder al Checkout</a>
            </div>
            @endif
        </div>
        <br><br>
    </div>
</body>
</html>

@endsection